@extends('layouts.institucion')

@section('content')

<!-- begin #content -->
		<div id="content" class="content" width="10%">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-12 -->
				<div class="col-md-12 col-sm-12">
					<div class="widget widget-stats bg-green-darker">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>Soluci&oacute;n</h4>
							<p>
								@if (isset($solucion) )
									{{ $solucion->verbo_solucion." ".$solucion->sujeto_solucion." ".$solucion->complemento_solucion }}
								@endif
							</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-12 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-7">
					
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Nueva Actividad</h4>
						</div>
						<div class="panel-body">
							<div class="height-lg" data-scrollbar="true">
								<div class="media-body">
								
									<form  method="POST" action="{{ route('actividades.saveActividadDespliegue', $solucion->id) }}" enctype="multipart/form-data">
										{{ csrf_field() }}
									 	<div class="form-group">
									    	<label for="exampleTextarea">Comentario</label>
									    	<textarea class="form-control" id="exampleTextarea" name="comentario" rows="3"></textarea>
									  	</div>
									  	<div class="form-group">
                                    		<label for="datepicker-default">Fecha de Inicio</label>
                                    		<input type="text" class="form-control" id="datepicker-default" name="fecha_inicio" placeholder="Select Date" value="07/12/2017" />
                                    		
                                		</div>
									  	<div class="form-group">
									    	<label for="exampleSelect1">Instituci&oacute;n ejecutora</label>
									    	<select class="form-control" name="institucion_id" id="exampleSelect1">
									      		@if( isset($actoresSoluciones) )
													@foreach( $actoresSoluciones as $actorSolucion )
														<option value="{{ $actorSolucion->usuario-> id}}">
															{{ $actorSolucion->usuario-> name }}
														</option>
													@endforeach
												@endif
									    	</select>
									  	</div>
									  
									  	<div class="form-group">
									    	<label for="exampleInputFile">Agregar archivos. (Opcional)</label>
									    	<!--
									    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
									    	-->

									    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="files[]" multiple>


									    	<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
									  	</div>
									  	<hr>
									  	<button type="submit" class="btn btn-primary pull-right">Registrar</button>
									</form>		

								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- end col-8 -->
				<div class="col-md-5">
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Actividades</h4>
						</div>
						<div class="panel-body">
							<div class="height-lg" data-scrollbar="true">
								
								<div class="media-body">

									@if( isset( $actividades ) && count($actividades) > 0)
										<?php $count=1; ?>
										@foreach( $actividades as $actividad)
											<h4>
												<label class="label label-danger label-lg">Actividad {{ $count }}</label><br><br>
											</h4>
											<p class="text-justify">
												{{ $actividad-> comentario }}
												<br><br>

												@if( $actividad-> ejecutor_id > 0 )
													<b> Ejecutor: </b> {{ $actividad-> usuario-> name }}<br>
												@endif
												
											</p>
											<hr>
											<?php $count++; ?>
										@endforeach
									@else
										@if( count($actividades) == 0)
											{{ "No hay actividades registradas"}}
										@endif
									@endif

								</div>
								

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		@stop
		