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
							<h4 class="modal-title">Índice Único de Competitividad</h4>
					</div>

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<div class="col-md-7">
							<div class="panel bg-yellow">
								<div class="col-md-12">
				                	<ul class="nav nav-tabs">
										<li class="active"><a href="#default-tab-1" data-toggle="tab">Competitividad Global</a></li>
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
														<li class="active"><a href="#nav-pills-tab-Global" data-toggle="tab">Global</a></li>
														<li><a href="#nav-pills-tab-Desempeno" data-toggle="tab">Desempeño Económico</a></li>
														<li><a href="#nav-pills-tab-Empleo" data-toggle="tab">Empleo</a></li>
														<li><a href="#nav-pills-tab-GestionEmpresarial" data-toggle="tab">Gestión Empresarial</a></li>
														<li><a href="#nav-pills-tab-Infraestrucutura" data-toggle="tab">Infraestructura y Localización</a></li>
														<li><a href="#nav-pills-tab-Internacionalizacion" data-toggle="tab">Internacionalización y Apertura</a></li>
														<li><a href="#nav-pills-tab-Mercados" data-toggle="tab">Mercados Financieros</a></li>
														<li><a href="#nav-pills-tab-Urbanizacion" data-toggle="tab">Urbanización</a></li>
														<li><a href="#nav-pills-tab-Desarrollo" data-toggle="tab">Desarrollo Integral de las personas</a></li>
														<li><a href="#nav-pills-tab-GestionGobiernos" data-toggle="tab">Gestión, Gobiernos e Instituciones</a></li>
														<li><a href="#nav-pills-tab-RecursosNaturales" data-toggle="tab">Recursos Naturales y Ambientes</a></li>
														<li><a href="#nav-pills-tab-SeguridadJuridica" data-toggle="tab">Seguridad Jurídica</a></li>
														<li><a href="#nav-pills-tab-Habitantes" data-toggle="tab">Habitantes de Innovación, Ciencia y Tecnología</a></li>
													</ul>
												</div>
												
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-12 " id="nav-pills-tab-Global">
													    <div class="row">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block" src="{{ asset('img/competitividad/global.png') }}">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-12 " id="nav-pills-tab-Desempeno">
													    <div class="row">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block" src="{{ asset('img/competitividad/desempeno.png') }}">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-12 " id="nav-pills-tab-Empleo">
													    <div class="row">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block" src="{{ asset('img/competitividad/empleo.png') }}">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-12 " id="nav-pills-tab-GestionEmpresarial">
													    <div class="row">
													    	<div class="col-md-12">
													    		<img class="img-responsive center-block" src="{{ asset('img/competitividad/gestionEmpresarial.png') }}">
													    	</div> 	
													    </div>
													</div>
												</div>
													
											
											</div>
											<!--FIN COSTA-->
											
											<!-- SIERRA-->
											<div class="tab-pane fade ol-md-12" id="default-tab-2">
												<div class="col-md-11 col-md-offset-1">
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
													    <h3 class="m-t-10">Azuay</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Bolivar">
													    <h3 class="m-t-10">Bolivar</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Canar">
													    <h3 class="m-t-10">Cañar</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Carchi">
													    <h3 class="m-t-10">Carchi</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Chimborazo">
													    <h3 class="m-t-10">Chimborazo</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Cotopaxi">
													    <h3 class="m-t-10">Cotopaxi</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Imbabura">
													    <h3 class="m-t-10">Imbabura</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Loja">
													    <h3 class="m-t-10">Loja</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Pichincha">
													    <h3 class="m-t-10">Pichincha</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-SantoDomingo">
													    <h3 class="m-t-10">Santo Domingo</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Tungurahua">
													    <h3 class="m-t-10">Tungurahua</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
												</div>
											</div>
											<!-- FIN SIERRA-->

											<!-- ORIENTE-->
											<div class="tab-pane fade" id="default-tab-3">
												<div class="col-md-12 col-md-offset-1">
												<ul class="nav nav-pills">
														<li class="active"><a href="#nav-pills-tab-MoronaSantiago" data-toggle="tab">Morona Santiago</a></li>
														<li><a href="#nav-pills-tab-Napo" data-toggle="tab">Napo</a></li>
														<li><a href="#nav-pills-tab-Orellana" data-toggle="tab">Orellana</a></li>
														<li><a href="#nav-pills-tab-Pastaza" data-toggle="tab">Pastaza</a></li>
														<li><a href="#nav-pills-tab-Sucunbios" data-toggle="tab">Sucumbios</a></li>
														<li><a href="#nav-pills-tab-ZamoraChinchipe" data-toggle="tab">Zamora Chinchipe</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-Mç">
													    <h3 class="m-t-10">Morona Santiago</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Napo">
													    <h3 class="m-t-10">Napo</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Orellana">
													    <h3 class="m-t-10">Orelllana</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Pastaza">
													    <h3 class="m-t-10">Pastaza</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-Sucunbios">
													    <h3 class="m-t-10">Sucumbios</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
													<div class="tab-pane fade ol-md-10 col-md-offset-1" id="nav-pills-tab-ZamoraChinchipe">
													    <h3 class="m-t-10">Zamora Chinchipe</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="El Oro">
													    	</div> 	
													    </div>
													</div>
												</div>
											
											</div>
											<!--FIN ORIENTE-->


											<!-- INSULAR-->
											<div class="tab-pane fade" id="default-tab-4">
												<div class="col-md-12 col-md-offset-6">
													<ul class="nav nav-pills">
														<li class="active"><a href="#nav-pills-tab-Galapagos" data-toggle="tab">Galápagos</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active in ol-md-10 col-md-offset-1" id="nav-pills-tab-Galapagos">
													    <h3 class="m-t-10">Galápagos</h3>
													    <div class="row">
													    	<div class="col-md-6">
													    		<p class="text-justify">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																	Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
																	est diam sagittis orci, a ornare nisi quam elementum tortor. 
																	Proin interdum ante porta est convallis dapibus dictum in nibh. 
																	Aenean quis massa congue metus mollis fermentum eget et tellus. 
																	Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
																	nec eleifend orci eros id lectus.
																</p>	
													    	</div>
													    	<div class="col-md-6">
													    		<img class="img-responsive center-block"  src="http://www.cedatos.com.ec/images/mapa-elecciones2017.jpg" alt="Galápagos"s>
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
													   	<img class="img-responsive center-block" src="{{ asset('img/competitividad/metodologiaCalculo.jpg') }}">
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
											El &Iacute;ndice &uacute;nico de competitividad provincial est&aacute; compuesto por 64 indicadores agrupados en 1 pilares.
											<div class="col-md-12">
												<img class="img-responsive center-block" src="{{ asset('img/competitividad/tablaIndicadores.png') }}">
											</div>

										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #4
											</a>
										</h3>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #5
											</a>
										</h3>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #6
											</a>
										</h3>
									</div>
									<div id="collapseSix" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #7
											</a>
										</h3>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
