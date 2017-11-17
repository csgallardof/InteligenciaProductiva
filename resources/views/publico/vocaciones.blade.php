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
							<h4 class="modal-title" style="display: inline;">Vocaciones Provinciales</h4>
              <a class="p-l-20" target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/vocaciones_productivas_todas.pdf') }}"><i class="fa fa-2x fa-file-pdf-o"></i>&nbsp;Descargar Archivo Consolidado</a>
					</div>

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-12">
							<div class="panel bg-yellow">

								<div class="col-md-12">
				                	<ul class="nav nav-tabs">
										<li class="active"><a href="#default-tab-1" data-toggle="tab">Costa</a></li>
										<li class=""><a href="#default-tab-2" data-toggle="tab">Sierra</a></li>
										<li class=""><a href="#default-tab-3" data-toggle="tab">Oriente</a></li>
										<li class=""><a href="#default-tab-4" data-toggle="tab">Insular</a></li>
									</ul>
									<div class="col-md-12">
										<div class="tab-content">
											<!-- COSTA-->
											<div class="tab-pane fade active in " id="default-tab-1">
												<div class="col-md-12">
													<ul class="nav nav-pills center-block text-center">
														<li class="active"><a href="#nav-pills-tab-ElOro" data-toggle="tab">El Oro</a></li>
														<li><a href="#nav-pills-tab-Esmeraldas" data-toggle="tab">Esmeraldas</a></li>
														<li><a href="#nav-pills-tab-Guayas" data-toggle="tab">Guayas</a></li>
														<li><a href="#nav-pills-tab-LosRios" data-toggle="tab">Los Ríos</a></li>
														<li><a href="#nav-pills-tab-Manabi" data-toggle="tab">Manabí</a></li>
														<li><a href="#nav-pills-tab-SantaElena" data-toggle="tab">Santa Elena</a></li>
													</ul>
												</div>

												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-ElOro">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;El Oro</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_eloro.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
													    <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_eloro.jpg') }}" alt="El Oro">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Esmeraldas">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Esmeraldas</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_esmeraldas.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_esmeraldas.jpg') }}" alt="Esmeraldas">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Guayas">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Guayas</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_guayas.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_guayas.jpg') }}" alt="Guayas">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-LosRios">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Los Ríos</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_losrios.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_losrios.jpg') }}" alt="Los Rios">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Manabi">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Manabí</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_manabi.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_manabi.jpg') }}" alt="Manabi">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-SantaElena">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Santa Elena</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_santaelena.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_santaelena.jpg') }}" alt="Santa Elena">
													    	</div>
													    </div>
													</div>
												</div>

											</div>
											<!--FIN COSTA-->

											<!-- SIERRA-->
											<div class="tab-pane fade" id="default-tab-2">
												<div class="col-md-12">
													<ul class="nav nav-pills">
														<li class="active"><a href="#nav-pills-tab-Azuay" data-toggle="tab">Azuay</a></li>
														<li><a href="#nav-pills-tab-Bolivar" data-toggle="tab">Bolivar</a></li>
														<li><a href="#nav-pills-tab-Canar" data-toggle="tab">Cañar</a></li>
														<li><a href="#nav-pills-tab-Carchi" data-toggle="tab">Carchi</a></li>
														<li><a href="#nav-pills-tab-Cotopaxi" data-toggle="tab">Cotopaxi</a></li>
														<li><a href="#nav-pills-tab-Chimborazo" data-toggle="tab">Chimborazo</a></li>
														<li><a href="#nav-pills-tab-Imbabura" data-toggle="tab">Imbabura</a></li>
														<li><a href="#nav-pills-tab-Loja" data-toggle="tab">Loja</a></li>
														<li><a href="#nav-pills-tab-Pichincha" data-toggle="tab">Pichincha</a></li>
														<li><a href="#nav-pills-tab-SantoDomingo" data-toggle="tab">Santo Domingo</a></li>
														<li><a href="#nav-pills-tab-Tungurahua" data-toggle="tab">Tungurahua</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-Azuay">
                              <!-- Inicio Header Provincia -->
                              <div class="m-t-10 row">
													    	<div class="m-t-15 col-md-6">
                                  <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Azuay</strong></i>
													    	</div>
                                <div class="col-md-6">
                                  <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_azuay.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
													    	</div>
													    </div>
                              <hr />
                              <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_azuay.jpg') }}" alt="Azuay">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Bolivar">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Bolivar</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_bolivar.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_bolivar.jpg') }}" alt="Bolivar">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Canar">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Cañar</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_canar.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_canar.jpg') }}" alt="Canar">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Carchi">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Carchi</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_carchi.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_carchi.jpg') }}" alt="Carchi">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Chimborazo">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Chimborazo</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_chimborazo.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_chimborazo.jpg') }}" alt="Chimborazo">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Cotopaxi">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Cotopaxi</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_cotopaxi.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_cotopaxi.jpg') }}" alt="Cotopaxi">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Imbabura">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Imbabura</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_imbabura.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_imbabura.jpg') }}" alt="Imbabura">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Loja">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Loja</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_loja.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_loja.jpg') }}" alt="Loja">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Pichincha">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Pichincha</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_pichincha.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_pichincha.jpg') }}" alt="Pichincha">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-SantoDomingo">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Santo Domingo</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_santodomingo.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_santodomingo.jpg') }}" alt="Santo Domingo">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Tungurahua">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Tungurahua</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_tungurahua.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_tungurahua.jpg') }}" alt="Tungurahua">
													    	</div>
													    </div>
													</div>
												</div>
											</div>
											<!-- FIN SIERRA-->

											<!-- ORIENTE-->
											<div class="tab-pane fade" id="default-tab-3">
												<div class="col-md-12">
												<ul class="nav nav-pills">
														<li class="active"><a href="#nav-pills-tab-MoronaSantiago" data-toggle="tab">Morona Santiago</a></li>
														<li><a href="#nav-pills-tab-Napo" data-toggle="tab">Napo</a></li>
														<li><a href="#nav-pills-tab-Orellana" data-toggle="tab">Orellana</a></li>
														<li><a href="#nav-pills-tab-Pastaza" data-toggle="tab">Pastaza</a></li>
														<li><a href="#nav-pills-tab-Sucumbios" data-toggle="tab">Sucumbios</a></li>
														<li><a href="#nav-pills-tab-ZamoraChinchipe" data-toggle="tab">Zamora Chinchipe</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-MoronaSantiago">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Morona Santiago</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_moronasantiago.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_moronasantiago.jpg') }}" alt="Morona Santiago">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Napo">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Napo</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_napo.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_napo.jpg') }}" alt="Napo">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Orellana">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Orellana</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_orellana.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_orellana.jpg') }}" alt="Orellana">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Pastaza">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Pastaza</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_pastaza.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_pastaza.jpg') }}" alt="Pastaza">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Sucumbios">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Sucumbios</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_sucumbios.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_sucumbios.jpg') }}" alt="Sucumbios">
													    	</div>
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-ZamoraChinchipe">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Zamora Chinchipe</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_zamorachinchipe.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_zamorachinchipe.jpg') }}" alt="Zamora Chinchipe">
													    	</div>
													    </div>
													</div>
												</div>

											</div>
											<!--FIN ORIENTE-->


											<!-- INSULAR-->
											<div class="tab-pane fade" id="default-tab-4">
												<div class="col-md-12">
													<ul class="nav nav-pills">
														<li class="active"><a href="#nav-pills-tab-Galapagos" data-toggle="tab">Galápagos</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-Galapagos">
                            <!-- Inicio Header Provincia -->
                            <div class="m-t-10 row">
                              <div class="m-t-15 col-md-6">
                                <i class="fa fa-2x fa-map-marker"><strong class="f-s-19">&nbsp;&nbsp;Galápagos</strong></i>
                              </div>
                              <div class="col-md-6">
                                <div class="pull-right"><a target="_blank" href="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_pdf/pdf_por_provincia/vocaciones_productivas_galapagos.pdf') }}"><i class="fa fa-3x fa-file-pdf-o"></i>&nbsp;Descargar Archivo de la Provincia</a></div>
                              </div>
                            </div>
                            <hr />
                            <!-- Fin Header Provincia -->
                              <div class="row fit-m-t-4">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block"  src="{{ asset('imagenes/vocaciones_productivas_ecuador/vocaciones_productivas_galapagos.jpg') }}" alt="Galapagos">
													    	</div>
													    </div>
													</div>

												</div>

											</div>
											<!--FIN INSULAR-->

										</div>
									</div>


				                </div>
							</div>
							<!-- begin page-header -->
						</div>
							<!-- end col-4 -->
					</div>
						<!-- end row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-12">
							<div class="panel bg-yellow">

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
