@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

<br><br><br><br>

		<!-- begin #about -->
		<div class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">

        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">
            <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="/busquedaAvanzada">Resultados de la B&uacute;squeda</a></li>
            <li class="active"><a href="#">Detalle de la propuesta</a></li>
            <label class='text-success pull-right'>
							<a href="/busquedaAvanzada" class="btn btn-link fit-m-t-1"><i class="fa fa-1x fa-search"></i> Nueva Consulta</a>
						</label>
          </ol>
        </div>

				<!-- begin row -->
				<div class="row">
					<!-- begin col-5 -->
					<div class="col-md-3">
						<div class="panel panel-inverse" data-sortable-id="index-6" style="border: #D7DBDD 1px solid; padding: 1%">



								<h5 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Eslabon de la cadena productiva</strong></h5>


									<p style="padding-left:15%">
										@if(isset($solucion))
											{{ $solucion->sipoc->nombre_sipoc }}
										@endif
									</p>

							<br>

								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Instrumentos Necesario</strong></h4>


								<p style="padding-left:15%">
										@if(isset($solucion))
											{{ $solucion->instrumento->nombre_instrumento }}
										@endif
								</p>
								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Clasificación Empresa</strong></h4>
								<p style="padding-left:15%">
									@if(isset($solucion))
											{{ $solucion->tipoEmpresa->nombre_tipo_empresa }}
										@endif
								</p>
								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Ámbito</strong></h4>
								<p style="padding-left:15%">
									@if(isset($solucion))
											{{ $solucion->ambit->nombre_ambit }}

										@endif
								</p >
								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Sector</strong></h4>
								<p style="padding-left:15%">
									@if(isset($solucion))
            								{{ $solucion->sector->nombre_sector }}
            							@endif
								</p >


						</div>
					</div>
					<!-- end col-5 -->
					<!-- inicio acciones -->
					<div class="col-md-9">



			        <div class="panel-group" id="accordion">
						<div class="panel panel-inverse overflow-hidden" >
							<div class="panel-heading" style="background-color:#214974">
								<h3 class="panel-title" style="color:white">
									 <strong>
										Informacion General
									</strong>
								</h3>
							</div>
							<div >
								<div class="panel-body">

									<div class="media-body"><br />
									<dl class="dl-horizontal">
											<label class='text-success'>Estado de Compromiso:</label> &nbsp;&nbsp;&nbsp;
											<span class="label label-warning f-s-13">
												@if(isset($solucion))
													{{ $solucion->estado->nombre_estado }}
												@endif
											</span>
										</dl>
									<label class='text-success'>

	                                	<i class="fa fa-clock-o fa-fw"></i>Creado:
	                                	@if(isset($solucion))
											{{ substr($solucion->created_at,0,10) }}
										@endif
	                                </label>
                                   	<div>
                                   		<table id="data-table" class="table table-striped table-bordered">
					                                    <thead>
					                                        <tr>
					                                            <th>Responsable</th>
					                                            <th>Corresponsable</th>

					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr class="odd gradeX">
					                                            <td>
					                    @if(isset($actoresSoluciones))
											@foreach($actoresSoluciones as $actorSolucion)
												@if($actorSolucion->tipo_actor == 1)
													{{ $actorSolucion->usuario-> name }}
												@endif
											@endforeach
										@endif
					                                            </td>
					                                            <td>
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
					                                            </td>

					                                        </tr>




					                                    </tbody>
					                                </table>
                                   	</div>


									</div>




								</div>
							</div>
						</div>
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading" style="background-color:#214974">
								<h3 class="panel-title" style="color:#ffffff">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Datos de la Mesa de Dialogo</strong>
									</a>
								</h3>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<label class='text-success'>
                                		<strong>Fuente</strong>
                                	</label>

									<p>
                          				<strong>Evento:</strong>
            							@if(isset($solucion))
            								{{ $solucion->evento->nombre_evento }}
            							@endif
            							<br /><strong>Provincia:</strong>
            							@if(isset($solucion))
            								{{ $solucion->provincia->nombre_provincia }}
            							@endif
            							<br /><strong>Líder de Mesa:</strong>
            							@if(isset($solucion))
            								{{ $solucion->lider_mesa_solucion }}
            							@endif
            							<br /><strong>Sistematizador de Mesa:</strong>
            							@if(isset($solucion))
            								{{ $solucion->sistematizador_solucion }}
            							@endif

                                   	</p>
								</div>
							</div>
						</div>
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading" style="background-color:#214974" >
								<h3 class="panel-title" style="color:#17202A">
									<h3 class="panel-title" style="color:#ffffff">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Solución Propuesta</strong>
									</a>
								</h3>
							</div>
							<div id="collapse3" class="panel-collapse collapse in">
								<div class="panel-body">
									<label class='text-success'>
                                		<i class="fa fa-cheked-o fa-fw"></i><strong>Solución</strong>
                                	</label>
									<blockquote>
										  	<p><h5>
										  		@if(isset($solucion))
													{{ $solucion->verbo_solucion." ".$solucion->sujeto_solucion." ".$solucion->complemento_solucion }}
												@endif
										  	</h5>
                                   	</blockquote>
								</div>
							</div>
						</div>
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading" style="background-color:#214974" >
								<h3 class="panel-title" style="color:#ffffff">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Problematica</strong>
									</a>
								</h3>
							</div>
							<div id="collapseFour" class="panel-collapse collapse in">
								<div class="panel-body">
									<label class='text-success'>
                                		<i class="fa fa-cheked-o fa-fw"></i><strong>Problematica</strong>
                                	</label>
									<blockquote>
										  	<p><h5>
										  		@if(isset($solucion))
													{{ $solucion->problema_solucion }}
												@endif
										  	</h5>
                                   	</blockquote>
								</div>
							</div>
						</div>


						<div class="panel panel-inverse  overflow-hidden">
							<div class="panel-heading" style="background-color:#214974" >
								<h3 class="panel-title" style="color:#ffffff">

									 <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Actividades Registradas</strong>
										</a>

								</h3>
							</div>
							<div id="collapseFive" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="media-body">
									<br>


									@if(isset($actividades) &&  count($actividades) > 0)
									<label class='text-success'><b>Actividades Resgistradas: </b></label>{{ count($actividades) }}
									<span class="pull-right" style="font-size: 12px">Ordenado desde la m&aacute;s reciente</span>
									<hr>
									<ul class="media-list media-list-with-divider">
										@foreach($actividades as $actividad)

											<li class="media media-lg">
												<div class="media-body">
													<b>Fecha de Inicio: </b> {{ $actividad-> created_at}}<br>
													<b>Ejecutor: </b> {{ $actividad-> usuario-> name}}<br>
													<h5 class="media-heading"></h5>
													{{ $actividad -> comentario}}
													<br>

													<!-- <a class="btn btn-primary btn-xs" ><i class="fa fa-download"></i></a>
	                                            	<a href="#modal-add-acc" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-edit"></i></a> -->

												</div>

											</li>

											<!--ARCHIVOS-->
											@if( count( $actividad-> archivo) > 0)
											<hr>
											<em> Archivos: </em> <br>
												<ul>
													@foreach($actividad-> archivo as $file)
													<li>
														<!-- <a target="_blank" href="'../../../../../../storage/{{ $file-> nombre_archivo }} "> -->
														<a target="_blank" href="{{ route('descargarArchivo',$file-> nombre_archivo) }} ">
															<?php
																$pos = strpos($file-> nombre_archivo, "_-_");
																$nombre_archivo = substr($file-> nombre_archivo, $pos+3, strlen($file-> nombre_archivo)); // devuelve "d"
															?>

															{{$nombre_archivo}}
														</a>
													</li>
													@endforeach
												</ul>
											@endif

											<!--FIN ARCHIVOS-->

										@endforeach
									</ul>
									@else
										No se encontraron actividades registradas.
									@endif

								</div>
								</div>
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
  <script>
function goBack() {
    window.history.back();
}
</script>

@endsection