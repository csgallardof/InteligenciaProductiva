@extends('layouts.cspReportes')

@section('title','Inicio')

@section('content')
		

		<!-- begin #content -->
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
					
					
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
						
						<li class="active">
							<a href="#hechos" data-toggle="tab">
								<i class="fa fa-sticky-note-o m-r-5"></i>
								<span class="hidden-xs">Hechos</span>
								
							</a>
						</li>
						<li class="">
							<a href="#alerta" data-toggle="tab">
								<i class="fa fa-sticky-note m-r-5"></i>
								<span class="hidden-xs">Alertas</span>
								
							</a>
						</li>
					</ul>
					
					<div class="tab-content" data-sortable-id="index-3">
						
						
						<!--REPORTES DE ALERTAS-->
						<div class="tab-pane fade active in" id="hechos">
							<div class="height-lg" data-scrollbar="true">
								<a href="/institucion/consejo-sectorial-produccion-createReportesHecho" class="btn btn-primary pull-right">Nuevo Reporte Hechos</a>
						<hr>
						

								<div class="row">
									<div class="col-md-12">
									
									
								<table class="table" class="table nowrap" width="100%">

									<thead>
										{{$reportesHechos->render()}}
										<tr>
											<th>Fecha de Atencion</th>
											<th>Fecha Registro</th>
											<th>Tema</th>
											
											<th>Fuente</th>
											
											<th>Institucion</th>
											<th>Anexo</th>
											<th>Reporte Hecho</th>
										</tr>
									</thead>
									<tbody>
										
													@foreach($reportesHechos as $reportesHechos)
						                        <tr>

						                          <td class="text-justify">{{$reportesHechos->fecha_reporte}}</td>
						                          <td class="text-justify">{{$reportesHechos->FechaRegistro}}</td>
						                          <td class="text-justify">{{$reportesHechos->tema}}</td>
						                          
						                          <td class="text-justify">{{$reportesHechos->fuente}}</td>
						                          
						                          <td class="text-justify">{{ $reportesHechos->Institucion}}</td>
						                          <td class="text-justify">
						                     		 @if(($reportesHechos->anexo)!="000Ninguno")
														<a target="_blank" href="{{ route('descargarArchivoHechosCsp',$reportesHechos-> anexo) }} ">
															<?php
																$pos = strpos($reportesHechos-> anexo, "_-_");
																$anexo = substr($reportesHechos-> anexo, $pos+3, strlen($reportesHechos-> anexo)); // devuelve "d"
															?>

															<i class="fa fa-2x fa-download"></i>
														</a>
						                     		 @endif
						                          

						                      		</td>
						                      		<td>
						                      			<a href= "/institucion/visualizar-reporte-hechos/{{$reportesHechos->id}}"  title="Ver más"  >
														<i class="fa fa-2x fa-eye"></i>
													</a>
													<a href= "/institucion/editar-reporte-hechos/{{$reportesHechos->id}}"  title="Ver más"  >
														<i class="fa fa-2x fa-edit"></i>
													</a>
						                      		</td>
						                            				                            
						                        </tr>

						                    		@endforeach
												
									</tbody>
										
								</table>
									
								</div>
								</div>
								
							</div>
						</div>
						<!--FIN SOLUCIONES RESPONSABLE-->

						<!--SOLUCIONES Alertas-->
						<div class="tab-pane fade" id="alerta">
							<div class="height-lg" data-scrollbar="true">
								<a href="/institucion/consejo-sectorial-produccion-createReportesAlerta" class="btn btn-primary pull-right">Nuevo Reporte Alerta</a>
						<hr>
							<div class="row">
									<div class="col-md-12">
									
										
								<table class="table" class="table nowrap" width="100%">
									<thead>
										{{$reportesAlerta->render()}}
										<tr>
											<th>Fecha de Atencion</th>
											<th>Fecha Registro</th>
											<th>Tema</th>
											<th>Fuente</th>
											
											<th>Estado</th>
											<th>Institucion</th>
											<th>Anexo</th>
											<th>Acciones</th>
											<th>Reporte Alerta</th>
											
										</tr>
									</thead>
									<tbody>
										
													@foreach($reportesAlerta as $reportesAlerta)
						                        <tr>
						                            <td class="text-justify">{{ $reportesAlerta->fecha_atencion }}</td>
						                            <td class="text-justify">{{ $reportesAlerta->FechaRegistro }}</td>
						                            <td class="text-justify">{{ $reportesAlerta->tema }}</td>
						                            <td class="text-justify">{{ $reportesAlerta->fuente }}</td>
						                            
						                             <td class="text-justify">{{ $reportesAlerta->EstadoReporte }}</td>
						                             <td class="text-justify">{{ $reportesAlerta->Institucion }}</td>
						                            <td class="text-justify">
						                            	@if(($reportesAlerta->anexo)!="000Ninguno")
														<a target="_blank" href="{{ route('descargarArchivoAlertaCsp',$reportesAlerta-> anexo) }} ">
															<?php
																$pos = strpos($reportesAlerta-> anexo, "_-_");
																$anexo = substr($reportesAlerta-> anexo, $pos+3, strlen($reportesAlerta-> anexo)); // devuelve "d"
															?>

															<i class="fa fa-2x fa-download"></i>
														</a>
														@endif

						                            </td>
						                            <td>

													<a href= "/institucion/acciones-alertas/{{$reportesAlerta->id}}"  >
														<i class="fa fa-2x fa-plus-circle"></i>
													</a>
													 &nbsp; &nbsp; 
													
													
													<a href= "/institucion/visualizar-acciones-alertas/{{$reportesAlerta->id}}"  >
														<i class="fa fa-2x fa-eye"></i>
													</a>
													
						                            </td>

						                            <td>
						                       
						                      			<a href= "/institucion/visualizar-reporte-Alertas/{{$reportesAlerta->id}}"  title="Ver más"  >
														<i class="fa fa-2x fa-eye"></i>
													</a>
						                      		
														<a href= "/institucion/editar-reporte-alerta/{{$reportesAlerta->id}}"  title="Ver más"  >
														<i class="fa fa-2x fa-edit"></i>
													</a>
						                            </td>
						                            				                            
						                        </tr>
						                    		@endforeach
												
									</tbody>
								</table>

								</div>
								</div>
							</div>
						</div>
						<!--FIN SOLUCIONES RESPONSABLE-->

						
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
		
        
