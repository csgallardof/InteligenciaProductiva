@extends('layouts.cspReportes')

@section('content')

<!-- begin #content -->
		<div id="content" class="content" width="10%">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
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
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-8">
					
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								
							</div>
							<h4 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nuevo Reporte Alerta CSP</h4>
						</div>
						<div class="panel-body">
							<div class="height-lg" data-scrollbar="true">
								<div class="media-body">
									<div class="col-md-10">

									<a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
									</div>
									
									<br>

									<hr>

									<form  method="POST" action="{{ route('guardarReporteAlertaCsp') }}" enctype="multipart/form-data">
										{{ csrf_field() }}
              
									  	
									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				<div class="col-md-3">
									 					<label for="fecha_atencion">Fecha de Atencion de Reporte</label>	
									 					<input id="fecha_atencion" required type="date" name="fecha_atencion" value="{{ date('Y-m-d') }}">
									 				</div>
									 				<div class="col-md-3">
									 					<label for="tema">Tema</label>
									 					<input type="text" required name="tema" class="form-control">
									 				</div>
									 				<div class="col-md-3">
									 					 <label for="institucion_id"></label>	
					                                	<input id="institucion_id"  type="hidden" name="institucion_id" value="{{$usuario_institucion_id}}">	
									 				</div>
									 				
									 			</div>
									 			
									  	</div>

									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				<div class="col-md-3">
									 					<label for="fuente">Fuente</label>
									 					 <input type="text" required name="fuente" class="form-control">			
									 				</div>
									 				
									 				<div class="col-md-3">
									 					 <label for="estado_reporte_id">Estado</label>
									 					 <select name="estado_reporte_id" class="form-control"  required="">
					                                    	<option value="">------Escoja un opcion----</option>
					                                    	@foreach($estadoReporte as $estadoReporte) 
					                                    	<option value="{{$estadoReporte['id']}}">{{$estadoReporte['nombre']}}
					                                    	</option>
					          
					                                   		@endforeach
					                                   
					                                	</select>		
									 				</div>
									 				<div class="col-md-3"></div>
									 			</div>
									 			
									  	</div>
									  	<div class="form-group">
									 			
									 			
									  	
									 	<div class="form-group">
									 		
									 		<div class="row">
									 			<div class="col-md-3"></div>
									 			<div class="col-md-7">
									 				<label for="descripcion">Descripción</label>		
									 			</div>
									 			<div class="col-md-3">
									 				<div id="descripcion" class="pull-right"></div>
									 			</div>
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" id="descripcion" name="descripcion" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()"></textarea>	
									 			</div>
									    	
									  	</div>
										<div class="from-group">
											<div class="row"></div>
											
										</div>

									  	<div class="form-group ">
									 		
									 		<div class="row">
													
													<div class="col-md-3"></div>
									 				<div class="col-md-4"> 
									 					
									 				<label for="solucion_propuesta" class=>Solución Propuesta</label>
									 				
									 				</div>
									 			
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" id="solucion_propuesta" name="solucion_propuesta" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()"></textarea>
									 			</div>
									    	
									  	</div>
												<div class="from-group">
											<div class="row"></div>
											
										</div>

									  	<div class="form-group ">
									 		
									 		<div class="row">
													
													<div class="col-md-3"></div>
									 				<div class="col-md-4"> 
									 					
									 				<label for="riesgo_principal" class=>Riesgo Principal</label>
									 				
									 				</div>
									 			
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" id="riesgo_principal" name="riesgo_principal" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()"></textarea>
									 			</div>
									    	
									  	</div>	  
									  	<div class="from-group">
											<div class="row"></div>
											
										</div>


									  	<div class="form-group">

									  		<div class="row">
									  			<div class="col-md-3"></div>
									  			<div class="col-md-7">
									    	<label for="anexo">Agregar archivos. (Opcional)</label>
									    	
									    	<input type="file" class="form-control-file" id="anexo" aria-describedby="fileHelp" name="anexo" >

									    	<small id="fileHelp" class="form-text text-muted"></small>
									  	</div>
									  	</div>			  
									  	</div>
									  	<hr>
									  	<div class="col-md-10">
									  	<button type="submit" class="btn btn-primary pull-right">Registrar</button>
									  	</div>
									</form>		

								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- end col-8 -->
				
			</div>

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
			<!-- end row -->
		</div>
		<!-- end #content -->

		@stop
