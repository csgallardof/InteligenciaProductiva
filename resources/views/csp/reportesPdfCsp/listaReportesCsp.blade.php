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
                <div class="col-md-8">
                    
                    
                    
                    
                    <div class="panel panel-inverse" >
                        <div class="panel-heading pull-righ">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Acciones Alerta del Reporte <br> </h4>
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
								<a href="/institucion/guardarIdReporteHechoCsp" class="btn btn-primary pull-right">Regresar</a>
								</div>
                                <br>
					           	<hr>
															
								<form  method="POST" action="/institucion/guardarIdReporteHechoCsp/1" enctype="multipart/form-data">
										{{ csrf_field() }}
              
									  	
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

									  	
									  	<div class="form-group">
									 			
									 			
									  	
									 	
										
												<div class="from-group">
											<div class="row"></div>
											
										</div>

									  	  
									  	<div class="from-group">
											<div class="row"></div>
											
										</div>


									  	
									  	<hr>
									  	<div class="col-md-10">
									  	<button type="submit" class="btn btn-primary pull-right">Reporte</button>
									  	</div>
									</form>
								
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
		