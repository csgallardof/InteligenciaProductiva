@extends('layouts.app')

@section('content')

			
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1" style="margin-left: 0%;">
            <div class="panel panel-default">
	            <div class="panel-heading">
	            	<h3>Lista de Soluciones</h3>
	       			@include('flash::message')
                	<div class="panel-body pull-right">
	            		<form action="{{ url('soluciones') }}" method="GET" class="form-inline" role="search">
                        	<div class="form-group">
								<input type="text" name="problema_solucion" id="solucion" class="form-control" placeholder="Problema">
							</div>
							<button type="submit" class="btn btn-sm btn-default">Buscar</button>
						</form>
                    </div>
                    <br><br><br><br>


	            	<a href="{{ route('soluciones.create') }}" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;Nuevo</a>
				</div>	            
	            <div class="panel-body">
				  	<table class="table table-hover">
				        <thead>
				            <tr>
				                <th>#</th>
				                <th class="text-center">EVENTO</th>
				                <th class="text-center">PROVINCIA</th>
				                <th class="text-center">ESLAB&Oacute;N DE LA CADENA PRODUCTIVA</th>
				                <th class="text-center">PROBLEM&Aacute;TICA</th>
				                <th class="text-center">SOLUCI&Oacute;N</th>
				                <th class="text-center">INSTRUMENTOS NECESARIOS</th>
				                <th class="text-center">CLASIFICACI&Oacute;N EMPRESA RELACIONADA</th>
				                <th class="text-center">&Aacute;MBITO</th>
				                <th class="text-center">RESPONSABLE DE EJECUCI&Oacute;N</th>
				                <th class="text-center">CO-RESPONSABLES DE EJECUCIÓN</th>
				                <!--  <th>Acci&oacute;n</th>  -->

				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($soluciones as $solucion)
							<tr>
				                <td class="text-center">{{ $solucion->id }}</td>
				                <td class="text-center">{{ $solucion->evento->nombre_evento}}</td>
				                <td class="text-center">{{ $solucion->provincia->nombre_provincia}}</td>
				                <td class="text-center">{{ $solucion->sipoc->nombre_sipoc }}</td>
				                <td class="text-center">{{ $solucion->problema_solucion }}</td>
				                <td class="text-center">{{ $solucion->verbo_solucion." a ".$solucion->sujeto_solucion." a ".$solucion->complemento_solucion }}</td>
				                <td class="text-center">{{ $solucion->instrumento->nombre_instrumento }}</td>
								<td class="text-center">{{ $solucion->vsector->nombre_vsector }}</td>
								<td class="text-center">{{ $solucion->ambit->nombre_ambit }}</td>
								<td class="text-center">{{ $solucion->responsable_solucion }}</td>
								<td class="text-center">{{ $solucion->corresponsable_solucion }}</td>

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
				    		{!! $soluciones->render() !!}
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
  
    <script src="{{ asset('js/miJavascript.js') }}"></script>

@endsection