<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\CspReportesHecho;
use App\CspReporteEstado;
use App\CspReportesAlerta;
use App\CspAccionesAlerta;
use App\Institucion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Storage;
use File;
use DB;

class CspReportesController extends Controller
{
    public function vistaCrearReporteHecho(){
        $usuario_institucion_id = Auth::user()->institucion_id;

        //dd($institucion);

        return view('csp.createReporteHechoCsp',['usuario_institucion_id'=>$usuario_institucion_id]);   
    }
    public function vistaCrearReporteAlerta(){
        $estadoReporte = CspReporteEstado::all();
        $usuario_institucion_id = Auth::user()->institucion_id; 
        return view('csp.createReporteAlertaCsp',['estadoReporte'=>$estadoReporte],['usuario_institucion_id'=>$usuario_institucion_id]);   
    }
    public function guardarReporteHecho(Request $request){

        $hora = date("h:i");
        $fecha_reporte = $request['fecha_reporte'];

        $fecha_hora_Reporte=$fecha_reporte." ".$hora;
        $institucion_id = $request['institucion_id'];
        $tema = $request['tema'];
        $descripcion = $request['descripcion'];
        $fuente = $request['fuente'];
        $lugar = $request['lugar'];
        $porcentaje_avance = $request['porcentaje_avance'];
        $lineas_discursivas = $request['lineas_discursivas'];
        if($request->hasFile('anexo')){
        $anexo = $request->file('anexo');	
    	$nombreArchivo = strtotime("now").'-'.$anexo->getClientOriginalName();
        Storage::disk('CspReportesHechos')->put($nombreArchivo,file_get_contents($anexo->getRealPath()));
        }else
        $nombreArchivo="000Ninguno";
        $CspReportesHecho = new CspReportesHecho();
        $CspReportesHecho-> fecha_reporte = $fecha_hora_Reporte;
        $CspReportesHecho-> institucion_id = $institucion_id;
        $CspReportesHecho-> tema = $tema;
        $CspReportesHecho-> descripcion = $descripcion;
        $CspReportesHecho-> fuente = $fuente;
        $CspReportesHecho-> lugar = $lugar;
        $CspReportesHecho-> porcentaje_avance = $porcentaje_avance;
        $CspReportesHecho-> lineas_discursivas = $lineas_discursivas;
        $CspReportesHecho-> anexo = $nombreArchivo;
        $CspReportesHecho-> save();
        return redirect('/institucion/consejo-sectorial-produccion');
    }
    public function crearAccionesAlerta(Request $request){

        $hora = date("h:i");

        $reporte_alerta_id = $request['reporte_alerta_id'];
        $acciones = $request['acciones'];
        $fecha = $request['fecha'];
        $fecha_hora_Accion=$fecha." ".$hora;
        
        if($request->hasFile('anexo')){
        $anexo = $request->file('anexo');   
        $nombreArchivo = strtotime("now").'-'.$anexo->getClientOriginalName();
        Storage::disk('CspReportesAlerta')->put($nombreArchivo,file_get_contents($anexo->getRealPath()));
        }else 
        $nombreArchivo="000Ninguno";

        $CspAccionesAlerta = new CspAccionesAlerta();
        $CspAccionesAlerta-> reporte_alerta_id = $reporte_alerta_id;
        $CspAccionesAlerta-> acciones = $acciones;
        $CspAccionesAlerta-> fecha = $fecha_hora_Accion;
        $CspAccionesAlerta-> anexo = $nombreArchivo;
         //dd($CspAccionesAlerta);
        $CspAccionesAlerta-> save();
        return redirect('/institucion/consejo-sectorial-produccion');

    }

    public function guardarReporteAlerta(Request $request){

        $hora = date("h:i");
        
        //dd(fecha_atencion_hora);
        $estado_reporte_id = $request['estado_reporte_id'];
        $institucion_id = $request['institucion_id'];
        $fecha_atencion = $request['fecha_atencion'];
        $fecha_hora_atencion=$fecha_atencion." ".$hora;
        $tema = $request['tema'];
        $descripcion = $request['descripcion'];
        $riesgo_principal = $request['riesgo_principal'];

        $fuente = $request['fuente'];
        if($request->hasFile('anexo')){
        $anexo = $request->file('anexo');   
        $nombreArchivo = strtotime("now").'-'.$anexo->getClientOriginalName();
        Storage::disk('CspReportesAlerta')->put($nombreArchivo,file_get_contents($anexo->getRealPath()));
        }else
        $nombreArchivo="000Ninguno";
        $CspReportesAlerta = new CspReportesAlerta();
        $CspReportesAlerta-> estado_reporte_id = $estado_reporte_id;
        $CspReportesAlerta-> institucion_id = $institucion_id;
        $CspReportesAlerta-> fecha_atencion = $fecha_hora_atencion;
        $CspReportesAlerta-> tema = $tema;
        $CspReportesAlerta-> descripcion = $descripcion;
        $CspReportesAlerta-> riesgo_principal = $riesgo_principal;
        $CspReportesAlerta-> fuente = $fuente;
        $CspReportesAlerta-> anexo = $nombreArchivo;
        $CspReportesAlerta-> save();
        return redirect('/institucion/consejo-sectorial-produccion');
    }
    public function mostrarReportes(){

        $usuario_institucion_id = Auth::user()->institucion_id;
        $tipofuente=Auth::user()->tipo_fuente;
        //dd($tipofuente);
        if($tipofuente==4){
    	$reportesHechos =DB::table('csp_reportes_hechos')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->where('institucions.id', '=',$usuario_institucion_id)
    	->select('csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.id','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);

        

        $reportesAlerta = DB::table('csp_reportes_alertas')
        ->join('csp_reporte_estados','csp_reporte_estados.id', '=','csp_reportes_alertas.estado_reporte_id')
        ->join('institucions','institucions.id', '=','csp_reportes_alertas.institucion_id')
        ->where('institucions.id', '=',$usuario_institucion_id)
        ->select('csp_reportes_alertas.id','csp_reportes_alertas.fecha_atencion','csp_reportes_alertas.tema','csp_reportes_alertas.descripcion','csp_reportes_alertas.fuente','csp_reportes_alertas.riesgo_principal','csp_reporte_estados.nombre as EstadoReporte','csp_reportes_alertas.anexo','institucions.siglas_institucion as Institucion','csp_reportes_alertas.created_at as FechaRegistro')
        ->orderBy('csp_reportes_alertas.id','DESC')
        ->paginate(20);
    
        //dd($reportesHechos);
        return view('csp.home',['reportesHechos'=>$reportesHechos],['reportesAlerta'=>$reportesAlerta]);
        } else
        $reportesHechos =DB::table('csp_reportes_hechos')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);

        

        $reportesAlerta = DB::table('csp_reportes_alertas')
        ->join('csp_reporte_estados','csp_reporte_estados.id', '=','csp_reportes_alertas.estado_reporte_id')
        ->join('institucions','institucions.id', '=','csp_reportes_alertas.institucion_id')
        ->select('csp_reportes_alertas.id','csp_reportes_alertas.fecha_atencion','csp_reportes_alertas.tema','csp_reportes_alertas.descripcion','csp_reportes_alertas.fuente','csp_reportes_alertas.riesgo_principal','csp_reporte_estados.nombre as EstadoReporte','csp_reportes_alertas.anexo','institucions.siglas_institucion as Institucion','csp_reportes_alertas.created_at as FechaRegistro')
        ->orderBy('csp_reportes_alertas.id','DESC')
        ->paginate(20);
        return view('csp.homeVisualizarReportesCSP',['reportesHechos'=>$reportesHechos],['reportesAlerta'=>$reportesAlerta]);
    }

    public function AccionesAlertas($id){
        $cspReportesAlerta = CspReportesAlerta::find($id);
       // dd(cspReportesAlerta);
        return view('csp.createAccionesReporteAlertasCsp',compact('cspReportesAlerta'));    
    }
    public function visualizarAccionesAlertas($id){
        $cspReportesAlerta = CspReportesAlerta::find($id);
        $accionesReporteAlerta =DB::table('csp_acciones_alertas')
        ->join('csp_reportes_alertas','csp_reportes_alertas.id','=','csp_acciones_alertas.reporte_alerta_id')
        ->where('csp_acciones_alertas.reporte_alerta_id', '=',$id)
        ->select('csp_acciones_alertas.anexo','csp_acciones_alertas.fecha','csp_acciones_alertas.acciones','csp_acciones_alertas.id','csp_acciones_alertas.created_at')
        ->paginate(10);
        //dd($accionesReporteAlerta);
        return view('csp.visualizarAccionesAlertas',compact('cspReportesAlerta'),compact('accionesReporteAlerta'));    
    }
    public function visualizarReporteHecho($id){
        $cspReportesHecho = CspReportesHecho::find($id);
        //dd($ReporteHechoVisualizar);
        return view('csp.visualizarReporteHechoCsp',compact('cspReportesHecho'),compact('ReporteHechoVisualizar'));    
    }


}
