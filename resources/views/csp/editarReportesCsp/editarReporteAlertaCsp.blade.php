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
							<br><br>
							<div class="col-md-0 pull-right">
							            <a href="#modal-without-animation"  data-toggle="modal"><i class="fa fa-2x fa-info-circle " style="color :#F7F9F9"></i></a>
							            
							
							<div class="modal " id="modal-without-animation">
								<div class="modal-dialog ">
									<div class="modal-content ">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 class="modal-title" style="color:red">Información</h3>
										</div>
										<div class="modal-body">
											<p style="color:#212F3D;font-size:medium" align="justify"> <strong>Hechos Relevantes</strong> <br> Eventos y/o hechos relevantes de carácter comunicacional que ocurrieron durante la semana que se reporta. No es un informe de gestión de las reuniones o actividades llevadas a cabo durante la semana de reporte, sino aquellos hechos lo suficientemente relevantes para ser puestos en conocimiento de la Presidencia de la República, tomando en cuenta el nivel de relevancia de la gestión, de política, de comunicación y de presencia en territorio. 
											<strong> <br>Líneas Argumentales Hechos Relevantes</strong> <br> Las líneas discursivas se elaboran sobre los hechos relevantes ocurridos durante la semana que se reporta, y la misma deberá estar escrita en pasado. Por ejemplo, “El pasado viernes 23 de febrero 2018, se inauguró la planta de aluminio de Posorja¼”. <br> 
											<strong>Alertas del Sector</strong> <br>Son alertas del sector que han sido identificadas, que no han podido ser resueltas internamente, por lo que necesitan ser puestas en conocimiento, y de ser necesario, buscar la intervención del Secretario General de la Presidencia, y posteriormente, del Presidente de la República. Adicionalmente, estas alertas deben anticipar cualquier noticia o nota de prensa, por lo que su objetivo es alertar a la Presidencia de la República sobre el suceso o posible problema. Por ejemplo, una alerta del sector puede ser la baja de precio de la papa en la provincia de Tungurahua, lo cual, posiblemente, genere un paro de los involucrados en la cadena de compra-venta. Las alertas reportadas deben ser reportadas todas las semanas, a menos que hayan sido resueltas en su totalidad. <br>
											<strong>Agenda Territorial</strong><br>Eventos de carácter comunicacional que se tiene planificado que sucedan durante el mes requerido. Aconsejamos se realice un importante hincapié en cuanto a la identificación de las Obras del Gobierno y de los eventos de carácter comunicacional, ya que los mismos serán utilizados para las grabaciones de "El Gobierno Informa". Adicionalmente,  solicitamos considerar los eventos en los que se desea se incluya una participación/saludo del Presidente de la República. No es un reporte de gestión, sino aquellos eventos relevantes.<br>
											<strong>Líneas Discursivas de la Agenda Territorial</strong><br>Las líneas discursivas de la Agenda Territorial deberán estar escritas en futuro. Por ejemplo, “El próximo 15 de marzo de 2018, se inaugurará la planta de aluminio de Posorja¼”.

											<br><br><i>NOTA1: La información debe estar validada por su máxima autoridad.</i> 
											<br><br><i>NOTA2: La información es de carácter sensible, y no puede contener errores de ningún tipo.</i> 
											<br><br><i>NOTA3: Tomar en cuenta la forma de redacción, las faltas ortográficas y el detalle de la misma.</i> 


										</p>
											
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Cerrar</a>
										</div>
									</div>
								</div>
							</div>        
			    </div>	
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
							<h4 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i> Editar Reporte Alerta CSP</h4>
						</div>
						<div class="panel-body">
							
									<div class="col-md-10">

									<a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
									</div>
									
									<br>
									<hr>
									@if($cspReportesAlerta->created_at>=$CspPeriodoReporte->fecha_inicio) 
									<form  method="POST" action="/institucion/modificar-reporte-alerta/{{$cspReportesAlerta->id}}" enctype="multipart/form-data">
										{{ csrf_field() }}
              
									  	
									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				
									 				<div class="col-md-3">
									 					<label for="fecha_atencion">Fecha de Atencion de Reporte</label>	
									 					<input id="fecha_atencion" readonly="readonly" required type="text" name="fecha_atencion" value="{{$cspReportesAlerta->fecha_atencion}}">
									 				</div>
													
									 				<div class="col-md-3">
									 					<label for="tema">Tema</label>
									 					<input type="text" required name="tema" class="form-control" value="{{$cspReportesAlerta->tema}}">
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
									 				<div class="col-md-4">
									 					<label for="fecha_reporte">Tipo Comunicacional</label>
									 				</div>
									 			</div>
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				<div class="col-md-3">
									 					<select class="form-control" required="" name="tipo_comunicacional" id="">
									 						<option value="" disabled selected>Seleccione un tipo</option>
									 						<option value="Institucional">Institucional</option>
									 						<option value="Presidencia">Presidencia</option>
									 					</select>
									 				</div>
									 			</div>
	
									  	</div>

									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				<div class="col-md-3">
									 					<label for="fuente">Fuente</label>
									 					 <input type="text" required name="fuente" class="form-control" value="{{$cspReportesAlerta->fuente}}">			
									 				</div>
									 				
									 				<div class="col-md-3">
									 					 <label for="estado_reporte_id">Estado</label>
									 					 <select name="estado_reporte_id" class="form-control"  required="">
					                                    	<option value="" >------Escoja un opcion----</option>
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
									 				<label for="descripcion">Descripcion</label>		
									 			</div>
									 			<div class="col-md-3">
									 				<div id="descripcion" class="pull-right"></div>
									 			</div>
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" id="descripcion" name="descripcion" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->descripcion}}</textarea>	
									 			</div>
									    	
									  	</div>
										<div class="from-group">
											<div class="row"></div>
											
										</div>

									  	<div class="form-group ">
									 		
									 		<div class="row">
													
													<div class="col-md-3"></div>
									 				<div class="col-md-4"> 
									 					
									 				<label for="solucion_propuesta" class=>Solucion Propuesta</label>
									 				
									 				</div>
									 			
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" id="solucion_propuesta" name="solucion_propuesta" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->solucion_propuesta}}</textarea>
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
									 			<textarea required class="form-control" id="riesgo_principal" name="riesgo_principal" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->riesgo_principal}}</textarea>
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
									@endif
									@if($cspReportesAlerta->created_at<=$CspPeriodoReporte->fecha_inicio and $cspReportesAlerta->estado_reporte_id==2 ) 
									<form  method="POST" action="/institucion/modificar-reporte-alerta-estado/{{$cspReportesAlerta->id}}" enctype="multipart/form-data">
										{{ csrf_field() }}
              
									  	
									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				
									 				<div class="col-md-3">
									 					<label for="fecha_atencion">Fecha de Atencion de Reporte</label>	
									 					<input id="fecha_atencion" readonly="readonly" required type="text" name="fecha_atencion" value="{{$cspReportesAlerta->fecha_atencion}}">
									 				</div>
													
									 				<div class="col-md-3">
									 					<label for="tema">Tema</label>
									 					<input type="text" required name="tema" readonly="readonly" value="{{$cspReportesAlerta->tema}}">
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
									 					 <input type="text" required name="fuente" readonly="readonly" value="{{$cspReportesAlerta->fuente}}">			
									 				</div>
									 				
									 				<div class="col-md-3">
									 					 <label for="estado_reporte_id">Estado</label>
									 					 <select name="estado_reporte_id" class="form-control"  required="">
					                                    	<option value="" >------Escoja un opcion----</option>
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
									 				<label for="descripcion">Descripcion</label>		
									 			</div>
									 			<div class="col-md-3">
									 				<div id="descripcion" class="pull-right"></div>
									 			</div>
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" readonly="readonly" id="descripcion" name="descripcion" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->descripcion}}</textarea>	
									 			</div>
									    	
									  	</div>
										<div class="from-group">
											<div class="row"></div>
											
										</div>

									  	<div class="form-group ">
									 		
									 		<div class="row">
													
													<div class="col-md-3"></div>
									 				<div class="col-md-4"> 
									 					
									 				<label for="solucion_propuesta" class=>Solucion Propuesta</label>
									 				
									 				</div>
									 			
									 		</div>
									 			<div class="col-md-3"></div>
									 			<div class="col-md-6">
									 			<textarea required class="form-control" readonly="readonly" id="solucion_propuesta" name="solucion_propuesta" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->solucion_propuesta}}</textarea>
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
									 			<textarea required class="form-control" readonly="readonly" id="riesgo_principal" name="riesgo_principal" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesAlerta->riesgo_principal}}</textarea>
									 			</div>
									    	
									  	</div>	  
									  	<div class="from-group">
											<div class="row"></div>
											
										</div>


									  	<div class="form-group">
											<input id="anexo"  type="hidden" name="anexo" value="{{$cspReportesAlerta->anexo}}">

									  	</div>
									  	<hr>
									  	<div class="col-md-10">
									  	<button type="submit" class="btn btn-primary pull-right">Registrar</button>
									  	</div>
									</form>		
									@endif
								
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

