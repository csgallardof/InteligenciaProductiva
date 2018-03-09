@extends('layouts.cspReportes')

@section('content')

<div id="content" class="content">
			<!-- begin breadcrumb -->
			
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
                    {{$cspReportesHecho->tema}}
                   
                </div>
                <div class="invoice-header">
                    <div class="invoice-from">
                        
                        <address class="m-t-5 m-b-5">
                            <strong>Fecha Reporte</strong><br />
                            {{$cspReportesHecho->fecha_reporte}}<br />
                             <strong>Fuente</strong><br />
                            {{$cspReportesHecho->fuente}}<br />
                            <strong>Lugar</strong><br />
                            {{$cspReportesHecho->lugar}}<br />
                            <strong>Porcentaje de Avance</strong><br />
                            {{$cspReportesHecho->porcentaje_avance}}<br />
                            
                        </address>
                    </div>
                    
                    
                </div>
                <div class="invoice-content">
                   
                    <div class="media-body">

                        <h6 class="media-heading"><strong>Descripcion</strong></h6>
                       <p> {{$cspReportesHecho->descripcion}}</p>
                       	
                    </div>
                    <hr></hr>
                    <div class="media-body">
                        <h6 class="media-heading"><strong>Lineas Discursivas</strong></h6>
                        <p align="justify">{{$cspReportesHecho->lineas_discursivas}}</p>
                        
                       
                    </div>
                     <hr></hr>
                    <div class="media-body">
                        <h6 class="media-heading"><strong>Anexo</strong></h6>
                        <a  href="{{ route('descargarArchivoHechosCsp',$cspReportesHecho-> anexo) }} ">
															<?php
																$pos = strpos($cspReportesHecho-> anexo, "_-_");
																$anexo = substr($cspReportesHecho-> anexo, $pos+3, strlen($cspReportesHecho-> anexo)); // devuelve "d"
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

@stop
		