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
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-green-darker">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p>3,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
						<div class="stats-info">
							<h4>BOUNCE RATE</h4>
							<p>20.44%</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-purple">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>UNIQUE VISITORS</h4>
							<p>1,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
						<div class="stats-info">
							<h4>AVG TIME ON SITE</h4>
							<p>00:12:23</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-8">
					
					
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
						<li class="active"><a href="#latest-post" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">Soluciones General</span></a></li>
						<li class=""><a href="#purchase" data-toggle="tab"><i class="fa fa-shopping-cart m-r-5"></i> <span class="hidden-xs">Soluciones Responsable</span></a></li>
						<li class=""><a href="#email" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Soluciones Corresponsable</span></a></li>
					</ul>
					<div class="tab-content" data-sortable-id="index-3">
						<!--SOLUCIONES EN GENERAL-->
						<div class="tab-pane fade active in" id="latest-post">
							<div class="height-lg" data-scrollbar="true">
								<table class="table">
									<thead>
										<tr>
											<th>Solución</th>
											<th>Fuente</th>
											<th>Responsabilidad</th>
											<th>Acción</th>
										</tr>
									</thead>
									<tbody>
										@if( isset($solucionesDespliegue) )

											@foreach($solucionesDespliegue as $solucionD)
											<tr>
												<td class="text-justify">{{$solucionD-> verbo_solucion." ".$solucionD-> sujeto_solucion." ".$solucionD-> complemento_solucion}}</td>
												<td>
													@if($solucionD->tipo_fuente == 1)
														<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
													@else
														<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
													@endif
												</td>
												<td>
													@if($solucionD->tipo_actor == 1)
														<label class="label label-success">{{ "Responsable" }}</label>
													@else
														<label class="label label-primary">{{ "Corresponsable" }}</label>
													@endif
												</td>
												<td></td>
											</tr>	
											@endforeach

										@endif

										@if( isset($solucionesCCPT) )

											@foreach($solucionesCCPT as $solucionCC)
											<tr>
												<td class="text-justify">{{$solucionCC->nombre_pajustada}}</td>
												<td>
													@if($solucionCC->tipo_fuente == 1)
														<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
													@else
														<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
													@endif
												</td>
												<td>
													@if($solucionCC->tipo_actor == 1)
														<label class="label label-success">{{ "Responsable" }}</label>
													@else
														<label class="label label-primary">{{ "Corresponsable" }}</label>
													@endif
												</td>
												<td></td>
											</tr>	
											@endforeach

										@endif
										
									</tbody>
								</table>
							</div>
						</div>
						<!--FIN SOLUCIONES EN GENERAL-->

						<!--SOLUCIONES RESPONSABLE-->
						<div class="tab-pane fade" id="purchase">
							<div class="height-lg" data-scrollbar="true">
								<table class="table">
									<thead>
										<tr>
											<th>Solución</th>
											<th>Fuente</th>
											<th>Responsabilidad</th>
											<th>Acción</th>
										</tr>
									</thead>
									<tbody>
										@if( isset($solucionesDespliegue) )

											@foreach($solucionesDespliegue as $solucionD)
												@if($solucionD->tipo_actor == 1)
													<tr>
														<td class="text-justify">{{$solucionD-> verbo_solucion." ".$solucionD-> sujeto_solucion." ".$solucionD-> complemento_solucion}}</td>
														<td>
															@if($solucionD->tipo_fuente == 1)
																<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
															@else
																<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
															@endif
														</td>
														<td>
															<label class="label label-success">{{ "Responsable" }}</label>
														</td>
														<td>
															<a href="{{ route('verSolucion.despliegue',$solucionD->id) }}" class="btn btn-link btn-sm">Ver detalle..</a>
														</td>
													</tr>
												@endif	
											@endforeach

										@endif

										@if( isset($solucionesCCPT) )

											@foreach($solucionesCCPT as $solucionCC)
												@if($solucionCC->tipo_actor == 1)
													<tr>
														<td class="text-justify">{{$solucionCC->nombre_pajustada}}</td>
														<td>
															@if($solucionCC->tipo_fuente == 1)
																<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
															@else
																<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
															@endif
														</td>
														<td>
															<label class="label label-success">{{ "Responsable" }}</label>
														</td>
														<td>
															<a href="{{ route('verSolucion.consejo',$solucionCC->id) }}" class="btn btn-link btn-sm">Ver detalle..</a>
														</td>
													</tr>	
												@endif
											@endforeach

										@endif
										
									</tbody>
								</table>
							</div>
						</div>
						<!--FIN SOLUCIONES RESPONSABLE-->

						<!--SOLUCIONES CORRESPONSABLE-->
						<div class="tab-pane fade" id="email">
							<div class="height-lg" data-scrollbar="true">
								<table class="table"><thead>
										<tr>
											<th>Solución</th>
											<th>Fuente</th>
											<th>Responsabilidad</th>
											<th>Acción</th>
										</tr>
									</thead>
									<tbody>
										@if( isset($solucionesDespliegue) )

											@foreach($solucionesDespliegue as $solucionD)
												@if($solucionD->tipo_actor == 2)
													<tr>
														<td class="text-justify">{{$solucionD-> verbo_solucion." ".$solucionD-> sujeto_solucion." ".$solucionD-> complemento_solucion}}</td>
														<td>
															@if($solucionD->tipo_fuente == 1)
																<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
															@else
																<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
															@endif
														</td>
														<td>
															<label class="label label-primary">{{ "Corresponsable" }}</label>
														</td>
														<td></td>
													</tr>
												@endif	
											@endforeach

										@endif

										@if( isset($solucionesCCPT) )

											@foreach($solucionesCCPT as $solucionCC)
												@if($solucionCC->tipo_actor == 2)
													<tr>
														<td class="text-justify">{{$solucionCC->nombre_pajustada}}</td>
														<td>
															@if($solucionCC->tipo_fuente == 1)
																<label class="label label-warning">{{ "Mesas Competitivas" }}</label>
															@else
																<label class="label label-danger">{{ "Consejo Consultivo" }}</label>
															@endif
														</td>
														<td>
															<label class="label label-primary">{{ "Corresponsable" }}</label>
														</td>
														<td></td>
													</tr>	
												@endif
											@endforeach

										@endif
									
									
									</tbody>
								</table>
							</div>
						</div>
						<!--FIN SOLUCIONES CORRESPONSABLE-->

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
							<h4 class="panel-title">Notificaciones - Corresponsable</h4>
						</div>
						<div class="panel-body p-t-0">
							<table class="table table-valign-middle m-b-0">
								<thead>
									<tr>	
										<th>Source</th>
										<th>Total</th>
										<th>Trend</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><label class="label label-danger">Unique Visitor</label></td>
										<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
										<td><div id="sparkline-unique-visitor"></div></td>
									</tr>
									<tr>
										<td><label class="label label-warning">Bounce Rate</label></td>
										<td>28.2%</td>
										<td><div id="sparkline-bounce-rate"></div></td>
									</tr>
									<tr>
										<td><label class="label label-success">Total Page Views</label></td>
										<td>1,230,030</td>
										<td><div id="sparkline-total-page-views"></div></td>
									</tr>
									<tr>
										<td><label class="label label-primary">Avg Time On Site</label></td>
										<td>00:03:45</td>
										<td><div id="sparkline-avg-time-on-site"></div></td>
									</tr>
									<tr>
										<td><label class="label label-default">% New Visits</label></td>
										<td>40.5%</td>
										<td><div id="sparkline-new-visits"></div></td>
									</tr>
									<tr>
										<td><label class="label label-inverse">Return Visitors</label></td>
										<td>73.4%</td>
										<td><div id="sparkline-return-visitors"></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="panel panel-inverse" data-sortable-id="index-7">
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
							<div id="donut-chart" class="height-sm"></div>
						</div>
					</div>
					
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		@stop
		
        