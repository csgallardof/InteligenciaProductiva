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
			<div align="center">
				<h1>Proyectos de Alianzas Público Privadas</h1>
				<br><br>
			</div>
			<!-- end page-header -->
			 <!-- begin panel -->
					<div class="row">
						<div class="col-md-2"> </div>
						<div class="col-md-8">
                    <div class="panel panel-default panel-with-tabs " data-sortable-id="ui-unlimited-tabs-2">
                        <div class="panel-heading p-0">
                            <div class="panel-heading-btn m-r-0 m-t-0">
                                
                            </div>
                            <!-- begin nav-tabs -->
                            <div class="tab-overflow">
                                <ul class="nav nav-tabs col-md-12">
                                    <li class="prev-button"><a href="javascript:;" data-click="prev-tab" class="text-inverse"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class=""><a href="#nav-tab2-1" data-toggle="tab">¿Qué son APP?</a></li>
                                    <li class=""><a href="#nav-tab2-2" data-toggle="tab">Normativa Vigente</a></li>
                                    <li class=""><a href="#nav-tab2-3" data-toggle="tab">Beneficios</a></li>
                                    <li class=""><a href="#nav-tab2-4" data-toggle="tab">Incentivos</a></li>
                                    <li class=""><a href="#nav-tab2-5" data-toggle="tab">Tipos de Proyectos</a></li>
                                    <li class=""><a href="#nav-tab2-6" data-toggle="tab">Comité Constitucional</a></li>
                                    
                                    <li class="next-button"><a href="javascript:;" data-click="next-tab" class="text-inverse"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="nav-tab2-1">
                                <h3 class="m-t-10"><strong>¿Qué son Asociaciones Público Privadas?</strong></h3>
                                <p align="justify">
					              Las APP comprenden un esquema jurídico-financiero, acordado entre una institución pública y una entidad privada para la provisión de bienes, obras o servicios propios del Gobierno Central y los Gobiernos Autónomos Descentralizados. <br> <br>
					              Los proyectos públicos aprobados se beneficiarán de los incentivos propuestos en la Ley Orgánica de Incentivos para las Alianzas Público Privadas, de conformidad con los acuerdos establecidos por las partes.
					            </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-2">
                                <h3 class="m-t-10"><strong>Normativa Vigente</strong></h3>
                               <p align="justify">
					              <strong>El régimen de Asociaciones Público Privadas del Ecuador está establecido por los siguientes cuerpos normativos:</strong><br>
					              <ul>
					              	<li>Constitución (Art. 316).</li>
					              	<li>Código de la Producción (Art. 96 - 100).</li>
					              	<li>Ley Orgánica de Incentivos para las Alianzas Público Privadas APP (2015).</li>
					              	<li>Reglamento de la Ley APP (2016).</li>
					              	<li><strong><u>Decreto Ejecutivo 187</u></strong> Delegación a MIPRO para presidir el Comité Interinstitucional de Asociaciones Publico-Privadas en el ámbito de sus competencias (2017).</li>
					              	<li><strong><u>Decreto Ejecutivo 103 y 186</u></strong>  Delegación a MTOP para presidir el Comité Interinstitucional de Asociaciones Publico-Privadas en el ámbito de sus competencias (2017).</li>
					              </ul>
					              <strong>Normativa Secundaria:</strong><br>
					              <ul>
					              	<li>Reglamento de Funcionamiento del Comité Interinstitucional de Asociaciones Público Privadas (2016).</li>
					              	<li>Resolución General para la Aprobación de Proyectos bajo la Modalidad de Asociación Público-Privada, cuyo Anexo está constituido por la Guía Metodológica para Presentación y Aprobación de Proyectos bajo la Modalidad de Asociación Público Privada.</li>
					              </ul>
					              Según la Ley APP para definir una APP el Gobierno Central o los Gobiernos Autónomos Descentralizados, encomiendan al gestor privado, la ejecución de un proyecto público específico y su financiamiento total o parcial, para la provisión de obras o servicios, a cambio de una contraprestación por su inversión, riesgo y trabajo.
					            </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-3">
                                <h3 class="m-t-10"><strong>Beneficios para el Inversionista</strong></h3>
                                <p align="justify">
					              <div class="panel-body">
					                            <div class="table-responsive">
					                                <table id="data-table" class="table table-striped table-bordered">
					                                    <thead>
					                                        <tr>
					                                            <th>Para el Estado</th>
					                                            <th>Para el Privado</th>
					                                            
					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr class="odd gradeX">
					                                            <td>Satisfacer servicio u obra pública.</td>
					                                            <td>Nuevas oportunidades de Inversión antes no disponibles.</td>
					                                           
					                                        </tr>
					                                        <tr class="even gradeC">
					                                            <td>Riesgo compartido,  transferencia de riesgos.</td>
					                                            <td>Patrocinio Estatal para proyectos de inversión privada.</td>
					                                            
					                                        </tr>
					                                        <tr class="odd gradeA">
					                                            <td>Alivio fiscal.</td>
					                                            <td>Independencia en financiamiento y progreso en la obra u operación.</td>
					                                           
					                                        </tr>
					                                        <tr class="even gradeA">
					                                            <td>Posibilidad de acceder indirectamente a financiamiento.</td>
					                                            <td>Beneficios fiscales atractivos.</td>
					                                           
					                                        </tr>
					                                        <tr class="odd gradeA">
					                                            <td>Garantía de cobertura de servicios públicos a largo plazo.</td>
					                                            <td>Seguridad jurídica en su relación contractual.</td>
					                                   
					                                        </tr>   
					                                    </tbody>
					                                </table>
					                            </div>
					                        </div>
					            </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-4">
                                <h3 class="m-t-10"><strong>Los incentivos de una Asociaciones Público Privadas son: </strong></h3>
                                <p align="justify">
					              <i>Tributarios:</i>
					              <ul>
					              	<li>Exoneración de 10 años en el Impuesto a la Renta desde el primer año de operación.</li>
					              	<li>Exoneración del Impuesto a la Salida de Divisas (5%) sobre importaciones, financiamiento y pagos de dividendos.</li>
					              </ul>
					              <i>Arancelarios:</i>
					              <ul>
					              	<li>Exoneración de aranceles en importaciones relacionadas al proyecto.</li>
					              	<li>Exoneración de IVA en importaciones relacionadas al proyecto.</li>
					              </ul>
					              <i>Seguridad Jurídica:</i>
					              <ul>
					              	<li>Estabilidad sobre los aspectos esenciales del desarrollo de la inversión e incentivos aplicables.</li>
					              	<li>Posibilidad de recurrir a arbitraje nacional o internacional en el caso de controversias.</li>
					              </ul>
					              
					            </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-5">
                                <h3 class="m-t-10"><strong>Tipos de Proyectos en Asociaciones Público Privadas</strong></h3>
                                <p >
					              <strong>Los tipos de proyectos son:</strong>
					              <ul>
					              	<li align="justify">Construcción, equipamiento cuando se lo requiera, operación y mantenimiento de una obra pública nueva para la provisión de un servicio de interés general. </li><br>
					              	<li align="justify">Rehabilitación o mejora, equipamiento cuando se lo requiera, operación y mantenimiento de una obra pública existente para la provisión de un servicio de interés general. </li><br>
					              	<li align="justify">Equipamiento cuando la inversión requerida para este propósito sea sustancial, la operación y mantenimiento de una obra pública existente para la provisión de un servicio de interés general. </li><br>
					              	<li align="justify">La operación y mantenimiento de una obra pública existente para la provisión de un servicio de interés general justificando mejoras sustanciales en esta materia a través de la participación privada en la gestión. </li><br>
					              	<li align="justify">Construcción y comercialización de proyectos inmobiliarios, vivienda de interés social y obras de desarrollo urbano, que sean calificados como prioritarios por el Comité APP. </li><br>
					              	<li align="justify">El desarrollo de actividades productivas, de investigación y desarrollo y en general en las que participe el Estado directamente y en concurrencia con el sector privado, siempre que sean calificados como prioritarios por el Comité APP. </li><br>
					              	<li>Otros calificados como prioritarios por el Comité Interinstitucional.</li>

					              </ul>        
					            </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-6">
                                <h3 class="m-t-10">Comité Constitucional de Asociaciones Público Privadas</h3>
                                <p>
                                	De acuerdo a la normativa vigente, incluyendo el Decreto Ejecutivo 187, la estructura del Comité Interinstitucional de APP está establecida de la siguiente manera: <br>	
                                	
					              <img class="center" width="60%" src="{{ asset('imagenes/APP/comite.PNG') }}" alt="Azuay">
					            
                                </p>
                                
					        </div>
            
                            
                        </div>
                    </div>
			        <!-- end panel -->
			        </div>
			        </div>

			<!-- begin #about -->
			<div id="principios" class="content row-m-t-2" data-scrollview="true">

					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
					<div class="row m-t-20">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->

              <div align="center">
              <a href="#principios" class="btn btn-info" role="button">Principios y Alineamientos</a>
              <a href="#elementos" class="btn btn-info" role="button">Elementos Esenciales</a>
        
              <a href="#aprobacion" class="btn btn-info" role="button">Procedimiento de Aprobación</a>
              <a href="#proyectos" class="btn btn-info" role="button">Proyectos Aprobados</a>
              <a href="#acciones" class="btn btn-info" role="button">Acciones MIPRO</a>
			</div>
              <br /><br />

						<div id="" class="modal-header">
							<h4 class="modal-title "><strong>Principios y Alineamientos</strong></h4>
						</div>

            <p align="justify">

				<strong>El desarrollo de proyectos bajo la modalidad de asociación público-privada se ajustará a:</strong>
				<ul>
					<li>Distribución Adecuada de Riesgos. (Repartición de riesgos entre la entidad pública delegante y el gestor privado).</li>
					<li>Valor por Dinero. (Mejor resultado de la relación precio-calidad).</li>
					<li>Sostenibilidad Fiscal. (Capacidad de pago del Estado para adquirir compromisos financieros a futuro)</li>
					<li>Respeto a los Intereses y Derechos de los Usuarios. (Obligación de proteger a los usuarios finales y resolver sus reclamos de manera oportuna).</li>
					<li>Cobertura e Inclusión Social (No se podrán excluir áreas geográficas, grupos sociales y pueblos).</li>
					<li>Derechos de Propiedad.</li>
				</ul>
              
            </p>

            

							<!-- end col-4 -->
					</div>

				</div>

			</div>
			<!-- end #about -->

      <!-- begin #about -->
			<div id="elementos" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
					<div class="row m-t-20">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->

						<div id="proceso" class="modal-header">
							<h4 class="modal-title "><strong>Elementos Esenciales a Considerar</strong></h4>
						</div>

            <p>
								<ul>
									<li>Distribución de riesgos.</li>
									<li>Obligaciones bilaterales de largo plazo.</li>
									<li>Indicadores de desempeño, niveles de servicio.</li>
									<li>Contraprestación: pagos usuarios.</li>
									<li>Combinación total de planificación, diseño, construcción, financiamiento, comercialización, operación y mantenimiento.</li>
								</ul>
                                </p>

							<!-- end col-4 -->
					</div>

				</div>

			</div>
			<!-- end #about -->

      

      <div id="aprobacion" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->

						<div class="modal-header">
							<h4 class="modal-title"><strong>Procedimiento de Aprobación</strong></h4>
						</div>

						<div class="col-md-12">
					        <div class="panel-group" id="accordion">
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											    <i class="fa fa-plus-circle pull-right"></i>
                          Resumen
											</a>
										</h3>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
						<p>El procedimiento de aprobación de una APP se describe en el siguiente esquema:</p>
                      <div class="col-md-12">
                        <img class="img-responsive center-block"  src="{{ asset('imagenes/APP/fase_precontraactual.PNG') }}" alt="Azuay">
                      </div>

										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											    <i class="fa fa-plus-circle pull-right"></i>
                          Proceso detallado de una APP de INICIATIVA PRIVADA
											</a>
										</h3>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">

                        <div class="col-md-12">
                          <img class="img-responsive center-block"  src="{{ asset('imagenes/APP/proceso-mapa.PNG') }}" alt="Azuay">
										</div>

										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											    <i class="fa fa-plus-circle pull-right"></i>
                          Proceso detallado de una APP de INICIATIVA PÚBLICA
											</a>
										</h3>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">

                      <div class="col-md-12">
                          <img class="img-responsive center-block"  src="{{ asset('imagenes/APP/app-iniciativa-publica.PNG') }}" alt="Azuay">
										</div>

										</div>
									</div>
								</div>
								
							</div>
					    </div>
						<!-- fin kit inversionista -->

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

<!-- begin #about -->
			<div id="proyectos" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
					<div class="row m-t-20">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->

						<div id="base" class="modal-header">
							<h4 class="modal-title "><strong>Proyectos Aprobados hasta la fecha</strong></h4>
						</div>

            <p align="justify">
					              <div class="panel-body">
					                            <div class="table-responsive">
					                                <table id="data-table" class="table table-striped table-bordered">
					                                    <thead>
					                                        <tr>
					                                            <th>PROYECTO</th>
					                                            <th>DESCRIPCIÓN</th>
					                                            
					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr class="odd gradeX">
					                                            <td>Proyecto Puerto Bolívar <br>(May 2016).</td>
					                                            <td>Socio: Yilport (Turquía), perteneciente a YILDRIM. <br> Inversión: 750 MM <br>Empleo: 600  directos, 1800 indirectos</td>
					                                           
					                                        </tr>
					                                        <tr class="even gradeC">
					                                            <td>Proyecto Puerto Posorja <br>(May 2016)</td>
					                                            <td>Socio: DP World (Dubai) <br> Inversión: 1.200 MM <br> Empleo: 1.000 directos, 2.000 indirectos</td>
					                                            
					                                        </tr>
					                                        <tr class="odd gradeA">
					                                            <td>Proyecto Carretera Río 7 – Huaquillas <br> (Jun 2016)</td>
					                                            <td>Socio: CONSUR, Consorcio (Colombo–Ecuatoriano) <br> Inversión: 665 MM <br>Empleo: 1.000 directos, 3.000 indirectos</td>
					                                           
					                                        </tr>
					                                        <tr class="even gradeA">
					                                            <td>Proyecto Viaducto Sur de Guayaquil <br> (Nov 2017)</td>
					                                            <td>Socio: Diamond Consultants and Advisory (EE.UU) <br> Inversión: 1.100 MM <br> Empleo: 10.000 entre directos e indirectos.</td>
					                                           
					                                        </tr>
					                                           
					                                    </tbody>
					                                </table>
					                            </div>
					                        </div>
					            </p>
					</div>

				</div>

			</div>
			<!-- end #about -->

			 <!-- begin #about -->
			<div id="acciones" class="content row-m-t-2" data-scrollview="true">
					<!-- begin container -->
				<div class="container" data-animation="true" data-animation-type="fadeInDown">

					<!-- begin row -->
					<div class="row m-t-20">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->

						<div id="proceso" class="modal-header">
							<h4 class="modal-title "><strong>Acciones MIPRO en la promoción de la ley de incentivos para Asociaciones Público Privadas y construcción de portafolio de proyectos</strong></h4>
						</div>

            <p align="justify">
                                A partir de la reciente expedición del <strong><u> Decreto Ejecutivo 187</u></strong> de 13 oct de 2017, en el cual se delega a la máxima autoridad del MIPRO presidir el Comité APP en desarrollo de MIPYMES en artesanías, industrias básicas, intermedias y finales, agroindustria, procesamiento acuícola, desarrollo territorial industrial, sistema de calidad y competencias propias. A continuación se detallan la gestión del MIPRO en el desarrollo de las APP: <br>
                                <br><strong>Actividades Principales:<br></strong> 
                                <br>El Ministerio de Industrias y Productividad (MIPRO) con apoyo del Banco Interamericano de Desarrollo (BID) y la Alianza para el Emprendimiento e Innovación (AEI), realizaron el <strong><i>1er Foro de la Producción e Impulso a la Innovación y Competitividad</i></strong>, para promover, estimular y fortalecer el diálogo Estado-Sector Productivo. Este Foro permitió articular acciones conjuntas para que el sector empresarial exponga, a través de un conversatorio, su visión acerca del desarrollo productivo en el Ecuador y el sector público, para fortalecer la construcción de políticas públicas de fomento productivo. En este contexto, el 29 de enero se reunieron expertos del BID, representantes de Embajadas y Empresas, y Autoridades de las distintas Carteras de Estado del país, para trabajar en diferentes estrategias para impulsar la innovación, las cuales permitan promover la competitividad de los sectores productivos, tales como: viajes de captura tecnológicas, desafíos de innovación a partir de necesidades empresariales públicas y/o privadas, financiamiento de emprendimientos, entre otros. <br>
                                <br>Adicionalmente, el 19 y 20 de febrero de 2018, el Ministerio de Comercio Exterior, la Embajada de Canadá y el Banco de Desarrollo de América Latina CAF, realizaron el taller “Desafíos y factores de éxito en la formulación y análisis de Alianzas Público Privadas”, el cual contó con la participación de Instituciones del Estado como: Ministerio de Industrias y Productividad, Ministerio de Transportes y Obras Públicas, Finanzas, SENPLADES, SENESCYT, Secretaría General de la Administración, Municipios de Quito y Guayaquil, así como representantes de Infrastructure Ontario (IO), quienes presentaron el entorno normativo, legislativo y de gobernanza que han hecho de IO, un ejemplo exitoso en planeación, adquisición, y entrega de proyectos APP. <br>
                                <br>Finalmente, el Ministerio de Industrias y Productividad cuenta con el apoyo de la cooperación técnica de organismos multilaterales, que tienen interés en impulsar proyectos bajo el esquema de APP, que permitan modernizar y ampliar la infraestructura y productividad del país en sus diferentes sectores contribuyendo a mejorar su competitividad, entregando a los usuarios un servicio adecuado a sus necesidades. Así, actualmente el MIPRO analiza varias propuestas de iniciativas tanto públicas como privadas, de nuevos proyectos de interés general bajo el esquema  APP.
                                </p>

							<!-- end col-4 -->
					</div>

				</div>

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



@endsection
