@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  	<link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />
	
@endsection

@section('contenido')

<br>
<br><br><br>
	<!-- begin row -->
	<div id="about" class="content row-m-t-2" data-scrollview="true">
		<div class="container" data-animation="true" data-animation-type="fadeInDown">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 row-m-t-minus-25" >
		                    <div class="panel-body text-center">
		                        
		                        <form class="form-horizontal" role="form" method="GET" action="{{ route('nuevaBusqueda') }}">
		                            
		                            <div class="form-group">
		                                <div class="input-group custom-search-form">
		                                    <input type="text" class="form-control_2" placeholder="Busca todo sobre el diálogo con el sector Productivo" name="parametro" required style="font-size: 22px" >
		                                    <span class="input-group-btn">
		                                    <button class="btn btn-primary btn-lg" type="submit" height="50px">
		                                        <span class="glyphicon glyphicon-search"></span>
		                                    </button>
		                                </div>
		                                
		                            </div>
		                        </form>

		 
		                    </div>
		                </div>
							<!-- begin col-4 -->
						<div class="col-md-12">
							<!-- Inicio Contenido -->
							<h2>Resultado de la Búsqueda </h2>
							@if(isset($parametro))
								Se muestran los resultados para "<ins>{{ $parametro }}</ins>"
							@endif
							
							<hr class="m-t-5"/>

							@if(isset($resultados))
								<table id="data-table" class="table nowrap" width="100%">
									<thead>
										<th>#</th>
						                <th class="text-center">PROPUESTA</th>
						                <th class="text-center">SECTOR</th>
						                <th class="text-center">RESPONSABLE</th>
						                <th class="text-center">CORRESPONSABLE</th>
						                <th></th>
									</thead>
									<tbody>				        	
							        	@foreach( $resultados as $solucion)
							        		<tr>
								                <td class="text-center">{{ $solucion->id }}</td>
												@if($solucion-> tipo_fuente == 1)							                
								                	<td class="text-center">{{ $solucion->verbo_solucion." ".$solucion->sujeto_solucion."  ".$solucion->complemento_solucion }}</td>
								                @else
								                	@if($solucion-> tipo_fuente == 2)							                
								                		<td class="text-center">{{ $solucion->solucion_ccpt }}</td>
								                	@endif
								                @endif
								                <td class="text-center">{{ $solucion->sector->nombre_sector}}</td>
								                <td class="text-center">
								                	@if( count($solucion->actor_solucion) > 0 )
								                		@foreach( $solucion->actor_solucion as $actorSolucion)
								                			@if( $actorSolucion->tipo_actor == 1 )
								                				{{ $actorSolucion-> usuario-> name}}
								                			@endif
								                		@endforeach
								                	@endif
								                	
								                </td>
								                <td class="text-center">
								                	@if( count($solucion->actor_solucion) > 0 )
								                		<ul>
									                		@foreach( $solucion->actor_solucion as $actorSolucion)
									                			@if( $actorSolucion->tipo_actor == 2 )
									                				<li style="list-style:none;">{{ $actorSolucion-> usuario-> name}}</li>
									                			@endif
									                		@endforeach
								                		</ul>
								                	@endif
								                	
								                </td>
												<td class="text-center">
													@if( $solucion -> tipo_fuente == 1)
														<a href= "/detalle-despliegue/{{ $solucion->id}}" title="Ver más" class="label label-primary" >
															Ver
														</a>
													@endif
													@if( $solucion -> tipo_fuente == 2)
														<a href= "/detalle-ccpt/{{ $solucion->pajustada_id }}/{{ $solucion->sector_id }}/{{ $solucion->ambit_id }}/{{$solucion->sipoc_id}}" title="Requerimiento" class="label label-primary" >
															Ver
														</a>
													@endif
													
												</td>
								            </tr>
							            @endforeach			   
				     				</tbody>
								</table>
							@endif
						

							
							<!-- Fin Contenido -->
						</div>
							<!-- end col-4 -->
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
			TableManageResponsive.init();
		});

	</script>


@endsection