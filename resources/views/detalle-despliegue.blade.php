@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

		<!-- begin #about -->
		<div id="about" class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
				<div class="row">

					<div class="col-md-12">

						<!-- begin breadcrumb -->
						<ol class="breadcrumb pull-right">
							<li><a href="dashboard.php">Home</a></li>
							<li class="active">Fichas</li>
						</ol>
						<!-- end breadcrumb -->

					</div>

				</div>

			</div>

		</div>
		<!-- end container -->

			<!-- end page-header -->

		<!-- begin #about -->
		<div class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">

				<div class="modal-header">
					<h4 class="modal-title">
						<label class='text-success f-s-14'>
							
						</label>
					</h4>
				</div>

				<!-- begin row -->
				<div class="row">
					<!-- begin col-5 -->
					<div class="col-md-5">
						<div class="panel panel-inverse" data-sortable-id="index-6" style="border: 1px solid rgba(112, 116, 120, 0.64);">
							<div class="panel-heading" style="padding:5px 5px;">
								<div class="panel-heading-btn">
									
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
									
								</div>
								<h4 class="panel-title">Propuestas /Solucion</h4>
							</div>
							<div class="panel-body p-t-0">
								<div class="media-body">

									
									
								
									<label class='text-success f-s-11'>
	                                	<a href="#"><strong>FICHA: </strong></a>
	                                	<i class="fa fa-clock-o fa-fw"></i>Creado: 
	                                </label>
									
			                        
                                </div>
                                	<label class='text-success f-s-11'>
                                		<i class="fa fa-cheked-o fa-fw"></i><strong>Propuesta N°: </strong>
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
                                   	<a href= "#"><button type = "button" class = "btn btn-success btn-xs"  title="Ver Propuestas">Regresar</button></a>
                                   <br>
                                   <br>
                                   	<label class='text-success f-s-11'>
                                		<strong>Actores:</strong> <a href="#modal-requerimiento-invitados" class="btn btn-xs btn-primary " data-toggle="modal"><i class="fa fa-plus"></i> </a>
                                	</label>
                                		<dl class="dl-horizontal">
                                				
											<dt>* RESPONSABLE:</dt>
											
											<dt>CO-RESPONSABLE</dt>
											<dd>
												
									         
											</dd>
												
										</dl>
                                	
	                        </div>
	
						</div>
					</div>
					<!-- end col-5 -->
					<!-- inicio acciones -->
					<div class="col-md-7">
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
									<a href="#modal-add-acc" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-plus"></i> Agregar</a><p>
									<ul class="media-list media-list-with-divider">
										
										<li class="media media-lg">
											<a class="pull-left">
												<label class="text-success f-s-14"><strong>

													
														
													</strong></label>
											</a>

											<div class="media-body">
												<h5 class="media-heading"></h5>
												
												<div class="media-body">
													<dl class="dl-horizontal">
														<dt>Fecha registro:</dt>
														<dd></dd>
														
													</dl>
												</div>
												<a class="btn btn-primary btn-xs" ><i class="fa fa-download"></i></a>
                                            	<a href="#modal-add-acc" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-edit"></i></a>
												
											</div>

										</li>
										
										
									</ul>
			                        
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
