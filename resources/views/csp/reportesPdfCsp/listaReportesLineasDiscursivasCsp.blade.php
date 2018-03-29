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
                            <h4 class="modal-title">Reportes Consejo Sectorial de la Producción </h4>
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
                <div class="col-md-8" >
                    <div class="panel panel-inverse pull-right" data-sortable-id="index-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">FICHA DE HECHOS RELEVANTES </h4>
                        </div>
                        <div class="height-lg" data-scrollbar="true"> 
                        <div class="panel-body">
                            <form method="GET" action="/institucion/busquedaReporteHechosLineasDiscursivas"  enctype="multipart/form-data">
                                          <div class="col-lg-4 pull-right">
                                            <div class="input-group">
                                              <select name="parametro" class="form-control" >
                                                            <option value="">------Escoja un opcion----</option>
                                                            @foreach($CspPeriodoReporte as $CspPeriodoReporte) 
                                                            <option value="{{$CspPeriodoReporte['id']}}">{{$CspPeriodoReporte['nombre']}}
                                                            </option>
                              
                                                            @endforeach
                                                       
                                                        </select>

                                              <span class="input-group-btn">
                                                <button class="btn btn-default"  type="submit">Buscar</button>
                                              </span>
                                            </div><!-- /input-group -->
                                          </div><!-- /.col-lg-6 -->
                                        </form>
                            <form target="_blank" method="POST" action="/institucion/guardarIdReporteHechoLineasDiscursivasCsp/1" enctype="multipart/form-data">
										{{ csrf_field() }}
              							<hr>
									  	<div class="row">
									  	<div class="col-md-12">
									  	<a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
									  	

									  	<div class="col-md-10">  
									  	<button type="submit"  class="btn btn-primary pull-right">Reporte Lineas Discursivas</button> 
									  	<div class="col-md-8">
									  	</div>
									  	</div>
									  	</div>
										</div>
									  	
									  <table class="table" class="table nowrap" width="100%">

									<thead>
										{{$reportesHechos->render()}}
										<tr>
											<th>Seleccionar</th>
											<th>Fecha de Atencion</th>
											<th>Fecha  Registro</th>
											<th>Tema</th>
											<th>Periodo</th>
											<th>Fuente</th>		
											<th>Institucion</th>
											
										</tr>
									</thead>
									<tbody>
										
													@foreach($reportesHechos as $reportesHechos)
						                        <tr>
													<td><input type="checkbox" name="check[]" id="chk{{$reportesHechos->id}}" value='{{$reportesHechos->id}}'> </td>
						                          <td class="text-justify">{{$reportesHechos->fecha_reporte}}</td>
						                          <td class="text-justify">{{$reportesHechos->FechaRegistro}}</td>

						                          <td class="text-justify">{{$reportesHechos->tema}}</td>
						                          <td class="text-justify">{{$reportesHechos->Periodo}}</td>
						                    
						                          <td class="text-justify">{{$reportesHechos->fuente}}</td>
						                          
						                          <td class="text-justify">{{ $reportesHechos->Institucion}}</td>
						                      		
						                            				                            
						                        </tr>

						                    		@endforeach
												
									</tbody>
										
								</table>

									  	
									</form>
							</div>

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
		