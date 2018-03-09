@extends('layouts.cspReportes')

@section('content')

<div id="content" class="content" width="10%">
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-md-12 col-sm-12">
                    <div class="widget widget-stats bg-green-darker">
                        <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                        <div class="stats-info">
                            <h4 class="modal-title">Reportes Consejo Sectorial de la Producción</h4>
                            <p>
                                
                            </p>    
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end page-header -->
            
            <!-- begin row -->
            
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-md-8">
                    
                    
                    
                    
                    <div class="panel panel-inverse" >
                        <div class="panel-heading pull-righ">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Reporte Alerta<br> </h4>
                        </div>
                        <div class="panel-body">  
                        <div id="content" class="content">
            <!-- begin breadcrumb -->
            
            
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            
            <!-- end page-header -->
            
            <!-- begin invoice -->
            <div class="invoice">
                <div class="row">
                    <div class="col-md-1"> </div>
                    <div class="col-md-10">
                <a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
                <div class="invoice-company"><strong>Tema: </strong>
                    {{$cspReportesAlerta->tema}}
                   
                </div>
                <div class="invoice-header">
                    <div class="invoice-from">
                        
                        <address class="m-t-5 m-b-5">
                            <strong>Fecha Reporte</strong><br />
                            {{$cspReportesAlerta->fecha_atencion}}<br />
                             <strong>Fuente</strong><br />
                            {{$cspReportesAlerta->fuente}}<br />
                        </address>
                    </div>
                    
                    
                </div>
                <div class="invoice-content">
                   
                    <div class="media-body">

                        <h6 class="media-heading"><strong>Descripcion</strong></h6>
                       <p> {{$cspReportesAlerta->descripcion}}</p>
                        
                    </div>
                    <hr></hr>
                    <div class="media-body">
                        <h6 class="media-heading"><strong>Riesgo Principal</strong></h6>
                        <p align="justify">{{$cspReportesAlerta->riesgo_principal}}</p>
                        
                       
                    </div>
                     <hr></hr>
                    <div class="media-body">
                        <h6 class="media-heading"><strong>Anexo</strong></h6>
                        <a target="_blank" href="{{ route('descargarArchivoAlertaCsp',$cspReportesAlerta-> anexo) }} ">
                                                            <?php
                                                                $pos = strpos($cspReportesAlerta-> anexo, "_-_");
                                                                $anexo = substr($cspReportesAlerta-> anexo, $pos+3, strlen($cspReportesAlerta-> anexo)); // devuelve "d"
                                                            ?>
                                                            
                                                            <i class="fa fa-2x fa-download"></i>
                                                        </a>
                        
                       
                    </div>

                    
                </div>
                <div class="invoice-note">
                    * Notas
                </div>
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                       
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i> </span>
                        <span class="m-r-10"><i class="fa fa-phone"></i></span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i></span>
                    </p>
                </div>
                
                </div>

                </div>

            </div>
            <!-- end invoice -->
        </div> 
                        </div>
                    </div>                 
                    
                </div>
                <!-- end col-8 -->
                <!-- begin col-4 -->
                <div class="col-md-4" >
                    <div class="panel panel-inverse" data-sortable-id="index-6">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Notificaciones<br> (&uacute;ltima semana)</h4>
                        </div>
                        <h6 align="center" style="color:green"> No existe notificaciones</h6>
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <!-- <div class="panel panel-inverse" data-sortable-id="index-7">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">&Uacute;ltimas actividades</h4>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                    </div> -->
                    
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

@stop
		