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
								<img src="{{ asset('imagenes/logo_mipro_white.png') }}" class="center-block img-responsive" alt="Cinque Terre" width="130px" height="46px">
						</a>

				</div>
				<!-- end navbar-header -->

				<div class="collapse navbar-collapse navbar-right" id="header-navbar">
                    <ul class="nav navbar-nav  navbar-right">
                        
                        <li>
                            <a href="{{ route('login') }}">
                                <i></i> Inicio
                            </a>
                        </li>
                        <li>
                            <a href="http://servicios.industrias.gob.ec/biblioteca/" target="_blank">
                                <i></i> Biblioteca
                            </a>
                        </li>
                        <li>
                            <a href="/inversiones">
                                <i></i> Inversiones
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i></i>Herramientas<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/cifras">Cifras</a></li>
                                <li><a href="/indice">&Iacute;ndice Único de Competitividad</a></li>
                                <li><a href="/vocaciones">Vocaciones Productivas</a></li>
                                
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i> Ingresar
                            </a>
                        </li>
                    </ul>
                </div>
				<!-- end navbar-collapse -->
				

		</div>
		<!-- end container -->
</div>
<!-- end #header -->
