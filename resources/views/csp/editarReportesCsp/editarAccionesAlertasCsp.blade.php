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
							<h4>Reportes Concejo Sectorial de Productividad</h4>
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
				<div class="col-md-12">
					
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								
							</div>
							<h4 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i> Modificar Accion Reporte </h4>
						</div>
						<div class="panel-body">
							<div class="height-lg" data-scrollbar="true">
								<div class="media-body">
									<a href="javascript:window.history.back();" class="btn btn-default pull-right">&laquo; Regresar</a>
									<hr>
									<br>

									<form  method="POST" action="/institucion/modificar-acciones-alerta/{{$CspAccionesAlerta->id}}" enctype="multipart/form-data">
										{{ csrf_field() }}
              
									  	<input type="hidden"name="reporte_alerta_id" value="{{$CspAccionesAlerta->reporte_alerta_id}}">
									  	<div class="form-group">
									 			<div class="row">
									 				<div class="col-md-3"></div>
									 				<div class="col-md-3">
									 					<label for="fecha">Fecha de Reporte</label>	
									 					<input id="fecha" type="text" style="width:115px;height:25px" name="fecha" value="{{$CspAccionesAlerta->fecha}}">
									 				</div>
									 				
									 			</div>
									 			
									  	</div>

									 			
									  	</div>
									 	<div class="form-group">
									 		
									 		<div class="row">
									 			<div class="col-md-3"></div>
									 			<div class="col-md-7">
									 				<label for="acciones">Accion</label>		
									 			</div>

									 			<div class="col-md-3">
									 				<div id="acciones" class="pull-right"></div>
									 			</div>
									 		</div>
									 			<div class="col-md-3"> </div>
									 			<div class="col-md-6">
									 			<textarea  required class="form-control" id="acciones" name="acciones" rows="3" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$CspAccionesAlerta->acciones}}</textarea>
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
									  					  
									  	<div class="form-group"> 
									  	<div class="row">
									  	</div>
									  	</div>
									  	<div class="form-group"> 
									  	<div class="row"> 
									  		<div class="col-md-6">
									  	<button type="submit" class="btn btn-primary pull-right">Actualizar</button>
									  		</div>
									  	</div>
									  	</div>
									</form>		

								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- end col-8 -->
				
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		@stop
		