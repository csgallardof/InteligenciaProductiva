<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Inteligencia Productiva| inicio</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/theme/default.css') }}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="{{ url('institucion/home') }}" class="navbar-brand">
								<img src="{{ asset('imagenes/logo_mipro_white.png') }}" class="center-block img-responsive" alt="Cinque Terre" width="130px" height="46px">
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right" style="margin-right: 30px">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" style="color: #FFF" data-toggle="dropdown">
							<span class="hidden-xs">@auth {{ Auth::user()->name }} @endauth</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Editar Perfil</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span>Mensajes</a></li>
							<li><a href="javascript:;">Ajustes</a></li>
							<li class="divider"></li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        	                		Salir
                        		</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							
							<div class="image">
								<a href="javascript:;"><i class="fa fa-user" aria-hidden="true" style="font-size: 40px" ></i></a>
							</div>
							@auth {{ Auth::user()->name }} @endauth
							<small>Hola!</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<!-- <ul class="nav">
					<li class="nav-header">Navegaci&oacute;n</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-laptop"></i>
						    <span>Panel de Administraci&oacute;n</span>
					    </a>
						<ul class="sub-menu">
						    <li class="active"><a href="index.html">Dashboard v1</a></li>
						    <li><a href="index_v2.html">Dashboard v2</a></li>
						</ul>
					</li>
					
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
				</ul> -->
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->


		
		@yield('content')
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('plugins/gritter/js/jquery.gritter.js') }}"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.min.js') }}"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.time.min.js') }}"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.resize.min.js') }}"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.pie.min.js') }}"></script>
	<script src="{{ asset('plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>
	<script src="{{ asset('js/apps.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>
</html>