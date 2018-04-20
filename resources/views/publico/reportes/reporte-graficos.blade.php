@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  	<link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


@endsection

@section('contenido')

<br><br><br><br>
	<!-- begin row -->
	<div id="about" class="content work" data-scrollview="true">
		<div class="container" data-animation="true" data-animation-type="fadeInDown">


        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">

            <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="{{ url('/busquedaAvanzada') }}">Resultados de la B&uacute;squeda</a></li>

          </ol>
        </div><hr style="margin-top:-10px;">
		<div class="row">
			<div class="col-md-3" style="border: #D7DBDD 1px solid; padding: 1%">

				<form role="form" method="GET" action="{{ route('nuevaBusqueda2') }}">
				<input type="hidden" name="parametro" value="{{ Request::get('parametro')}}">
				<div class="toolbar title_ip_breadcrumb fit-m-b-10">

		          <ol class="breadcrumb">

		            <li class="home">Filtros</li>
		            <li class="active"><button type="submit" class="btn btn-primary m-l-20 pull-rigth">Filtrar</button></li>

		          </ol>
		        </div>
					<div class="form-group">
						<?php $arraySectors[] = array(); ?>

						 		<div >

							    <label for="sectorSelect">Sector</label><a href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">
														<i class="fa fa-2x fa-angle-left"></i>
													</a><br> 
								 	<select class="form-group form-control" id="sectorSelect" name="sectorSelect" >
								 		<option value="0">Seleccionar </option>
								 		
								 	</select>
                				</div>
                				

						 		<div >

							    <label for="estadoSelect">Estados</label><a href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">
														<i class="fa fa-2x fa-angle-left"></i>
													</a><br>
								 	<select class="form-group form-control" id="estadoSelect" name="estadoSelect">
								 		<option value="0">Seleccionar</option>
								 		
								 	</select>
                				</div>
                				

						 		<div >

							    <label for="ambitoSelect">Ambito</label><a href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">
														<i class="fa fa-2x fa-angle-left"></i>
													</a><br>
								 	<select class="form-group form-control" id="ambitoSelect" name="ambitoSelect">
								 		<option value="0">Seleccionar</option>
								 		
								 	</select>
                				</div>
                				<div >
								 	
								 	<label for="sectorSelect">Responsable</label><a href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">
														<i class="fa fa-2x fa-angle-left"></i>
													</a><br>
								 	<select class="form-group form-control" id="responsableSelect" name="responsableSelect" >
								 		<option value="0">Seleccionar</option>
								 		

								 	</select>
                  			</div>
					</div>
				</form>
			</div>
			<div class="col-md-9">

			<!-- inicio cuadrados -->
		
				<div class="col-md-12">

					<div class="row">
		                <div class="col-md-12">
		                    <div class="panel panel-inverse" data-sortable-id="chart-js-2">
		                                            <div class="panel-heading">
		                                                    <h4 class="panel-title">Radar Chart</h4>
		                                            </div>
		                        <div class="panel-body">
		                            <div>
		                                <canvas id="bar-chart"></canvas>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>


		            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-3">
                        <div class="panel-heading">
                            <h4 class="panel-title">Radar Chart</h4>
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="radar-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-3">
                        <div class="panel-heading">
                            <h4 class="panel-title">Radar Chart</h4>
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="radar-chartnew"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="flot-chart-5">
                        <div class="panel-heading">
						  PIE
                        </div>
                        <div class="panel-body">
                            <div>
                            	<div id="piechart"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end col-6 -->
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <div class="panel panel-inverse" data-sortable-id="chart-js-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">Doughnut Chart</h4>
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="donutchart" ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
				
				</div>
				<!-- Final cuadrados -->

			<!-- Inicio col-8 tabla -->
				
			</div>

        </div>

		</div>

	</div>

@endsection

@section('end_js')
  @parent

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
	<script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
	<script src="{{ asset('plugins/scrollMonitor/scrollMonitor.js') }}"></script>
	<script src="{{ asset('js/custom-mipro.js" type="text/javascript') }}"></script>
	<script src="{{ asset('js/apps.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script language="javascript">

	$("#select_eje,#select_cadena").change(function() {
	  var eje = $("#select_eje").val();
	  var cadena = $("#select_cadena").val();
	  baseUrl = window.location.href.split("?")[0];
	  if (eje != 0) baseUrl += ( baseUrl.indexOf('?') >= 0 ? '&' : '?' ) + "eje=" + eje;
	  if (cadena != 0) baseUrl += ( baseUrl.indexOf('?') >= 0 ? '&' : '?' ) + "cadena=" + cadena;
	  window.location.href = baseUrl;
	});

	</script>
	

	<script>

		$(document).ready(function() {
			App.init();
			TablaCCPTHome.init();
		});

	</script>

	

@endsection
