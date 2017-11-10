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
							<h2 class="modal-title">Contratos de Inversión</h2>
					</div>

					<!-- begin row -->
					<div class="row">
							<!-- begin col-4 -->
						<!-- ini kir inversionista  -->
						
						<div class="modal-header">
							<h4 class="modal-title"><strong>Contrato de Inversion</strong></h4>
						</div>
						<p>
							<strong>¿Qué es un contrato de inversión?</strong> Es un acuerdo opcional que el empresario puede solicitar al Estado ecuatoriano para asegurar su inversión. El MCPEC reconoce las inversiones de hasta 15 años plazo con un capital desde un millón de dólares.
						</p>

						<div class="modal-header">
							<h4 class="modal-title">Kit del Inversionista</h4>
						</div>
						<div class="col-md-10 pull-left">
					        <div class="panel-group" id="accordion">
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Código Orgánico de la Producción, Comercio e Inversiones (COPCI)
											</a>
										</h3>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<a href="#">
												Descarga Código Orgánico de la Producción, Comercio e Inversiones (COPCI)
											</a>
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #2
											</a>
										</h3>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-inverse overflow-hidden">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											    <i class="fa fa-plus-circle pull-right"></i> 
												Collapsible Group Item #3
											</a>
										</h3>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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



@endsection
