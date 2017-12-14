@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

		<!-- begin #about -->
		<div class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">

				<div class="modal-header">
					<h4 class="modal-title">
						<label class='text-success f-s-12'>
							<a href="{{ url('despliegueterritorial') }}" class="btn btn-success m-r-5"><i class="fa fa-1x fa-search"></i> Nueva Consulta</a>
							<br>
							<br>
							<strong>Evento:</strong>
							@if(isset($soluciones))
								@foreach($soluciones as $solucion)
									 
									{{ $solucion->evento->nombre_evento }}
									

								@endforeach
							@endif
							<strong> | Provincia:</strong>
							@if(isset($soluciones))
								@foreach($soluciones as $solucion)
									 
									{{ $solucion->provincia->nombre_provincia }}
									

								@endforeach
							@endif

							<strong> | Sector:</strong>
							@if(isset($soluciones))
								@foreach($soluciones as $solucion)
									 
									{{ $solucion->sector->nombre_sector }}
									

								@endforeach
							@endif

							<strong> | Líder de Mesa:</strong>
							@if(isset($soluciones))
								@foreach($soluciones as $solucion)
									 
									{{ $solucion->lider_mesa_solucion }}
									

								@endforeach
							@endif
							<strong> | Sistematizador de Mesa:</strong>
							@if(isset($soluciones))
								@foreach($soluciones as $solucion)
									 
									{{ $solucion->sistematizador_solucion }}
									

								@endforeach
							@endif
						</label>
					</h4>
				</div>

				<!-- begin row -->
				<div class="row">
					<!-- begin col-5 -->
					<div class="col-md-7">
						<div class="panel panel-inverse" data-sortable-id="index-6" style="border: 1px solid rgba(112, 116, 120, 0.64);">
							<div class="panel-heading" style="padding:5px 5px;">
								<div class="panel-heading-btn">
									
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand" data-original-title="" title=""><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
									
								</div>
								<h4 class="panel-title">Propuestas /Solución</h4>
							</div>
							<div class="panel-body p-t-0">
								<div class="media-body">

									<br>
									<div class="alert alert-info fade in m-b-15">
										<strong>Eslabon de la cadena productiva:</strong>
										@if(isset($soluciones))
											@foreach($soluciones as $solucion)
												 
												{{ $solucion->sipoc->nombre_sipoc }}
												

											@endforeach
										@endif
										<br>
										<strong>Instrumentos Necesario:</strong>
										@if(isset($soluciones))
											@foreach($soluciones as $solucion)
												 
												{{ $solucion->instrumento->nombre_instrumento }}
												

											@endforeach
										@endif
										<br>
										<strong>Clasificación Empresa:</strong>
										@if(isset($soluciones))
											@foreach($soluciones as $solucion)
												 
												{{ $solucion->tipoEmpresa->nombre_tipo_empresa }}
												

											@endforeach
										@endif
										<br>
										<strong>Ámbito:</strong>
										@if(isset($soluciones))
											@foreach($soluciones as $solucion)
												 
												{{ $solucion->ambit->nombre_ambit }}
												

											@endforeach
										@endif
										<span data-dismiss="alert"></span>
									</div>
									
								
									<label class='text-success f-s-11'>
	                                	
	                                	<i class="fa fa-clock-o fa-fw"></i>Creado: 
	                                	@if(isset($soluciones))
													@foreach($soluciones as $solucion)
														 
														{{ substr($solucion->created_at,0,10) }}
														

													@endforeach
												@endif
	                                </label>
									
			                        
                                </div>
                                	
                                	<label class='text-success f-s-11'>
                                		<i class="fa fa-cheked-o fa-fw"></i><strong>Solución</strong>
                                	</label>
									<blockquote>
										  	<p><h5>
										  		@if(isset($soluciones))
													@foreach($soluciones as $solucion)
														 
														{{ $solucion->verbo_solucion." ".$solucion->sujeto_solucion." ".$solucion->complemento_solucion }}
														

													@endforeach
												@endif
										  	</h5>
                                   	</blockquote>

                                   	<label class='text-success f-s-11'>
                                		<i class="fa fa-cheked-o fa-fw"></i><strong>Problematica</strong>
                                	</label>
									<blockquote>
										  	<p><h5>
										  		@if(isset($soluciones))
													@foreach($soluciones as $solucion)
														 
														{{ $solucion->problema_solucion }}
														

													@endforeach
												@endif
										  	</h5>
                                   	</blockquote>
                                	
	                        </div>
	
						</div>
					</div>
					<!-- end col-5 -->
					<!-- inicio acciones -->
					<div class="col-md-5">
						<div class="panel panel-inverse" data-sortable-id="index-5" style="border: 1px solid rgba(112, 116, 120, 0.64);" >
							<div class="panel-heading" style="padding:5px 5px;">
								<div class="panel-heading-btn">
									
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
									
								</div>
								<h4 class="panel-title">Acciones de cumplimiento</h4>
							</div>
							<div class="panel-body p-t-0">
								<div class="media-body">
									<br>
										<label class='text-success f-s-11'>
                                		
                                	</label>
                            		<dl class="dl-horizontal">
                            				
										<dt>RESPONSABLE: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
										@if(isset($actoresSoluciones))
											@foreach($actoresSoluciones as $actorSolucion)
												@if($actorSolucion->tipo_actor == 1) 
													{{ $actorSolucion->usuario-> name }}
												@endif
											@endforeach
										@endif
										
										<dt>CO-RESPONSABLE:</dt>

										<dd>
										@if(isset($actoresSoluciones))
											<ul>
												@foreach($actoresSoluciones as $actorSolucion)
													@if($actorSolucion->tipo_actor == 2) 
														<li>{{ " ".$actorSolucion->usuario-> name }}</li>
													@endif
												@endforeach
											</ul>
										@endif
										</dd>
											
									</dl>
									<div class="media-body">
										<dl class="dl-horizontal">
											Estado de Compromiso: &nbsp;&nbsp;&nbsp;
											<span class="label label-warning">
												@if(isset($soluciones))
													{{ $solucion[0]->estado->nombre_estado }}
												@endif
											</span> 
										</dl>
									</div>

									@if(isset($actividades) &&  count($actividades) > 0)
									<b>Actividades: </b>{{ count($actividades) }}
									<span class="pull-right" style="font-size: 12px">Ordenado desde la m&aacute;s reciente</span>
									<hr>
									<ul class="media-list media-list-with-divider">
										@foreach($actividades as $actividad)							

											<li class="media media-lg">
												<div class="media-body">
													<b>Fecha de Inicio: </b> {{ $actividad-> created_at}}<br>
													<b>Ejecutor: </b> {{ $actividad-> usuario-> name}}<br>
													<h5 class="media-heading"></h5>
													{{ $actividad -> comentario}}}
													<br>
													
													<a class="btn btn-primary btn-xs" ><i class="fa fa-download"></i></a>
	                                            	<a href="#modal-add-acc" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-edit"></i></a>
													
												</div>

											</li>
										@endforeach										
									</ul>
									@else
										No se encontraron actividades registradas.
									@endif
			                        
								</div>
							</div>
							
							
						</div>
					</div>
					<!-- fin acciones  -->
					</div>



			</div>
		</div>

@endsection

@section('end_js')
  @parent




  <script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('plugins/DataTables/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('plugins/DataTables/js/dataTables.responsive.js') }}"></script>
	<script src="{{ asset('js/table-manage-responsive.demo.min.js') }}"></script>
	<script src="{{ asset('js/custom-mipro.js') }}"></script>
	<script src="{{ asset('js/apps.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>


@endsection

@section('init_scripts')

  <script>
    $(document).ready(function() {
      Dashboard.init();



    });
  </script>

@endsection
