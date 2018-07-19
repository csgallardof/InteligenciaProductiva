<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="header_main_properties container-fluid">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<!-- <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a> -->
			<a href="{{ url('/') }}" class="navbar-brand">
					<img src="{{ asset('imagenes/logo_mipro_white.png') }}" class="center-block img-responsive" alt="" width="130px" height="46px">
			</a>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- begin navbar-collapse -->
						<div class="collapse navbar-collapse pull-left" id="top-navbar">
								<ul class="nav navbar-nav">
										<li>
												<a href="/">
														Inicio
												</a>
										</li>
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Reportes<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														<li><a href="/reporte-home/lista-propuesta/1/1">Propuestas en Análisis</a></li>
														<li><a href="/reporte-home/lista-propuesta/3/1">Propuestas en Desarrollo</a></li>
														<li><a href="/reporte-home/lista-propuesta/4/1">Propuestas en Finalizado</a></li>
														<li><a href="/dialogo-nacional-estadisticas">Estadisticas</a></li>
												</ul>
										</li>
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Información para el Inversionista<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														<li><a href="/estructura-promedio-costos-gastos-empresas">Costos y Gastos Industriales</a></li>
														<li><a href="/indice">&Iacute;ndice Único de Competitividad</a></li>
														<li><a href="/zonas-especiales-de-desarrollo-economico">Zonas Especiales de Desarrollo Económico</a></li>
														<li><a href="/asociaciones-publico-privadas">Alianzas Público Privadas</a></li>
														<li><a href="/cifras">Cifras Económicas</a></li>
														<li><a href="/vocaciones">Vocaciones Productivas</a></li>
														<li><a href="/por-que-invertir-en-ecuador">Incentivos</a></li>
												</ul>
										</li>
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Herramientas<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														<li><a href="http://servicios.industrias.gob.ec/site_rue/rue.html">Registro Único de Empresas</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_rum/rum.html">Registro Único de MiPymes</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_rua/rua.html">Registro Único Artesanal</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_rpn/rpn.html">Registro de Producción Nacional</a></li>
														<li><a href="http://servicios.industrias.gob.ec/cdec">Centro de Desarrollo Empresarial Ciudadano</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_rop/rop.html">Gestión de Operadores y Productos Reglamentados</a></li>
														<li><a href="http://capacitacion.industrias.gob.ec/">Formación y Capacitación para el Sector Industrial</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_sircar/sircar.html">Sistema de Recicladores, Centros de Acopio, Embotelladores e Importadores</a></li>
														<li><a href="https://ecuapass.aduana.gob.ec/">Sistema de Importadores y Exportadores</a></li>
														<li><a href="http://servicios.industrias.gob.ec/siipro">Sistema de Información Industrial y Productiva</a></li>
														<li><a href="http://servicios.industrias.gob.ec/tramites/">Ficha de Trámites Institucionales</a></li>
														<li><a href="http://servicios.industrias.gob.ec/site_encuesta/encuesta.html">Encuestas en Línea</a></li>
														<li><a href="http://www.exportafacil.gob.ec/">Exporta Facil</a></li>
														<li><a href="http://encuestas.administracionpublica.gob.ec/index.php/887844/lang-es#">Encuesta de Simplificación de Trámites Productivos</a></li>
												</ul>
										</li>
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Biblioteca<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="http://servicios.industrias.gob.ec/biblioteca/" target="_blank">Consultorias & Estudios</a></li>
													<li><a href="/foro-de-la-produccion-impulso-innovacion">I Foro de la Producción e Impulso a la Innovación</a></li>
													<li><a href="http://servicios.industrias.gob.ec/site_foro_empresarial/foro_empresarial.html">I Foro Empresarial Andino 2018</a></li>
												</ul>
										</li>
								</ul>
						</div>

		<div class="collapse navbar-collapse pull-right" id="top-navbar">
				<ul class="nav navbar-nav">
					<li>
							<a href="/login">
									<i class="fa fa-user fa-fw"></i> Ingresar
							</a>
					</li>
				</ul>
		</div>
	</div>
</div>
<!-- end #header -->

<!-- ////// -->
<!-- SIDEBAR -->
<!-- ////// -->

<div id="sidebar" class="sidebar toggled">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="info">
					Contenido
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li><a href="/">Inicio</a></li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-laptop"></i>
						<span>Reportes</span>
					</a>
				<ul class="sub-menu">
					<li><a href="/reporte-home/lista-propuesta/1/1">Propuestas en Análisis</a></li>
					<li><a href="/reporte-home/lista-propuesta/3/1">Propuestas en Desarrollo</a></li>
					<li><a href="/reporte-home/lista-propuesta/4/1">Propuestas en Finalizado</a></li>
					<li><a href="/dialogo-nacional-estadisticas">Estadisticas</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-laptop"></i>
						<span>Información para el Inversionista</span>
					</a>
				<ul class="sub-menu">
					<li><a href="/estructura-promedio-costos-gastos-empresas">Costos y Gastos Industriales</a></li>
					<li><a href="/indice">&Iacute;ndice Único de Competitividad</a></li>
					<li><a href="/zonas-especiales-de-desarrollo-economico">Zonas Especiales de Desarrollo Económico</a></li>
					<li><a href="/asociaciones-publico-privadas">Alianzas Público Privadas</a></li>
					<li><a href="/cifras">Cifras Económicas</a></li>
					<li><a href="/vocaciones">Vocaciones Productivas</a></li>
					<li><a href="/por-que-invertir-en-ecuador">Incentivos</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-laptop"></i>
						<span>Herramientas</span>
					</a>
				<ul class="sub-menu">
					<li><a href="http://servicios.industrias.gob.ec/site_rue/rue.html">Registro Único de Empresas</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rum/rum.html">Registro Único de MiPymes</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rua/rua.html">Registro Único Artesanal</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rpn/rpn.html">Registro de Producción Nacional</a></li>
					<li><a href="http://servicios.industrias.gob.ec/cdec">Centro de Desarrollo Empresarial Ciudadano</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rop/rop.html">Gestión de Operadores y Productos Reglamentados</a></li>
					<li><a href="http://capacitacion.industrias.gob.ec/">Formación y Capacitación para el Sector Industrial</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_sircar/sircar.html">Sistema de Recicladores, Centros de Acopio, Embotelladores e Importadores</a></li>
					<li><a href="https://ecuapass.aduana.gob.ec/">Sistema de Importadores y Exportadores</a></li>
					<li><a href="http://servicios.industrias.gob.ec/siipro">Sistema de Información Industrial y Productiva</a></li>
					<li><a href="http://servicios.industrias.gob.ec/tramites/">Ficha de Trámites Institucionales</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_encuesta/encuesta.html">Encuestas en Línea</a></li>
					<li><a href="http://www.exportafacil.gob.ec/">Exporta Facil</a></li>
					<li><a href="http://encuestas.administracionpublica.gob.ec/index.php/887844/lang-es#">Encuesta de Simplificación de Trámites Productivos</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-laptop"></i>
						<span>Biblioteca</span>
					</a>
				<ul class="sub-menu">
					<li><a href="http://servicios.industrias.gob.ec/biblioteca/" target="_blank">Consultorias & Estudios</a></li>
					<li><a href="/foro-de-la-produccion-impulso-innovacion">I Foro de la Producción e Impulso a la Innovación</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_foro_empresarial/foro_empresarial.html">I Foro Empresarial Andino 2018</a></li>
				</ul>
			</li>

		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
