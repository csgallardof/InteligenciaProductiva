@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

<br><br><br><br>

		<!-- begin #about -->
		<div class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">

        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">
            <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="/busquedaAvanzada">Resultados de la B&uacute;squeda</a></li>
            
            <label class='text-success pull-right'>
							<a href="/busquedaAvanzada" class="btn btn-link fit-m-t-1"><i class="fa fa-1x fa-search"></i> Nueva Consulta</a>
						</label>
          </ol>
        </div>

				<!-- begin row -->
			
		</div>


		<!-- DESDE AQUI -->

			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<!-- end page-header -->

		    <!-- begin row -->
			<div class="row">
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="chart-js-2">
											<div class="panel-heading">
													<h4 class="panel-title">Instituciones con Actividades Reportadas</h4>
											</div>
                        <div class="panel-body">
                            <p>
                                {{-- A bar chart is a way of showing data as bars.
                                It is sometimes used to show trend data, and the comparison of multiple data sets side by side. --}}
                            </p>
                            <div>
                                <canvas id="bar-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="chart-js-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">Propuestas por Cadena Productiva</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                {{-- Pie and doughnut charts are registered under two aliases in the Chart core. Other than their different default value, and different alias, they are exactly the same. --}}
                            </p>
                            <div>
                                <canvas id="doughnut-chart"></canvas>
                            </div>
                        </div>
                    </div>
		        </div>
            </div>
		    <!-- end row -->

		    <!-- begin row -->
		    {{-- <div class="row">
		        <!-- begin col-6 -->
		        <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-3">
                        <div class="panel-heading">
                            <h4 class="panel-title">Radar Chart</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                A radar chart is a way of showing multiple data points and the variation between them.
                                They are often useful for comparing the points of two or more different data sets.
                            </p>
                            <div>
                                <canvas id="radar-chart"></canvas>
                            </div>
                        </div>
                    </div>
		        </div>
		        end col-6
		        <!-- begin col-6 -->
						<div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-3">
                        <div class="panel-heading">
                            <h4 class="panel-title">Radar Chart</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                A radar chart is a way of showing multiple data points and the variation between them.
                                They are often useful for comparing the points of two or more different data sets.
                            </p>
                            <div>
                                <canvas id="radar-chart2"></canvas>
                            </div>
                        </div>
                    </div>
		        </div>
		        <!-- end col-6 -->
		    </div> --}}
		    <!-- end row -->

		    <!-- begin row -->
		    <div class="row">
		        <!-- begin col-6 -->
		        <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-5">
                        
                        <div class="panel-body">
                            <p>
                               {{--  Pie and doughnut charts are probably the most commonly used chart there are. They are divided into segments, the arc of each segment shows the proportional value of each piece of data. --}}
                            </p>
                            <div>
                                <canvas id="pie-chart"></canvas>
                            </div>
                        </div>
                    </div>
		        </div>

		        <!-- end col-6 -->
		        <!-- begin col-6 -->
		        <div class="col-md-6">
                    {{-- <div class="panel panel-inverse" data-sortable-id="chart-js-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">Doughnut Chart</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                Pie and doughnut charts are registered under two aliases in the Chart core. Other than their different default value, and different alias, they are exactly the same.
                            </p>
                            <div>
                                <canvas id="doughnut-chart"></canvas>
                            </div>
                        </div>
                    </div> --}}
		        </div>
		        <!-- end col-6 -->
		    </div>
		    <!-- end row -->
		</div>
		<!-- end #content -->

		<!-- HASTA AQUI -->

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

	<script src="{{ asset('plugins/chart-js/chart.js') }}"></script>

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('js/apps.min.js') }}"></script>
	<script src="{{ asset('js/chart-js.demo.js') }}"></script>
	
	<!-- ================== END PAGE LEVEL JS ================== -->


@endsection

@section('init_scripts')

  <script>
		$(document).ready(function() {
			App.init();
			ChartJs.init();

			// var ctx = document.getElementById("bar-chart");
			// ctx.height = 75;

		});
	</script>
  <script>
function goBack() {
    window.history.back();
}
</script>

@endsection
