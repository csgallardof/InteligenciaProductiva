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

          <br /><br />
					<div class="modal-header">
							<h4 class="modal-title">Buscar propuestas, compromisos y acciones del Consejo Consultivo Productivo Tributario</h4>
					</div>
					
					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-12">
							<div class="panel bg-yellow">
								<div class="panel-body bg-yellow">
									<h3 class="text-white"><strong>Consultar</strong></h3>
										<br>

									<form class="form-horizontal form-bordered" action = "{{ url('consejoconsultivo') }}" method="POST">

										 {{ csrf_field() }}
										<div class="col-md-5">
											<select class="form-control" name = "sectores" data-size="15" data-live-search="true" data-style="btn-info" required>
											<option value="0">Seleccione el sector</option>

												@foreach($sectors as $sector)

													@if(isset($paramSector))
														@if($sector->id == $paramSector->id)
															<option value="{{ $sector->id }}" selected > {{ $sector->nombre_sector }} </option>
														@else
															<option value="{{ $sector->id }}" > {{ $sector->nombre_sector }}</option>
														@endif	
													@else
														<option value="{{ $sector->id }}" > {{ $sector->nombre_sector }}</option>
													@endif	

												@endforeach


											</select>

										</div>

										<div class="col-md-4">

											<select class="form-control" name = "ambitos" data-size="15" data-live-search="true" data-style="btn-info" required>
											<option value="0">Seleccione un &Aacute;mbito</option>

											@foreach($ambits as $ambito)

													@if(isset($paramAmbit))
													@if($ambito->id == $paramAmbit->id)
														<option value="{{ $ambito->id }}" selected="" > {{ $ambito->nombre_ambit }}</option>
													@else
														<option value="{{ $ambito->id }}" > {{ $ambito->nombre_ambit }}</option>
													@endif
												@else
													<option value="{{ $ambito->id }}" > {{ $ambito->nombre_ambit }}</option>
												@endif

											@endforeach


											</select>

										</div>

										<div class="col-md-1 ">
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
											@if(isset($paramSector) && isset($paramAmbit) )
												<label class='text-success f-s-12'>
													<strong>Sector: </strong> {{ $paramSector->nombre_sector}} | <strong>&Aacute;mbito: </strong> {{ $paramAmbit->nombre_ambit  }}
												</label><hr>
											@endif

											<h4 class="modal-title fit-m-t-2">Cadena Productiva </h4>

										</div>
										<div class="modal-body">
										<!--INICIO ROW-->

										<!-- begin row -->
											<div class="row">

												<!-- PROVEEDORES INICIO -->
												<div class="col-md-3  pull-left">
													<div class="panel panel-inverse overflow-hidden">
														<div class="panel-heading bg-yellow">
															<h3 class="panel-title"  style="padding:5px 10px;">
																<a class="">
																	<i class="fa fa-2x fa-arrow-right pull-right"></i>
																	<strong class="text-white f-s-13">
																	PROVEEDORES
																	</strong>
																</a>
															</h3>
														</div>
														<div id="collapse10" class="panel-collapse">
															<div class="panel-body custom-m-padding">
																<label class='text-success f-s-12 m-t-2 f-w-500'>Resultados: </label>
																	@if(isset($pajustada_sol_proveedores))
																		{{ count($pajustada_sol_proveedores) }}
																	@endif
																<hr class='hr_style2' />
																<table>
																	@if(isset($pajustada_sol_proveedores))
																	@foreach($pajustada_sol_proveedores as $pajustada_sol_p)
																	<tr>
																		<td>
																			<p class="f-s-12 text-justify">
																			{{ $pajustada_sol_p->nombre_pajustada }}
																				<label class='text-success f-s-12 m-t-2 f-w-500'></label><br>
																				
																					<a href= "/detalle-ccpt/{{ $pajustada_sol_p->id }}/{{ $paramSector->id }}/{{ $paramAmbit->id }}/1" title="Requerimiento" class="label label-primary" >
																						Ver m&aacute;s..
																					</a>
																			</p>
																			<hr class="hr_style3" />
																		</td>

																	</tr>
																	@endforeach
																	@endif
																	
																</table>
															</div>
														</div>
													</div>
												</div>
											<!--PROVEEDORES FIN  -->


											<!--INSUMOS INCIO   -->
												
												<div class="col-md-2 ">
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
																<label class='text-success f-s-12 m-t-2 f-w-500'>Resultados:</label>
																	@if(isset($pajustada_sol_insumo))
																		{{ count($pajustada_sol_insumo) }}
																	@endif
																<hr class='hr_style2' />

																<table>
																	@if(isset($pajustada_sol_insumo))
																	@foreach($pajustada_sol_insumo as $pajustada_sol_insu)

																	<tr>
																		<td>
																			<p class="f-s-12 text-justify">
																			{{ $pajustada_sol_insu->nombre_pajustada }}
																			<label class='text-success f-s-12 m-t-2 f-w-500'></label><br>
																			<a href= "/detalle-ccpt/{{ $pajustada_sol_insu->id }}/{{ $paramSector->id }}/{{ $paramAmbit->id }}/1" title="Requerimiento" class="label label-primary" >
																						Ver m&aacute;s..
																					</a>
																			</p>
																			<hr class="hr_style3" />
																		</td>

																	</tr>
																	@endforeach
																	@endif
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
															<label class='text-success f-s-12 m-t-2 f-w-500'>Resultados: </label>
															@if(isset($pajustada_sol_proceso))
																{{ count($pajustada_sol_proceso) }}
															@endif
															<hr class='hr_style2' />
																<table>
																	@if(isset($pajustada_sol_proceso))
																	@foreach($pajustada_sol_proceso as $pajustada_sol_proc)
																	<tr>
																		<td>
																			<p class="f-s-12 text-justify">
																			{{ $pajustada_sol_proc->nombre_pajustada}}
																			<label class='text-success f-s-12 m-t-2 f-w-500'></label><br>
																			<a href= "/detalle-ccpt/{{ $pajustada_sol_proc->id }}/{{ $paramSector->id }}/{{ $paramAmbit->id }}/1" title="Requerimiento" class="label label-primary" >
																						Ver m&aacute;s..
																					</a>
																			</p>
																			<hr class="hr_style3" />
																		</td>

																	</tr>
																	@endforeach
																	@endif
																</table>
															</div>
														</div>
													</div>
												</div>
												<!--PROCESOS FINAL   -->

												<!--PRODUCTO INCIO   -->
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
																<label class='text-success f-s-12 m-t-2 f-w-500'>Resultados: </label>
																@if(isset($pajustada_sol_producto))
																		{{ count($pajustada_sol_producto) }}
																	@endif
																<hr class='hr_style2' />

																<table>

																	@if(isset($pajustada_sol_producto))
																	@foreach($pajustada_sol_producto as $pajustada_sol_prod)
																	<tr>
																		<td>
																			<p class="f-s-12 text-justify">
																				{{ $pajustada_sol_prod->nombre_pajustada }}
																				<label class='text-success f-s-12 m-t-2 f-w-500'></label> <br> 
																				<a href= "/detalle-ccpt/{{ $pajustada_sol_prod->id }}/{{ $paramSector->id }}/{{ $paramAmbit->id }}/1" title="Requerimiento" class="label label-primary" >
																						Ver m&aacute;s..
																					</a>
																			</p>
																			<hr class="hr_style3" />
																		</td>

																	</tr>
																	@endforeach
																	@endif
																		
																</table>
															</div>
														</div>
													</div>
												</div>
												<!--PRODUCTO FINAL  -->
												
												<!--MERCADO INCIO   -->
												<div class="col-md-3 pull-right">
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
																<label class='text-success f-s-12 m-t-2 f-w-500'>Resultados:</label>
																@if(isset($pajustada_sol_mercado))
																		{{ count($pajustada_sol_mercado) }}
																	@endif
																<hr class='hr_style2' />
																<table>
																	@if(isset($pajustada_sol_mercado))
																	@foreach($pajustada_sol_mercado as $pajustada_sol_mer)
																
																	<tr>
																		<td>
																			<p class="f-s-12 text-justify">
																				{{ $pajustada_sol_mer->nombre_pajustada }}
																				<label class='text-success f-s-12 m-t-2 f-w-500'></label> <br>
																				<a href= "/detalle-ccpt/{{ $pajustada_sol_mer->id }}/{{ $paramSector->id }}/{{ $paramAmbit->id }}/1" title="Requerimiento" class="label label-primary" >
																						Ver m&aacute;s..
																					</a>
																			</p>
																			<hr class="hr_style3" />
																		</td>
																	@endforeach
																	@endif
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>

												<!-- MODAL MERCADO FINAL   -->
			
											</div>
											<!-- end row -->

											<hr />

										</div>

								

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
