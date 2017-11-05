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
			<div id="about" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<div class="modal-header">
							<h4 class="modal-title">Buscar las propuestas del consejo consultivo</h4>
					</div>

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-12">
							<div class="panel bg-yellow">
								<div class="panel-body bg-yellow">
									<h3 class="text-white"><strong>Consultar</strong></h3>
										<br>
									
									<form class="form-horizontal form-bordered" action = "dashboard.php" method="GET">
										<div class="col-md-5">
											<select class="form-control" name = "sectores" data-size="15" data-live-search="true" data-style="btn-info">
											<option value="0">Seleccione el sector</option>

												<option value="1">Agroindustria </option>
												<option value="2">Acuícola </option>
												<option value="2">Turismo </option>
												<option value="2">Transporte </option>
												<option value="2">Comercio </option>
												<option value="2">Industria </option>


											</select>

										</div>

										<div class="col-md-2 m-l-10">

											<select class="form-control" name = "rec_id" data-size="15" data-live-search="true" data-style="btn-info">
											<option value="0">Provincia</option>

											<option value="1">Pichincha </option>
											<option value="2">Guayas</option>
											<option value="2">Los Ríos</option>
											<option value="2">Tungurahua</option>
											<option value="2">Mananí</option>


											</select>

										</div>
										<div class="col-md-1 m-l-10">
											<button type="submit" class="btn btn-success m-r-5 m-b-5">Consultar</button>
											<input type="hidden" name="accion" value="nuevo">
										</div>

										{{-- <div class="col-md-1 m-l-10">
											<a href="add-fichas.php" class="btn btn-success m-r-5 m-b-5"><i class="fa fa-plus m-r-10"></i>Agregar</a>
										</div> --}}
									</form>
								</div>
							</div>
							<!-- begin page-header -->
						</div>
							<!-- end col-4 -->
					</div>
						<!-- end row -->
				</div>

			</div>
			<!-- end #about -->

			<!-- begin #about -->
			<div id="about" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
					<div class="container" data-animation="true" data-animation-type="fadeInDown">

							<!-- begin row -->
							<div class="row">
									<!-- begin col-4 -->

									<!-- end row -->
									<div class="col-md-12"  style="background: #ffffff;">

										<div class="modal-header">

											<h4 class="modal-title fit-m-t-2">Cadena Productiva
											</h4>
											
											<span class="badge badge-info">Incio de las mesas 13 de Nov.</span></td>
												
					                        

											</div>
											<div class="modal-body">
											<!--INICIO ROW-->

											<!-- begin row -->
												<div class="row">
														<!-- begin col-3 -->
														<div class="col-md-2">

															<!-- MODAL PROVEEDORES INICIO -->

															<div class="panel panel-inverse overflow-hidden">
															<div class="panel-heading bg-yellow">
																<h3 class="panel-title"  style="padding:5px 10px;">
																	<a class="">
																		<i class="fa fa-2x fa-arrow-right pull-right"></i>
																		<strong class="text-white f-s-14">PROVEEDORES</strong>




																	</a>
																</h3>
															</div>
															<div id="collapse10" class="panel-collapse">
																<div class="panel-body custom-m-padding">




																	<table>


																		<tr>
																			<td>
																				<p class="f-s-12 text-justify">
																				<a href= "edit-fichas-ccpt.php?fic_id=" title="Requerimiento" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward (alias)"></i></a>
																				</p>
																				<hr class="hr_style3" />
																			</td>

																		</tr>
																	</table>

																</div>
															</div>
														</div>
													</div>
														<!-- end col-3 -->
													<!--MODAL PROVEEDORES FIN  -->


													<!--MODAL INSUMOS INCIO   -->
														<div class="col-md-2">
															<div class="panel panel-inverse overflow-hidden">
															<div class="panel-heading bg-yellow">
																<h3 class="panel-title"  style="padding:5px 10px;">
																	<a class="">
																		<i class="fa fa-2x fa-arrow-right pull-right"></i>
																		<strong class="text-white f-s-14">INSUMOS</strong>




																	</a>
																</h3>
															</div>

															<div id="collapse10" class="panel-collapse">
																<div class="panel-body custom-m-padding">




																	<table>

																		<tr>
																			<td>
																				<p class="f-s-12 text-justify">
																				<a href= "edit-fichas-ccpt.php?fic_id=" title="Requerimiento" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward (alias)"></i></a>
																				</p>
																				<hr class="hr_style3" />
																			</td>

																		</tr>
																	</table>

																</div>
															</div>
														</div>
													</div>

													<!-- MODAL FINAL INSUMOS  -->

													<!--MODAL PREOCESOS INCIO   -->
														<div class="col-md-2">
															<div class="panel panel-inverse overflow-hidden">
															<div class="panel-heading bg-yellow">
																<h3 class="panel-title"  style="padding:5px 10px;">
																	<a class="">
																		<i class="fa fa-2x fa-arrow-right pull-right"></i>
																		<strong class="text-white f-s-14">PROCESOS</strong>




																	</a>
																</h3>
															</div>

															<div id="collapse10" class="panel-collapse">
																<div class="panel-body custom-m-padding">



																	<table>
																		<tr>
																			<td>
																				<p class="f-s-12 text-justify">
																				<a href= "edit-fichas-ccpt.php?fic_id=" title="Requerimiento" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward (alias)"></i></a>
																				</p>
																				<hr class="hr_style3" />
																			</td>

																		</tr>
																	</table>

																</div>
															</div>
														</div>

													</div>

														<!-- MODAL PROCESOS FINAL   -->

														<!--MODAL PRODUCTO INCIO   -->
														<div class="col-md-2">
															<div class="panel panel-inverse overflow-hidden">
															<div class="panel-heading bg-yellow">
																<h3 class="panel-title"  style="padding:5px 10px;">
																	<a class="">
																		<i class="fa fa-2x fa-arrow-right pull-right"></i>
																		<strong class="text-white f-s-14">PRODUCTO</strong>



																	</a>
																</h3>
															</div>

															<div id="collapse10" class="panel-collapse">
																<div class="panel-body custom-m-padding">



																	<table>

																		<tr>
																			<td>
																				<p class="f-s-12 text-justify">
																				<a href= "edit-fichas-ccpt.php?fic_id=" title="Requerimiento" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward (alias)"></i></a>
																				</p>
																				<hr class="hr_style3" />
																			</td>

																		</tr>
																	</table>

																</div>
															</div>
														</div>
													</div>

													<!-- MODAL PRODUCTO FINAL  -->
													<!--MODAL MERCADO INCIO   -->
														<div class="col-md-2">
															<div class="panel panel-inverse overflow-hidden">
															<div class="panel-heading bg-yellow">
																<h3 class="panel-title"  style="padding:5px 10px;">
																	<a class="">
																		<i class="fa fa-2x fa-arrow-right pull-right"></i>
																		<strong class="text-white f-s-14">MERCADO</strong>




																	</a>
																</h3>
															</div>

															<div id="collapse10" class="panel-collapse">
																<div class="panel-body custom-m-padding">




																	<table>

																		<tr>
																			<td>
																				<p class="f-s-12 text-justify">
																				<a href= "edit-fichas-ccpt.php?fic_id=" title="Requerimiento" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward (alias)"></i></a>
																				</p>
																				<hr class="hr_style3" />
																			</td>

																		</tr>
																	</table>

																</div>
															</div>
														</div>
													</div>

													<!-- MODAL MERCADO FINAL   -->

										</div>
										<!-- end row -->

										<!-- FIN ROW-->

										<!-- -->

										<hr />


										</div>

								<!-- end #content -->

								<!-- begin scroll to top btn -->
								<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
								<!-- end scroll to top btn -->
							</div>

									<!-- end col-4 -->

							</div>
							<!-- end row -->

					</div>
					<!-- end container -->
			</div>
			<!-- end #about -->

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
