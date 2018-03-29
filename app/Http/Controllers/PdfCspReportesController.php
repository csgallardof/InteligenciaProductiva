<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection as Collection;
use App\CspReportesHecho;
use App\CspPeriodoReporte;
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
        $CspPeriodoReporte = CspPeriodoReporte::all();
    	$reportesHechos = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);
        return view("csp.reportesPdfCsp.listaReportesCsp")->with(["reportesHechos"=>$reportesHechos,"CspPeriodoReporte"=>$CspPeriodoReporte]);
    }
    public function buscarReportesHechos(Request $request){
         $buscar = $request-> parametro;
         //dd($buscar);
         $CspPeriodoReporte = CspPeriodoReporte::all();
         if($buscar!=null){
         $reportesHechos = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->where('csp_reportes_hechos.periodo_id', '=',$buscar)
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);
         return view("csp.reportesPdfCsp.listaReportesCsp")->with(["reportesHechos"=>$reportesHechos,"CspPeriodoReporte"=>$CspPeriodoReporte]);
         } else
         return redirect('/institucion/lista-reportes-csp'); 
    }
    public function crearPDF($dato1,$dato2,$dato3,$dato4,$vistaurl,$tipo)
    {
        $hora = date("h:i");
        $semana_reporte=date("Y/m/d");
        $fecha_creacion_Reporte=$semana_reporte." ".$hora;
        function check_in_range($start_date, $end_date, $evaluame) {
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($evaluame);
        return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
        }
        $periodoCorrecto=False;
        $i=1;
        
        while ($periodoCorrecto==False) {
        $PeriodoCspReporte = CspPeriodoReporte::find($i);
        $date_start = $PeriodoCspReporte->fecha_inicio;
        $date_end = $PeriodoCspReporte->fecha_final;
        $today = $fecha_creacion_Reporte;
        if( check_in_range($date_start, $date_end, $today) ){
            $periodo_id=$PeriodoCspReporte->id;
            $periodo_reporte= $periodo_id-1;
            $periodoCorrecto=True;
            } else {
            $periodoCorrecto==False;
            }
            $i++;  
        
        }
        $PeriodoSemanaCspReporte = CspPeriodoReporte::find($periodo_reporte);
        $data1 = $dato1;
        $data2 = $dato2;
        $data3 = $dato3;
        $data4 = $dato4;
        //$elementos= sizeof($data1);
        //dd($elementos);
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->with(["data1"=>$data1,
                                                               "data2"=>$data2,
                                                               "data3"=>$data3,
                                                               "data4"=>$data4,                 
                                                               "PeriodoSemanaCspReporte"=>$PeriodoSemanaCspReporte]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporteHechosRelevaltes.pdf');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crearReporteHechosRelevantes(Request $request,$tipo){

     
        //dd($periodo_reporte);
     $vistaurl="csp.reportesPdfCsp.pdf";
     
     $cheches = $request['check'];
     $check="";
     
    	for ($i=0; $i <count($cheches) ; $i++) { 
            $check .= $cheches[$i].",";
        }
        $consulta=substr($check,0,-1); 
        $reporteHechoMipro=DB::select("SELECT csp_reportes_hechos.id,csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.descripcion, csp_reportes_hechos.lugar,csp_reportes_hechos.porcentaje_avance, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=3");
        
        $reporteHechoMipro=Collection::make($reporteHechoMipro);

        $reporteHechoMAP=DB::select("SELECT csp_reportes_hechos.id,csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.descripcion, csp_reportes_hechos.lugar,csp_reportes_hechos.porcentaje_avance, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=2");
        
        $reporteHechoMAP=Collection::make($reporteHechoMAP);
        
        $reporteHechoMAG=DB::select("SELECT csp_reportes_hechos.id,csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.descripcion, csp_reportes_hechos.lugar,csp_reportes_hechos.porcentaje_avance, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=1");
        
        $reporteHechoMAG=Collection::make($reporteHechoMAG);
        $reporteHechoSTR=DB::select("SELECT csp_reportes_hechos.id,csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.descripcion, csp_reportes_hechos.lugar,csp_reportes_hechos.porcentaje_avance, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=4");
        
        $reporteHechoSTR=Collection::make($reporteHechoSTR);
        //dd($reporteHechoSTR);

        return $this->crearPDF($reporteHechoMipro,$reporteHechoMAP,$reporteHechoMAG,$reporteHechoSTR, $vistaurl,$tipo);
    }

    public function listaLineasDiscursivasCsp(){
        $CspPeriodoReporte = CspPeriodoReporte::all();
        $reportesHechos = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','csp_reportes_hechos.lineas_discursivas','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);
        return view("csp.reportesPdfCsp.listaReportesLineasDiscursivasCsp")->with(["reportesHechos"=>$reportesHechos,"CspPeriodoReporte"=>$CspPeriodoReporte]);
    }
    public function buscarReportesHechosLineasDiscursivas(Request $request){
         $buscar = $request-> parametro;
         //dd($buscar);
         $CspPeriodoReporte = CspPeriodoReporte::all();
         if($buscar!=null){
         $reportesHechos = DB::table('csp_reportes_hechos')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_hechos.periodo_id')
        ->join('institucions','institucions.id', '=','csp_reportes_hechos.institucion_id')
        ->where('csp_reportes_hechos.periodo_id', '=',$buscar)
        ->select('csp_reportes_hechos.id','csp_reportes_hechos.fecha_reporte','csp_reportes_hechos.tema','csp_reportes_hechos.descripcion','csp_reportes_hechos.lugar','csp_reportes_hechos.fuente','institucions.siglas_institucion as Institucion','csp_reportes_hechos.anexo','csp_reportes_hechos.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_hechos.id','DESC')
        ->paginate(20);
         return view("csp.reportesPdfCsp.listaReportesLineasDiscursivasCsp")->with(["reportesHechos"=>$reportesHechos,"CspPeriodoReporte"=>$CspPeriodoReporte]);
         } else
         return redirect('/institucion/reportes-lineas-discursivas-csp');  
    }

    public function crearReporteHechosLineasDiscursivas(Request $request,$tipo){

     
        //dd($periodo_reporte);
     $vistaurl="csp.reportesPdfCsp.pdfLineasDiscursivas";
     
     $cheches = $request['check'];
     $check="";
     
        for ($i=0; $i <count($cheches) ; $i++) { 
            $check .= $cheches[$i].",";
        }
        $consulta=substr($check,0,-1); 
        $reporteHechoMipro=DB::select("SELECT csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.lineas_discursivas, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=3");
        
        $reporteHechoMipro=Collection::make($reporteHechoMipro);

        $reporteHechoMAP=DB::select("SELECT csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.lineas_discursivas, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=2");
        
        $reporteHechoMAP=Collection::make($reporteHechoMAP);
        
        $reporteHechoMAG=DB::select("SELECT csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.lineas_discursivas, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=1");
        
        $reporteHechoMAG=Collection::make($reporteHechoMAG);
        $reporteHechoSTR=DB::select("SELECT csp_reportes_hechos.fecha_reporte, csp_reportes_hechos.tema, csp_reportes_hechos.fuente, csp_reportes_hechos.lineas_discursivas, institucions.siglas_institucion as Institucion FROM csp_reportes_hechos
            JOIN institucions ON institucions.id= csp_reportes_hechos.institucion_id 
            WHERE csp_reportes_hechos.id in ($consulta) and csp_reportes_hechos.institucion_id=4");
        
        $reporteHechoSTR=Collection::make($reporteHechoSTR);
        //dd($reporteHechoSTR);

        return $this->crearLineaDiscursivasPDF($reporteHechoMipro,$reporteHechoMAP,$reporteHechoMAG,$reporteHechoSTR, $vistaurl,$tipo);
    }
    public function crearLineaDiscursivasPDF($dato1,$dato2,$dato3,$dato4,$vistaurl,$tipo)
    {
        $hora = date("h:i");
        $semana_reporte=date("Y/m/d");
        $fecha_creacion_Reporte=$semana_reporte." ".$hora;
        function check_in_range($start_date, $end_date, $evaluame) {
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($evaluame);
        return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
        }
        $periodoCorrecto=False;
        $i=1;
        
        while ($periodoCorrecto==False) {
        $PeriodoCspReporte = CspPeriodoReporte::find($i);
        $date_start = $PeriodoCspReporte->fecha_inicio;
        $date_end = $PeriodoCspReporte->fecha_final;
        $today = $fecha_creacion_Reporte;
        if( check_in_range($date_start, $date_end, $today) ){
            $periodo_id=$PeriodoCspReporte->id;
            $periodo_reporte= $periodo_id-1;
            $periodoCorrecto=True;
            } else {
            $periodoCorrecto==False;
            }
            $i++;  
        
        }
        $PeriodoSemanaCspReporte = CspPeriodoReporte::find($periodo_reporte);
        $data1 = $dato1;
        $data2 = $dato2;
        $data3 = $dato3;
        $data4 = $dato4;
        //$elementos= sizeof($data1);
        //dd($data1);
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->with(["data1"=>$data1,
                                                               "data2"=>$data2,
                                                               "data3"=>$data3,
                                                               "data4"=>$data4,                 
                                                               "PeriodoSemanaCspReporte"=>$PeriodoSemanaCspReporte]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporteHechosLineasDiscursivas.pdf');}
        if($tipo==2){return $pdf->download('reporteHechosLineasDiscursivas.pdf'); }
    }
   




    public function listaReportesAlertasCsp(){
        $CspPeriodoReporte = CspPeriodoReporte::all();
        $reportesAlerta = DB::table('csp_reportes_alertas')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_alertas.periodo_id')
        ->join('csp_reporte_estados','csp_reporte_estados.id', '=','csp_reportes_alertas.estado_reporte_id')
        ->join('institucions','institucions.id', '=','csp_reportes_alertas.institucion_id')
        ->select('csp_reportes_alertas.id','csp_reportes_alertas.fecha_atencion','csp_reportes_alertas.tema','csp_reportes_alertas.descripcion','csp_reportes_alertas.fuente','csp_reportes_alertas.riesgo_principal','csp_reporte_estados.nombre as EstadoReporte','csp_reportes_alertas.anexo','institucions.siglas_institucion as Institucion','csp_reportes_alertas.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_alertas.id','DESC')
        ->paginate(20);
        return view("csp.reportesPdfCsp.listaReportesAlertasCsp")->with(["reportesAlerta"=>$reportesAlerta,"CspPeriodoReporte"=>$CspPeriodoReporte]);
    }

    public function buscarReportesAlertas(Request $request){
        $CspPeriodoReporte = CspPeriodoReporte::all();
        $buscar = $request-> parametro;
        if($buscar!=null){
        $reportesAlerta = DB::table('csp_reportes_alertas')
        ->join('csp_periodo_reportes','csp_periodo_reportes.id', '=','csp_reportes_alertas.periodo_id')
        ->join('csp_reporte_estados','csp_reporte_estados.id', '=','csp_reportes_alertas.estado_reporte_id')
        ->join('institucions','institucions.id', '=','csp_reportes_alertas.institucion_id')
        ->where('csp_reportes_alertas.periodo_id', '=',$buscar)
        ->select('csp_reportes_alertas.id','csp_reportes_alertas.fecha_atencion','csp_reportes_alertas.tema','csp_reportes_alertas.descripcion','csp_reportes_alertas.fuente','csp_reportes_alertas.riesgo_principal','csp_reporte_estados.nombre as EstadoReporte','csp_reportes_alertas.anexo','institucions.siglas_institucion as Institucion','csp_reportes_alertas.created_at as FechaRegistro','csp_periodo_reportes.nombre as Periodo')
        ->orderBy('csp_reportes_alertas.id','DESC')
        ->paginate(20);
        return view("csp.reportesPdfCsp.listaReportesAlertasCsp")->with(["reportesAlerta"=>$reportesAlerta,"CspPeriodoReporte"=>$CspPeriodoReporte]);

    }else 
    return redirect('/institucion/reportes-alertas-csp'); 

        

    }
     public function crearReporteAlerta(Request $request,$tipo){
        //dd($periodo_reporte);
     $vistaurl="csp.reportesPdfCsp.pdfReporteAlertas";
     
     $cheches = $request['check'];
     $check="";
     
        for ($i=0; $i <count($cheches) ; $i++) { 
            $check .= $cheches[$i].",";
            //$acciones = DB::select

        }
        $consulta=substr($check,0,-1);
            
        $reporteAlertaMipro= DB::select("SELECT csp_reportes_alertas.id,csp_reportes_alertas.solucion_propuesta,csp_reportes_alertas.fecha_atencion, csp_reportes_alertas.tema, csp_reportes_alertas.fuente,csp_reportes_alertas.descripcion, csp_reportes_alertas.riesgo_principal, institucions.siglas_institucion as Institucion,group_concat(csp_acciones_alertas.acciones SEPARATOR '<br>') as acciones FROM csp_reportes_alertas JOIN institucions ON institucions.id= csp_reportes_alertas.institucion_id LEFT JOIN csp_acciones_alertas on csp_acciones_alertas.reporte_alerta_id = csp_reportes_alertas.id WHERE csp_reportes_alertas.id in ($consulta) and csp_reportes_alertas.institucion_id=3 group by csp_reportes_alertas.id");
        $reporteAlertaMipro=Collection::make($reporteAlertaMipro);

        $reporteAlertaMAP= DB::select("SELECT csp_reportes_alertas.id,csp_reportes_alertas.solucion_propuesta,csp_reportes_alertas.fecha_atencion, csp_reportes_alertas.tema, csp_reportes_alertas.fuente,csp_reportes_alertas.descripcion, csp_reportes_alertas.riesgo_principal, institucions.siglas_institucion as Institucion,group_concat(csp_acciones_alertas.acciones SEPARATOR '<br>') as acciones FROM csp_reportes_alertas JOIN institucions ON institucions.id= csp_reportes_alertas.institucion_id LEFT JOIN csp_acciones_alertas on csp_acciones_alertas.reporte_alerta_id = csp_reportes_alertas.id WHERE csp_reportes_alertas.id in ($consulta) and csp_reportes_alertas.institucion_id=2 group by csp_reportes_alertas.id");
        $reporteAlertaMAP=Collection::make($reporteAlertaMAP);

        $reporteAlertaMAG= DB::select("SELECT csp_reportes_alertas.id,csp_reportes_alertas.solucion_propuesta,csp_reportes_alertas.fecha_atencion, csp_reportes_alertas.tema, csp_reportes_alertas.fuente,csp_reportes_alertas.descripcion, csp_reportes_alertas.riesgo_principal, institucions.siglas_institucion as Institucion,group_concat(csp_acciones_alertas.acciones SEPARATOR '<br>') as acciones FROM csp_reportes_alertas JOIN institucions ON institucions.id= csp_reportes_alertas.institucion_id LEFT JOIN csp_acciones_alertas on csp_acciones_alertas.reporte_alerta_id = csp_reportes_alertas.id WHERE csp_reportes_alertas.id in ($consulta) and csp_reportes_alertas.institucion_id=1 group by csp_reportes_alertas.id");
        $reporteAlertaMAG=Collection::make($reporteAlertaMAG);

        $reporteAlertaSTR= DB::select("SELECT csp_reportes_alertas.id,csp_reportes_alertas.solucion_propuesta,csp_reportes_alertas.fecha_atencion, csp_reportes_alertas.tema, csp_reportes_alertas.fuente,csp_reportes_alertas.descripcion, csp_reportes_alertas.riesgo_principal, institucions.siglas_institucion as Institucion,group_concat(csp_acciones_alertas.acciones SEPARATOR '<br>') as acciones FROM csp_reportes_alertas JOIN institucions ON institucions.id= csp_reportes_alertas.institucion_id LEFT JOIN csp_acciones_alertas on csp_acciones_alertas.reporte_alerta_id = csp_reportes_alertas.id WHERE csp_reportes_alertas.id in ($consulta) and csp_reportes_alertas.institucion_id=4 group by csp_reportes_alertas.id");
        $reporteAlertaSTR=Collection::make($reporteAlertaSTR);
        //dd($reporteAlertaMipro);
        return $this->crearAlertasPDF($reporteAlertaMipro,$reporteAlertaMAP,$reporteAlertaMAG,$reporteAlertaSTR,$vistaurl,$tipo);
    }
    public function crearAlertasPDF($dato1,$dato2,$dato3,$dato4,$vistaurl,$tipo)
    {
        $hora = date("h:i");
        $semana_reporte=date("Y/m/d");
        $fecha_creacion_Reporte=$semana_reporte." ".$hora;
        function check_in_range($start_date, $end_date, $evaluame) {
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($evaluame);
        return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
        }
        $periodoCorrecto=False;
        $i=1;
        
        while ($periodoCorrecto==False) {
        $PeriodoCspReporte = CspPeriodoReporte::find($i);
        $date_start = $PeriodoCspReporte->fecha_inicio;
        $date_end = $PeriodoCspReporte->fecha_final;
        $today = $fecha_creacion_Reporte;
        if( check_in_range($date_start, $date_end, $today) ){
            $periodo_id=$PeriodoCspReporte->id;
            $periodo_reporte= $periodo_id-1;
            $periodoCorrecto=True;
            } else {
            $periodoCorrecto==False;
            }
            $i++;  
        
        }
        $PeriodoSemanaCspReporte = CspPeriodoReporte::find($periodo_reporte);
        $data1 = $dato1;
        $data2 = $dato2;
        $data3 = $dato3;
        $data4 = $dato4;
        
        //dd($data1);
        
        //$elementos= sizeof($data1);
        //dd($data1);
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->with(["data1"=>$data1,
                                                                "data2"=>$data2,
                                                                "data3"=>$data3,
                                                                "data4"=>$data4,                
                                                               "PeriodoSemanaCspReporte"=>$PeriodoSemanaCspReporte]);
        
        $pdf = \App::make('dompdf.wrapper');

        $pdf->loadHTML($view);
        //dd($data1);
        
        if($tipo==1){return $pdf->stream('reporteAlertas.pdf');}
        if($tipo==2){return $pdf->download('reporteAlertas.pdf'); }
    }
      

}
