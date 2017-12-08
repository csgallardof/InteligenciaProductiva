<?php

namespace App\Http\Controllers;

use App\Solucion;
use App\Pajustada;
use App\Actividad;
use App\ActorSolucion;
use App\Archivo;

use File;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    public function verActividadesDespliegue($idSolucion){
                
        $solucion = Solucion::find($idSolucion);


        $actividades = Actividad::where('solucion_id','=',$idSolucion)
                                ->where('tipo_fuente','=', 1)
                                ->orderBy('created_at','DESC')->get();
                                
        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('tipo_actor','ASC')->get();


        
        return view('institucion.actividades.index')->with(["actoresSoluciones"=>$actoresSoluciones,"solucion"=>$solucion,"actividades"=>$actividades]);
    }

    public function verActividadesConsejo($idSolucion){

        $solucion = Solucion::find($idSolucion);

        $actoresSoluciones = ActorSolucion::all();

        return view('institucion.actividades.index')->with(["actoresSoluciones"=>$actoresSoluciones,"solucion"=>$solucion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDespliegue($idSolucion)
    {
        $solucion = Solucion::find($idSolucion);

        $actividades = Actividad::where('solucion_id','=',$idSolucion)
                                ->where('tipo_fuente','=', 1)
                                ->orderBy('created_at','ASC')->get();

        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('tipo_actor','ASC')->get();

        return view('institucion.actividades.create')->with(["solucion"=>$solucion,"actividades"=>$actividades,"actoresSoluciones"=>$actoresSoluciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createConsejo($idSolucion)
    {
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveActividadDespliegue(Request $request, $idSolucion)
    {       

        $actividad = new Actividad;
        $actividad-> comentario = $request-> comentario;
        $actividad-> solucion_id = $idSolucion;
        $actividad-> ejecutor_id = $request-> institucion_id;
        $actividad-> tipo_fuente = 1;
        $actividad-> save();  

        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {

                $nombreArchivo = $file->getClientOriginalName();
                $nombreArchivo = strtotime("now")."_despliegue_".$idSolucion."_**".$nombreArchivo;     // agregamos la fecha 

                $archivo = new Archivo;
                $archivo-> nombre_archivo= $nombreArchivo;
                $archivo-> actividad_id= $actividad->id;
                $archivo->save();

                /*$file = $request->file('imagen');*/
                \Storage::disk('local3')->put($nombreArchivo,  \File::get($file) ); 
            }
        }
        Flash::success("Se ha creado la actividad exitosamente");
        return redirect()->route('verSolucion.despliegue',$idSolucion);
        
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
        $item = provincia::find($id);

        return view('admin.provincias.edit', compact('item'));
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
        //
        $provincia = provincia::find($id);
        $this ->validate($request,[
            'nombre_provincia' =>'required'
        ]);
        $provincia->nombre_provincia = $request->nombre_provincia;
        $provincia->save();
        return redirect('provincias');
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
}