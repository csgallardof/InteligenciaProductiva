@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

			
	<div class="container">
	    <div class="row">
	        <div class="col-md-12 col-md-offset-1" style="margin-left: 0%;">
	            <div class="panel panel-default">
		            <div class="panel-heading">
		            	<h3>Lista de Participantes</h3>
		       			@include('flash::message')
	                	<div class="panel-body pull-right">
		            		<form action="{{ url('participantes') }}" method="GET" class="form-inline" role="search">
	                        	<div class="form-group">
									<input type="text" name="parametro" id="participante" class="form-control" placeholder="Par&aacute;metro" pattern=".{3,}" oninvalid="setCustomValidity('Ingrese al menos 3 caracteres')" onchange="try{setCustomValidity('')}catch(e){}" 
									/>
								</div>
								<button type="submit" class="btn btn-sm btn-default">Buscar</button>
							</form>
	                    </div>
	                    <br><br><br><br>


		            	<a href="{{ route('participantes.create') }}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;Nuevo</a>

					</div>	            
		            <div class="panel-body">
					  	<table class="table table-hover">
					        <thead>
					            <tr>
					                <th class="text-center">APELLIDOS</th>
					                <th class="text-center">NOMBRES</th>
					                <th class="text-center">C&Eacute;DULA</th>
					                <th class="text-center">MAIL</th>
					                <th class="text-center">CELULAR</th>
					                <th class="text-center">TEL&Eacute;FONO Y EXT</th>
					                <th class="text-center">GRUPO EN EL QUE PARTICIPAR&Aacute;</th>
					                <th class="text-center">TIPO PARTICIPANTE</th>
					                <!--  <th>Acci&oacute;n</th>  -->

					            </tr>
					        </thead>
					        <tbody>
					        	@foreach($participantes as $user)
								<tr>
					                <td class="text-center">{{ $user->apellidos}}</td>
					                <td class="text-center">{{ $user->name}}</td>
					                <td class="text-center">{{ $user->cedula }}</td>
					                <td class="text-center">{{ $user->email }}</td>
					                <td class="text-center">{{ $user->celular }}</td>
					                <td class="text-center">{{ $user->telefono }}</td>
									<td class="text-center">{{ $user->sector->nombre_sector }}</td>
									<td class="text-center">{{ $user->vsector->nombre_vsector }}</td>

									<!--
					                <td>
					                	<a href="   '/soluciones/'.$solucion->id.'/edit' }}" class="btn btn-primary">Editar</a>  
					                	<button type="button" onclick="borrarSolucion(  $solucion->id }} , $solucion->verbo_solucion." a ".$solucion->sujeto_solucion." a ".$solucion->complemento_solucion }});" class="btn btn-danger" data-toggle="modal" data-target="#ventanaBorrarSolucion">Borrar</button>
					                	
					                </td>
					            	-->
					            </tr>
					            @endforeach		            
					        </tbody>
				    	</table>
					    <div class="row">
					    	<div class="col-md-offset-5">
					    		{!! $participantes->render() !!}
					    	</div>
					    </div>
					</div>
				</div>
			</div>				    
		
			
		</div>
	</div>

		
	<!-- VENTANA MODAL PARA ELIMINAR SOLUCION -->

	<div class="modal fade" id="ventanaBorrarSolucion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<p id="nombre_solucion"></p>
				</div>
				<div class="modal-body">
					<div id="nombre_solucion2"></div>
					
				</div>
				<br><br>
				<div class="modal-footer">
					
					<input id="botonBorrarSolucion" type="button" class="btn btn-primary" value="Borrar">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>   					
				</div>

			</div>
		</div>
	</div>
	<!-- FIN VENTANA MODAL -->
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

  <script>
    $(document).ready(function() {
      Dashboard.init();



    });
  </script>

@endsection
