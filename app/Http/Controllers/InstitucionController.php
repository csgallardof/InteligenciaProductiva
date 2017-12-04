<?php

namespace App\Http\Controllers;
use App\ActorSolucion;
use App\Solucion;
use App\User;
use DB;

use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actoresSoluciones = ActorSolucion::orderBy('solucion_id','ASC')->paginate(25);  //Obtener id rol de participante

        return view('admin.institucion.home')->with(["actoresSoluciones"=>$actoresSoluciones]);   
        
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
        $institucion = new user;
        $this ->validate($request,[
            'nombre_user' =>'required',
            'email' =>'min:15|max:250|required|unique:users',
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = "";
        $institucion->email = $request->email;
        $institucion->password = bcrypt("acdc");
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        $institucion-> save(); 
        $rol = DB::table('roles')->where('nombre_role', "Institucion")->first();
        $institucion->roles()-> attach($rol-> id);
        return redirect('instituciones');
        
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
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = "";
        $institucion->email = $request->email;
        $institucion->password = bcrypt("acdc");
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        $institucion-> save(); 
       
        return redirect('instituciones');
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
        

        return view('institucion.home');   
        
    }

    //ASIGNACION DE ACTOR SOLUCION



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexActorSolucion(Request $request)
    {
        
        
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

        return view('admin.institucion.asignar')->with(["instituciones"=>$instituciones]);
    }

    public function asignarActorSolucion(Request $request)
    {
        
        if( $request-> tipo_fuente_id == 1 )  //DESPLIEGUE TERRITORIAL
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
                    $actorSolucion->save();    
                    echo "Asignacion exitosa ";
                }else{
                    if(count($validacion) > 0) {
                        echo "La solucion ya tiene un responsable<br><br>";    
                    }
                    if(count($validacion2) > 0) {
                        echo "La institucion ya es actor de la solucion seleccionada";
                    }
                    
                }

            }

            if( $request->tipo_actor_id == 2){    

                $validacion = DB::select("SELECT * FROM actor_Solucion WHERE
                                         ( user_id =".$request->institucion." AND solucion_id =".$request->solucion_id." AND tipo_actor = 1 ) OR
                                         ( user_id =".$request->institucion." AND solucion_id =".$request->solucion_id." AND tipo_actor = 2 )
                                         " );
                
                if( count($validacion)== 0 ){
                    $actorSolucion = new ActorSolucion;
                    $actorSolucion->user_id = $request->institucion;
                    $actorSolucion->solucion_id = $request->solucion_id;
                    $actorSolucion->tipo_actor = 2;
                    $actorSolucion->save();    
                    echo "Asignacion exitosa ";
                }else{
                    echo "La institucion ya es actor de la solucion seleccionada";
                }

            }
        }


        if( $request-> tipo_fuente_id == 2)  //CONSEJO CONSULTIVO
        {
            if( $request->tipo_actor_id == 1){   //Para registrar Responsable a una solucion
                $validacion = DB::table('solucions')
                                    ->select('solucions.id')
                                    ->join('pajustadas','pajustadas.id','=','solucions.pajustada_id')
                                    ->join('actor_solucion','actor_solucion.solucion_id','=','solucions.id')
                                    ->where('pajustadas.id','=',$request->solucion_id)
                                    ->where('actor_solucion.tipo_actor','=', 1 )->get();

                $validacion2 = DB::table('solucions')
                                    ->select('solucions.id')
                                    ->join('pajustadas','pajustadas.id','=','solucions.pajustada_id')
                                    ->join('actor_solucion','actor_solucion.solucion_id','=','solucions.id')
                                    ->where('pajustadas.id','=',$request->solucion_id)
                                    ->where('actor_solucion.user_id','=', $request->institucion)
                                    ->where('actor_solucion.tipo_actor','=', 2 )->get();

                if( count($validacion) == 0 && count($validacion2) == 0){
                    $poriginales = Solucion::where('pajustada_id','=',$request->solucion_id)
                                    ->where('tipo_fuente','=',2)->get();
                    
           
                    foreach ($poriginales as $poriginal) {
                        
                        $validacion2 = ActorSolucion::where('solucion_id','=',$poriginal->id)
                                        ->where('tipo_actor','=', 1 )->get();

                        if( count($validacion2) == 0 ){              
                            $actorSolucion = new ActorSolucion;
                            $actorSolucion->user_id = $request->institucion;
                            $actorSolucion->solucion_id = $poriginal->id;
                            $actorSolucion->tipo_actor = 1;
                            $actorSolucion->save();
                            echo "Asignación exitosa";    
                        }
                    }
                    
                }else{
                    if(count($validacion) > 0) {
                        echo "La solucion ya tiene un responsable<br><br>";    
                    }
                    if(count($validacion2) > 0) {
                        echo "La institucion ya es actor de la solucion seleccionada";
                    }
                 
                }

            }

            if( $request->tipo_actor_id == 2){      //Para registrar Corresponsable a una 

                $validacion = DB::select("SELECT solucions.id FROM solucions 
                                        INNER JOIN pajustadas ON pajustadas.id = solucions.pajustada_id
                                        INNER JOIN actor_solucion ON actor_solucion.solucion_id = solucions.id
                                        WHERE 
                                        ( pajustadas.id = ".$request->solucion_id." AND actor_solucion.user_id = ".$request->institucion." AND tipo_actor = 1 ) OR
                                        ( pajustadas.id = ".$request->solucion_id." AND actor_solucion.user_id = ".$request->institucion." AND tipo_actor = 2 ) 
                                        ");

                if( count($validacion)== 0 ){
                    $poriginales = Solucion::where('pajustada_id','=',$request->solucion_id)
                                    ->where('tipo_fuente','=',2)->get();
                    foreach ($poriginales as $poriginal) {
                        $validacion2 = ActorSolucion::where('solucion_id','=',$poriginal->id)
                                        ->where('user_id','=', $request->institucion )->get();
                        var_dump($validacion2);
                        echo "<br><br>";
                        if( count($validacion2) == 0 ){  
                            echo "x aqui paso <br><br>";
                            $actorSolucion = new ActorSolucion;
                            $actorSolucion->user_id = $request->institucion;
                            $actorSolucion->solucion_id = $poriginal->id;
                            $actorSolucion->tipo_actor = 2;
                            $actorSolucion->save();
                        }
                    }    
                    echo "Asignacion exitosa ";
                }else{
                    echo "La institucion ya es actor de la solucion seleccionada";
                }

            }
        }
       
        /*return view('admin.institucion.asignar')->with(["instituciones"=>$instituciones]);*/
    }



    // FIN ASIGNACION DE ACTOR SOLUCION
}