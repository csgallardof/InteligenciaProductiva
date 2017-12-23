<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
		<!-- begin container -->
		<div class="container">
				<!-- begin navbar-header -->
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>

						<a href="{{ url('/') }}" class="navbar-brand">
								<img src="{{ asset('imagenes/logo_mipro.png') }}" class="center-block img-responsive" alt="Cinque Terre" width="130px" height="46px">
						</a>

				</div>
				<!-- end navbar-header -->
				<!-- begin navbar-collapse -->
				<div class="collapse navbar-collapse" id="header-navbar">
						<ul class="nav navbar-nav navbar-right" style="vertical-align: middle;">
								<!-- <li><a href="#about" data-click="scroll-to-target">AGENDA DE DESARROLLO PRODUCTIVO</a></li>
								<li class="active dropdown">
										<a href="#home" data-click="scroll-to-target" data-target="#" data-toggle="dropdown">REPORTE<b class="caret"></b></a>
										<ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
												<li><a href="reportegeneralccpt">Propuestas Obtenidas</a></li>

										</ul>
								</li> -->
								<li><a href="{{ url('/') }}" data-toggle="modal">Inicio</a></li>
								<li><a href="/cifras" data-toggle="modal">Cifras</a></li>
								<li><a href="/indice" data-toggle="modal">&Iacute;ndice Único de Competitividad</a></li>
								<li><a href="/vocaciones" data-toggle="modal">Vocaciones Productivas</a></li>

								<!-- <li class="down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									Propuestas <span class="caret"></span></a>
			                        <ul class="dropdown-menu">
			                        	<li><a href="/consejoconsultivo">Consejo Consultivo</a></li>
			                            <li>
			                        		<a class="dropdown-item" href="/despliegueterritorial">Despliegue Territorial</a>
		                       	 		</li>
		                        	</ul>
		                        </li> -->
								<li><a href="http://servicios.industrias.gob.ec/biblioteca/" data-toggle="modal">Biblioteca</a></li>
								<li><a href="/inversiones" data-toggle="modal">Inversiones</a></li>
								<li><a href="{{ route('login') }}" data-toggle="modal" style="color: #f26f22"><b>Ingresar</b></a></li>
						</ul>
				</div>
				<!-- end navbar-collapse -->

		</div>
		<!-- end container -->
</div>
<!-- end #header -->
