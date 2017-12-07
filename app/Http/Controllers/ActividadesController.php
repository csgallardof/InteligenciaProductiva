<?php

namespace App\Http\Controllers;

use App\Solucion;
use App\Pajustada;
use App\Actividad;
use App\ActorSolucion;
use App\Archivo;

use File;
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
        //
        return view('admin.provincias.create');
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
        $actividad-> fecha_inicio  = $request->fecha_inicio. " 00:00:00";
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
                $nombreArchivo = strtotime("now")."_despliegue_".$idSolucion."_".$nombreArchivo;     // agregamos la fecha 

                $archivo = new Archivo;
                $archivo-> nombre_archivo= $nombreArchivo;
                $archivo-> actividad_id= $actividad->id;
                $archivo->save();
            }
        }

        
        
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