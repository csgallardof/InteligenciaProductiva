<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection as Collection;
use App\CspReportesHecho;
use DB;
//use App\Pais;


class PdfCspReportesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaReportesCsp(){
    	$reportesHechos = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);
        return view("csp.reportesPdfCsp.listaReportesCsp")->with(["reportesHechos"=>$reportesHechos]);
    }
    public function obtenerReportesHechos(Request $request){
    	$cheches = $request['check'];
    	$reportesHecho = array();
    	for ($i=0; $i <count($cheches) ; $i++) { 
    	
    	$reportesHecho[$i] = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->where('csp_reportes_hechos.id', '=',$cheches[$i])
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->get();
    	}
    	
    	dd($reportesHecho);
    	
    }
    public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->with(["data"=>$data]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_porpais(Request $request,$tipo){

     $vistaurl="csp.reportesPdfCsp.pdf";
     //$CspReportesHecho=CspReportesHecho::all();
     //$reportesHecho[] = array();
     $cheches = $request['check'];
      //*dd($cheches);
    	for ($i=0; $i <count($cheches) ; $i++) { }

    	/*$reportesHecho= DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->where('csp_reportes_hechos.id', '=','2')
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->get();*/
        $reporteHecho=DB::select("SELECT * FROM `csp_reportes_hechos` WHERE id in ($cheches[0],$cheches[1])");
        	
        //$resultado=array_merge($reportesHecho[$i]);
       
        $reportesHecho=Collection::make($reporteHecho);
        //dd($reportesHecho);
       // dd($reportesHecho);
        return $this->crearPDF($reportesHecho, $vistaurl,$tipo);
     		
         
        

    }






    

}
