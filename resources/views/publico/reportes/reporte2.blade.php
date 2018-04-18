@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  	<link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

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
        </div>
        <br><hr>
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

							    <label for="sectorSelect">Sector</label><br>
								 	<select class="form-group form-control" id="sectorSelect" name="sectorSelect" >
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->sector->id , $arraySectors) )
									 			<option value="{{ $solucion->sector->id}}">{{ $solucion->sector->nombre_sector }}</option>
									 			<?php array_push( $arraySectors, $solucion->sector->id ); ?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<?php $arrayEstados[] = array(); ?>

						 		<div >

							    <label for="estadoSelect">Estados</label><br>
								 	<select class="form-group form-control" id="estadoSelect" name="estadoSelect">
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->estado->id , $arrayEstados) )
									 			<option value="{{ $solucion->estado->id}}">{{ $solucion->estado->nombre_estado }}</option>
									 			<?php array_push( $arrayEstados, $solucion->estado->id ); ?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<?php $arrayAmbits[] = array(); ?>

						 		<div >

							    <label for="ambitoSelect">Ambito</label><br>
								 	<select class="form-group form-control" id="ambitoSelect" name="ambitoSelect">
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->ambit->id , $arrayAmbits) )
									 			<option value="{{ $solucion->ambit->id}}">{{ $solucion->ambit->nombre_ambit }}</option>
									 			<?php array_push( $arrayAmbits, $solucion->ambit->id ); ?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<div >
								 	<?php $arrayResponsables[] = array(); ?>
								 	<label for="sectorSelect">Responsable</label><br>
								 	<select class="form-group form-control" id="responsableSelect" name="responsableSelect" >
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( count($solucion->actor_solucion) > 0 )
						                		@foreach( $solucion->actor_solucion as $actorSolucion)
						                			@if( $actorSolucion->tipo_actor == 1 )
						                				@if( !in_array( $actorSolucion-> usuario-> id , $arrayResponsables) )
						                					<option value="{{ $actorSolucion-> usuario-> id}}">{{ $actorSolucion-> usuario-> name}}</option>
						                					<?php array_push( $arrayResponsables, $actorSolucion->usuario->id ); ?>
						                				@endif
						                			@endif
						                		@endforeach
							                @endif
							            @endforeach

								 	</select>
                  			</div>            
					</div>
				</form>
			</div>
			<div class="col-md-9">
				<div class="col-md-12 pull-left">

					                    <div class="panel-body text-center">

					                        <form class="form-horizontal" role="form" method="GET" action="{{ route('nuevaBusqueda2') }}">

					                            <div class="form-group">

					                                <div class="input-group custom-search-form">
					                                    <input type="text" class="form-control_2" placeholder="Busca todo sobre el diálogo con el sector productivo" name="parametro" required style="font-size: 16px" >
					                                    <span class="input-group-btn">
					                                        <button class="btn btn-buscar btn-lg" style="background: #EF5D06; color: #fff; " type="submit" height="50px">
					                                            <span class="glyphicon glyphicon-search"></span>
					                                        </button>
					                                    </span>
														<a href="/descargar/Mesas" class="btn  btn-success btn-lg "><i class="fa fa-download"></i>&nbsp;Descargar</a>
					                                </div>

					                            </div>
												
					                        </form>

					                    </div>
					                   
							            
							          
							    </div>
					<div class="col-md-12">
					<span class="title_ip_h1"> 

						<?php $total = 0; ?>
						@foreach ($resultados as $solucion=>$athlete)
						 	
						 <?php   $total = ++$solucion; ?>	
						@endforeach	
						{{ $total }}
					Resultados de la B&uacute;squeda</span>
						
						
						{{-- @if(isset($parametro))
							Se muestran los resultados para "
							<a href="/busqueda?parametro={{ Request::get('parametro') }}">
								<b style="color: #00acac; font-size: 16px">{{ $parametro }}</b>
							</a>
							"
						@endif --}}

          			</div>

					<!-- inicio cuadrados -->
					<br>
          								
					<div class="col-md-12">
						<br> 
						<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
						<div class="stats-info">
						<?php
	    					$totalMesasCom=0;
	            			$totalCCTP=0;
	            			$estadoAsignado1=0;
				            $estadoDesarrollo1=0;
				            $estadoAsignado2=0;
				            $estadoDesarrollo2=0;
	                     foreach($resultados as $solucion ) {
	                        
	                        if($solucion->tipo_fuente==1){
	                        $totalMesasCom=$totalMesasCom+1;
	                        if($solucion->estado_id==2){
	                    	$estadoAsignado1=$estadoAsignado1+1;
	                    	}elseif($solucion->estado_id==3){
	                    	$estadoDesarrollo1=$estadoDesarrollo1+1;
	                    	}
	                    	}
	                        else {
	                        $totalCCTP=$totalCCTP+1;
	                        if($solucion->estado_id==2){
	                    	$estadoAsignado2=$estadoAsignado2+1;
	                    	}elseif($solucion->estado_id==3){
	                    	$estadoDesarrollo2=$estadoDesarrollo2+1;
	                    	}
	                        }	      
	                    }
	                    $totalPropuesta=$totalMesasCom+$totalCCTP;
	                    $totalEstadoAsignado=$estadoAsignado1+$estadoAsignado2;
	                    $totalEstadoDesarrollo=$estadoDesarrollo1+$estadoDesarrollo2;
	    				?>
							<h4>Propuestas</h4><br>
							<p>{{$totalPropuesta}}</p>	
						</div>
						
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-stats bg-purple">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							
							<h4>Total de Propuestas <strong>Asignadas</strong></h4><br>
							<p>{{$totalEstadoAsignado}}</p>	
						</div>
						
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
						<div class="stats-info">
							<h4>Total de Propuestas <strong>En Desarrollo</strong></h4><br>
							<p>{{$totalEstadoDesarrollo}}</p>	
						</div>
						
					</div>
				</div> 
				<!-- end col-3 -->
					</div>
					<!-- Final cuadrados -->

				<!-- Inicio col-8 tabla -->
					<div class="col-md-12">
						
						@if(isset($resultados))
							<table id="data-table" class="table nowrap" width="100%">
								<thead>
									<th class="text-center">PROPUESTA</th>
					                

					                
								</thead>
								<tbody>
						        	@foreach( $resultados as $resultados)
						        		<tr>
											@if($resultados->tipo_fuente==1)
							                	<td class="text-left">
							               <br>
									<div class="text-justify">
									<a   class="btn btn-primary pull-right" href="/detalle-despliegue-dialogo/{{ $resultados->id}}">ver</a>
									<p>
								<br>
								<strong><font >{{$resultados->problema_solucion}}</font></strong><br>	
								
								<font>{{$resultados->verbo_solucion." ".$resultados->sujeto_solucion." ".$resultados->complemento_solucion}}</font><br>

								<font >Mesas de Competitividad</font><br>
								
								<font ><strong>Responsable: </strong>{{$resultados->responsable_solucion}}</font><br>

								
								@if($resultados->estado_id>=1)
								<div class="progress progress-striped active " style="width:50%">
                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Análisis</div>
                                        @if($resultados->estado_id>=3)
                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
                                        @if($resultados->estado_id==4)
                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
                                        @endif
                                        @endif
                                        
                                  </div>
                                @endif
	
							</p>
							
							</div>
							
							                	</td>
							                @endif
							                @if($resultados->tipo_fuente==2)
							                	<td class="text-left">
							               
							                		<br>
							<div class="text-justify">
							<a   class="btn btn-primary pull-right" href="/detalle-despliegue-dialogo/{{$resultados->id}}">ver</a> 
							<p>
								<br> 
								<strong><font >{{$resultados->problema_solucion}}</font></strong><br>	
								
								<font >Consejo Consultivo</font><br>
								<font ><strong>Responsable: </strong>{{$resultados->responsable_solucion}}</font><br>
								
								
                                @if($resultados->estado_id>=1)
								<div class="progress progress-striped active col-md-12" style="width:50%">
                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Análisis</div>
                                        @if($resultados->estado_id>=3)
                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
                                        @if($resultados->estado_id==4)
                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
                                        @endif
                                        @endif
                                      
                                  </div>
                                @endif
                               
							</p>
							
							</div>
							
							                	</td>
							                @endif
							                

							             
							            </tr>
						            @endforeach
			     				</tbody>
							</table>
						@endif

						<!-- Fin Contenido -->
					</div>
					<!-- end col-8 tabla -->

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

	<script type="text/javascript">

		function ordenarSelect(id_componente)
	    {
	      var selectToSort = jQuery('#' + id_componente);
	      var optionActual = selectToSort.val();
	      selectToSort.html(selectToSort.children('option').sort(function (a, b) {
	        return a.text === b.text ? 0 : a.text < b.text ? -1 : 1;
	      })).val(optionActual);
	    }
	    $(document).ready(function () {
	      ordenarSelect('sectorSelect');
	    });

	</script>


@endsection
