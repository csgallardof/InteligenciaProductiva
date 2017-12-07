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
						<ul class="nav navbar-nav navbar-right">
								<!-- <li><a href="#about" data-click="scroll-to-target">AGENDA DE DESARROLLO PRODUCTIVO</a></li>
								<li class="active dropdown">
										<a href="#home" data-click="scroll-to-target" data-target="#" data-toggle="dropdown">REPORTE<b class="caret"></b></a>
										<ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
												<li><a href="reportegeneralccpt">Propuestas Obtenidas</a></li>

										</ul>
								</li> -->
								<!-- Authentication Links -->
	                        @if (Auth::guest())
	                            {{-- <li><a href="{{ route('login') }}">Ingresar</a></li> --}}
	                            {{-- <li><a href="{{ route('register') }}">Registrarse</a></li> --}}
	                            <li><a href="{{ route('sipocs.index') }}">Sipoc</a></li>
	                            <li><a href="{{ route('thematics.index') }}">Eje temático</a></li>
	                            <li><a href="{{ route('sectors.index') }}">Sectores</a></li>
	                            <li><a href="{{ route('vsectors.index') }}">Variable Sectorial</a></li>
	                            <li><a href="{{ route('ambits.index') }}">&Aacute;mbito</a></li>
	                            <li><a href="{{ route('pajustadas.index') }}">Palabra Ajustada</a></li>
	                            <li><a href="{{ route('soluciones.index') }}">Soluciones</a></li>
	                            <li><a href="{{ route('provincias.index') }}">Provincia</a></li>
	                            <li><a href="{{ route('instrumentos.index') }}">Instrumentos</a></li>
	                            <li><a href="{{ route('participantes.index') }}">Participantes</a></li>
	                            <li><a href="{{ route('ccpt.index') }}">Consejo</a></li>
	                            <li><a href="{{ route('instituciones.index') }}">Instituciones</a></li>
	                            <li><a href="{{ url('actores') }}">Responsables</a></li>
	                            

	                        @else
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                    {{ Auth::user()->name }} <span class="caret"></span>
	                                </a>

	                                <ul class="dropdown-menu" role="menu">
	                                    <li>
	                                        <a href="{{ route('logout') }}"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                            Salir
	                                        </a>

	                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                            {{ csrf_field() }}
	                                        </form>
	                                    </li>
	                                </ul>
	                            </li>
	                        @endif
						</ul>
				</div>
				<!-- end navbar-collapse -->

		</div>
		<!-- end container -->
</div>
<!-- end #header -->
