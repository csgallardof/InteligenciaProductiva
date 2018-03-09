@extends('layouts.cspReportes')

@section('title','Inicio')

@section('content')
		

		<!-- begin #content -->
		<div id="content" class="content" width="10%">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<!-- Logo INTELIGENCIA PRODUCTIVA 
			
			<div class="brand">
                <img src="{{ asset('imagenes/inteligencia_productiva_home.png') }}" class="left-block img-responsive" alt="Cinque Terre" width="337px" height="55px"><br>
            </div>
            -->
            <div class="row">
				<!-- begin col-12 -->
				<div class="col-md-12 col-sm-12">
					<div class="widget widget-stats bg-green-darker">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4 class="modal-title">Reporte Alerta:  {{$cspReportesAlerta->tema}}</h4>
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
				<div class="col-md-12">
					
					
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
						
						<li class="active">
							<a href="#hechos" data-toggle="tab">
								<i class="fa fa-sticky-note-o m-r-5" ></i>
								<span class="hidden-xs">Acciones Alerta del Reporte {{$cspReportesAlerta->tema}}</span>
								
							</a>
						</li>
						
					</ul>
					
					<div class="tab-content" data-sortable-id="index-3">
						
						
						<!--REPORTES DE ALERTAS-->
						<div class="tab-pane fade active in" id="hechos">
							<div class="height-lg" data-scrollbar="true">
								<div class="col-md-10">
								<a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
								</div>
						<hr>
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-6">
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
														<a target="_blank" href="{{ route('descargarAccionAlertaCsp',$accionesReporteAlerta-> anexo) }} ">
															<?php
																$pos = strpos($accionesReporteAlerta-> anexo, "_-_");
																$anexo = substr($accionesReporteAlerta-> anexo, $pos+3, strlen($accionesReporteAlerta-> anexo)); // devuelve "d"
															?>

															<i class="fa fa-2x fa-download"></i>

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
					

						
					</div>					
					
				</div>
				
					
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		@stop
		
        
