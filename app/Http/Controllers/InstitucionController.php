<?php

namespace App\Http\Controllers;
use App\ActorSolucion;
use App\Solucion;
use App\User;
use App\Pajustada;
use DB;
use Laracasts\Flash\Flash;
use Mail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $rol = DB::table('roles')->where('nombre_role', "Institución")->first();  //Obtener id rol de participante
        
        $instituciones = User::where('tipo_fuente','=','3')
                            ->whereHas('roles', function ($q) use ($rol) {
                                    $q->where('roles.id', $rol-> id);
                            })
        ->orderBy('name','ASC')->paginate(25);
        return view('admin.institucion.home')->with(["instituciones"=>$instituciones]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.institucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institucion = new User;
        $this ->validate($request,[
            'nombre_user' =>'required',
            'email' =>'min:15|max:250|required|unique:users',
            'cedula' =>'min:8|max:30|required|unique:users',
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = $request->cedula;
        $institucion->email = $request->email;
        $password = str_split($request->nombre_user,3)[0].
                    str_split($request->email,3)[0].
                    substr($request->cedula, -4);  
        $institucion->password = bcrypt($password);
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        
        $institucion-> save(); 
        $rol = DB::table('roles')->where('nombre_role', "Institución")->first();
        $institucion->roles()-> attach($rol-> id);

        /*$this->enviarCorreoRegistro($institucion , $password);*/

        return redirect('/admin/instituciones');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = User::find($id);

        return view('admin.institucion.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institucion = user::find($id);
        $this ->validate($request,[
            'nombre_user' =>'required',
            'email' =>'min:15|max:250|required|unique:users',
            'cedula' =>'min:8|max:30|required|unique:users',
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = $request->cedula;
        $institucion->email = $request->email;
        $institucion->password = bcrypt("acdc");
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        $institucion-> save(); 
       
        return redirect()->route('instituciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $usuario_id = Auth::user()->id;
        //dd($usuario_id);
        $tipo_fuente = Auth::user()->tipo_fuente;
       

        $totalDespliegue = Solucion::where('tipo_fuente','=',1)->count();
        $totalConsejo = Solucion::where('tipo_fuente','=',2)->count();

        $totalResponsable = ActorSolucion::where('user_id','=',$usuario_id)
                                         ->where('tipo_actor','=','1')->count();
        $totalCorresponsable = ActorSolucion::where('user_id','=',$usuario_id)
                                         ->where('tipo_actor','=','2')->count();

        $solucionesDespliegue= DB::select("SELECT solucions.*, actor_solucion.tipo_actor,estado_solucion.nombre_estado,pajustadas.nombre_pajustada FROM solucions 
                                        INNER JOIN actor_solucion ON actor_solucion.solucion_id = solucions.id
                                        INNER JOIN estado_solucion ON estado_solucion.id = solucions.estado_id
                                         LEFT JOIN pajustadas ON solucions.pajustada_id = pajustadas.id
                                        WHERE 
                                        ( actor_solucion.tipo_fuente = 1 AND actor_solucion.user_id = ".$usuario_id." AND tipo_actor = 1 ) OR
                                        ( actor_solucion.tipo_fuente = 1 AND actor_solucion.user_id = ".$usuario_id." AND tipo_actor = 2 ); 
                                        ");
        //dd($solucionesDespliegue);
        $solucionesCCPT = DB::select("SELECT DISTINCT pajustadas.*, actor_solucion.tipo_actor, solucions.tipo_fuente 
                                    FROM pajustadas 
                                    INNER JOIN actor_solucion ON actor_solucion.solucion_id = pajustadas.id
                                    INNER JOIN solucions ON solucions.pajustada_id = pajustadas.id
                                    WHERE 
                                    ( actor_solucion.tipo_fuente = 2 AND actor_solucion.user_id = ".$usuario_id." AND tipo_actor = 1 ) OR
                                    ( actor_solucion.tipo_fuente = 2 AND actor_solucion.user_id = ".$usuario_id." AND tipo_actor = 2 ); 
                                    ");

        $notificaciones = DB::select("SELECT actividades.* FROM actividades
                                                    INNER JOIN solucions ON solucions.id = actividades.solucion_id
                                                    INNER JOIN actor_solucion ON actor_solucion.solucion_id = solucions.id
                                                    WHERE actor_solucion.user_id = ".$usuario_id." 
                                                    AND actividades.ejecutor_id = ".$usuario_id."
                                                    AND actividades.fecha_inicio >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                                                    ORDER BY actividades.fecha_inicio DESC; ");

        //dd($tipo_fuente);
        return view('institucion.home')->with([ "solucionesDespliegue"=>$solucionesDespliegue,
                                                "solucionesCCPT"=>$solucionesCCPT,
                                                "totalDespliegue"=>$totalDespliegue,
                                                "totalConsejo"=>$totalConsejo,
                                                "totalResponsable"=>$totalResponsable,
                                                "totalCorresponsable"=>$totalCorresponsable,
                                                "notificaciones"=>$notificaciones,
                                                "tipo_fuente"=>$tipo_fuente     
                                                 ]);   
        
    }

    //ASIGNACION DE ACTOR SOLUCION



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexActorSolucion(Request $request)
    {
                
        $actoresSoluciones = ActorSolucion::all();

        return view('admin.actores.home')->with(["actoresSoluciones"=>$actoresSoluciones]); 
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm2(Request $request)
    {
        $instituciones = DB::table('users')
                        ->select('users.id','name')
                        ->join('role_user','users.id','=','role_user.user_id')
                        ->where('role_user.role_id','=',3)
                        ->orderBy('name')->get();

        return view('admin.actores.asignar')->with(["instituciones"=>$instituciones]);
    }

    public function asignarActorSolucion(Request $request)
    {
        
        if( $request->tipo_actor_id == 1){   //Para registrar Responsable a una solucion
            $validacion = ActorSolucion::where('solucion_id','=',$request->solucion_id)
                                    ->where('tipo_actor','=', 1 )->get();

            $validacion2 = ActorSolucion::where('solucion_id','=',$request->solucion_id)
                                    ->where('user_id','=', $request->institucion)
                                    ->where('tipo_actor','=', 2 )->get();

            if( count($validacion) == 0 && count($validacion2) == 0){
                $actorSolucion = new ActorSolucion;
                $actorSolucion->user_id = $request->institucion;
                $actorSolucion->solucion_id = $request->solucion_id;
                $actorSolucion->tipo_actor = 1;
                $actorSolucion->tipo_fuente = $request->tipo_fuente_id;
                $actorSolucion->save();    
                Flash::success("Asignación exitosa");

                $user = User::find($request-> institucion);

                if($request->tipo_fuente_id ==1){
                    $solucion = Solucion::find($request-> solucion_id);
                    $solucion-> estado_id = 2; // 2 = Propuesta con responsable asignado
                    $solucion->save();

                    /*$this->enviarCorreoAsignacion($user, 'Responsable', $solucion->verbo_solucion." ".$solucion->sujeto_solucion." ".$solucion->complemento_solucion );*/
                }
                if($request->tipo_fuente_id ==2){
                    $pajustada = Pajustada::find($request-> solucion_id);
                    /*$this->enviarCorreoAsignacion($user, 'Responsable', $pajustada->nombre_pajustada );*/

                    $solucionesOriginales = Solucion::where('pajustada_id','=',$request->solucion_id)->get();
                    foreach ($solucionesOriginales as $solucion) {
                        $solucionCCPT= Solucion::find($solucion-> id);
                        $solucionCCPT-> estado_id = 2;  // 2 = Propuesta con responsable asignado
                        $solucionCCPT->save();
                    }
                }                
                
            }else{
                if(count($validacion) > 0) {
                    Flash::error("La solucion ya tiene un responsable");    
                }
                if(count($validacion2) > 0) {
                    Flash::error("La institucion ya es actor de la solucion seleccionada");
                }
                
            }

        }

        if( $request->tipo_actor_id == 2){    

            $validacion = DB::select("SELECT * FROM actor_solucion WHERE
                                     ( user_id =".$request->institucion." AND solucion_id =".$request->solucion_id." AND tipo_actor = 1 ) OR
                                     ( user_id =".$request->institucion." AND solucion_id =".$request->solucion_id." AND tipo_actor = 2 )
                                     " );
            
            if( count($validacion)== 0 ){
                $actorSolucion = new ActorSolucion;
                $actorSolucion->user_id = $request->institucion;
                $actorSolucion->solucion_id = $request->solucion_id;
                $actorSolucion->tipo_actor = 2;
                $actorSolucion->tipo_fuente = $request->tipo_fuente_id;
                $actorSolucion->save();    
                Flash::success("Asignacion exitosa");

                $user = User::find($request-> institucion);

                if($request-> tipo_fuente ==1){
                    $solucion = Solucion::find($request-> solucion_id);
                    /*$this->enviarCorreoAsignacion($user, 'Corresponsable', $solucion->verbo_solucion." ".$solucion->sujeto_solucion." ".$solucion->complemento_solucion );*/
                }
                if($request-> tipo_fuente ==2){
                    $pajustada = Pajustada::find($request-> solucion_id);
                    /*$this->enviarCorreoAsignacion($user,'Corresponsable',$pajustada->nombre_pajustada );*/
                }
            }else{
                Flash::error("La institucion ya es actor de la solucion seleccionada");
            }

        }
        
        $actoresSoluciones = ActorSolucion::all();

        return view('admin.actores.home')->with(["actoresSoluciones"=>$actoresSoluciones]); 


    }

    // FIN ASIGNACION DE ACTOR SOLUCION



    public function enviarCorreoRegistro($institucion, $password){
        $correo= $institucion-> email;
        Mail::send('emails.correoRegistro',["institucion"=>$institucion, "password"=>$password], function($msj) use ($correo) {
            $msj->subject('Inteligencia Productiva - Notificación de registro en Inteligencia Productiva');
            //$msj->to( $correo);
            $msj->to( 'js-arcos@hotmail.com');
        });
    }
    
    public function enviarCorreoAsignacion($institucion, $responsabilidad, $txt_solucion){
        $correo= $institucion-> email;
        Mail::send('emails.correoAsignacion',["institucion"=>$institucion, "responsabilidad"=>$responsabilidad, "txt_solucion"=>$txt_solucion], function($msj) use ($correo){
            $msj->subject('Inteligencia Productiva - Notificación de asignacion de Responsabilidad');
            $msj->to( $correo);
        });
    }

}

