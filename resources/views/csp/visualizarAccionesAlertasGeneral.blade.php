@extends('layouts.cspReportes')

@section('title','Inicio')

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
                            <h4 class="panel-title">Acciones Alerta del Reporte {{$cspReportesAlerta->tema}}<br> </h4>
                        </div>
                        
                        <div class="panel-body">  
                        <div id="content" class="content">
            <!-- begin breadcrumb -->
            
            
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            
            <!-- end page-header -->
            
            <!-- begin invoice -->

            <div class="row">
				<!-- begin col-8 -->
				<div class="col-md-12">
					<div class="tab-content" data-sortable-id="index-3">
						

							
						
						
						
						<!--REPORTES DE ALERTAS-->
						<div class="tab-pane fade active in" id="hechos">
							<div class="height-lg" data-scrollbar="true">
								<div class="col-md-12">
								<a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
								</div>

						<hr>
															
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-12">
											
										

                                        {{$accionesReporteAlerta->render()}}
										
								
								<table class="table">
										
									<thead>
										<tr>
											
											<th>Fecha Accion</th>
											<th>Fecha Registro</th>
											<th>Acciones</th>
											<th>Anexo</th>
                                            
											
										</tr>
									</thead>
									
									
									<tbody>
										  
										      	
											@foreach($accionesReporteAlerta as $accionesReporteAlerta)
						                        <tr>
						                         
						                            <td class="text-justify">{{ $accionesReporteAlerta->fecha }}</td>
						                            <td class="text-justify">{{ $accionesReporteAlerta->created_at }}</td>
						                            <td class="text-justify">{{ $accionesReporteAlerta->acciones }}</td>
													<td class="text-justify">
                                                    @if(($accionesReporteAlerta->anexo)!="000Ninguno")
														<a target="_blank" href="{{ route('descargarAccionAlertaCsp',$accionesReporteAlerta-> anexo) }} ">
															<?php
																$pos = strpos($accionesReporteAlerta-> anexo, "_-_");
																$anexo = substr($accionesReporteAlerta-> anexo, $pos+3, strlen($accionesReporteAlerta-> anexo)); // devuelve "d"
															?>

															<i class="fa fa-2x fa-download"></i>

														</a>
                                                        @endif

						                            </td>
                                                    
						                            				                            
						                        </tr>

						                    		@endforeach		
											
									</tbody>

								</table>
								
                                
								</div>
								</div>
								
							</div>
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
		