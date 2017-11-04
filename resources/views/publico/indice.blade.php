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
							<li><a href="{{ url('app') }}">Home</a></li>
							<li class="active">&Iacute;ndice &Uacute;nico de Competitividad Provincial</li>
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
							<h4 class="modal-title">Índice Único de Competitividad Provincial</h4>
					</div>

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-7">
							<div class="panel bg-yellow">
								<div class="col-md-12">
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Pilares
										<span class="caret"></span></button>
										<ul class="dropdown-menu">
										    <li><a href="#" data-toggle="modal" data-target="#modal1">Desarrollo Integral de las personas</a></li>
											<li><a href="#" data-toggle="modal" data-target="#modal2">Desempe&ntilde;o Econ&oacute;mico</a></li>			
										    <li><a href="#" data-toggle="modal" data-target="#modal3">Empleo</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal4">Gesti&oacute;n Empresarial</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal5">Gesti&oacute;n, Gobiernos e Instituciones</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal6">Habitantes de Innovaci&oacute;n, Ciencia y Tecnolog&iacute;a</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal7">Infraestructura y Localizaci&oacute;n</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal8">Internacionalizaci&oacute;n y Apertura</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal9">Mercados Financieros</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal10">Recursos Naturales y Ambientes</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal11">Seguridad Jur&iacute;dica</a></li>
									    	<li><a href="#" data-toggle="modal" data-target="#modal12">Urbanizaci&oacute;n</a></li>									    	
										</ul>
									</div>
					                	
				                </div>
							</div>
							<!-- begin page-header -->
							<br>
							<h3>Competitividad Global</h3><br>
							<div class="col-md-12">
					    		<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/global.png') }}" alt="">
					    	</div> 	
						</div>
						<br><br>	

						<!-- METODOLOGIA-->
						<div class="col-md-5">
							<h4 class="modal-title">Metodología</h4>
							<br><br>
							<div class="panel-group" id="accordion">
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											    <i class="fa fa-plus-circle pull-right"></i> 
												&Iacute;ndice de Competitividad.
											</a>
										</h3>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<ul>
												<li class="text-justify">Michael Porter extendi&oacute; la idea de que el grado en que una regi&oacute;n es competitiva var&iacute;a de acuerdo con la configuraci&oacute;n de un conjunto propio de factores internos y externos.
												</li>
												<li class="text-justify">
													El Foro Econ&oacute;mico Mundial define la competitividad como “el conjunto de instituciones, pol&iacute;ticas y factores que determinan el nivel de productividad de un pa&iacute;s”.
												</li>
												<li class="text-justify">
													Un &iacute;ndice de competitividad permite sintetizar el estado y de las ventajas competitivas de empresas o regiones que permitan generar y evaluar las pol&iacute;ticas p&uacute;blicas en el &aacute;mbito econ&oacute;mico, productivo y social.

												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Metodolog&iacute;a de c&aacute;lculo
											</a>
										</h3>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li class="text-justify">Se generan un total de 64 indicadores agrupados en 12 pilares de an&aacute;lisis.
												</li>
												<li class="text-justify">
													Para hacer comparable cada indicador fue necesario hacer una transformaci&oacute;n en una escala de 1 a 100.
												</li>
												<li class="text-justify">
													Los indicadores pueden apoyan u obstaculizar la competitividad de una provincia por lo que es necesario realizar ajustes en la estandarizaci&oacute;n de los indicadores:
													<br><br>
													<div class="col-md-12">
													   	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/metodologiaCalculo.jpg') }}">
													</div> 
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Composici&oacute;n del &iacute;ndice &uacute;nico de competitividad provincial
											</a>
										</h3>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											El &Iacute;ndice &uacute;nico de competitividad provincial est&aacute; compuesto por 64 indicadores agrupados en 12 pilares.
											<br><br>
											<div class="col-md-12">
												<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/tablaIndicadores.png') }}">
											
                                            </div>


										</div>
									</div>
								</div>
								
							</div>
					    </div>
						<!-- FIN DE METODOLOGIA-->
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

<!-- VENTANA MODAL PARA  DE CONCURSO -->

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Desarrollo Integral de las personas</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/desarrollo.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Desempe&ntilde;o Econ&oacute;mico</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/desempeno.png') }}" alt="">
                	<br>
                </div>          
            </div>s
        </div>
    </div>
     <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Empleo</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/empleo.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Gesti&oacute;n Empresarial</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/gestionEmpresarial.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Gesti&oacute;n, Gobiernos e Instituciones</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/gestionGobiernos.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>

     <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Habitantes de Innovaci&oacute;n, Ciencia y Tecnolog&iacute;a</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/habitantes.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>

     <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Infraestructura y Localizaci&oacute;n</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/infraestructura.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Internacionalizaci&oacute;n y Apertura</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/internacionalizacion.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Mercados Financieros</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/mercados.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Recursos Naturales y Ambientes</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/recursosNaturales.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br> 
                    <h4>Seguridad Jur&iacute;dica</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/seguridad.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<br>   
                    <h4>Urbanizaci&oacute;n</h4>
                </div>
                <div class="modal-body">
                	<img class="img-responsive center-block" src="{{ asset('imagenes/competitividad/urbanizacion.png') }}" alt="">
                	<br>
                </div>          
            </div>
        </div>
    </div>
     
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
