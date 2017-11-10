@extends('layouts.app')

@section('content')

			
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
	            
	            <div class="panel-heading">
	            	Se han encontrado {{ count($errores) }} errores.
				</div>
	            <div class="panel-body">
					<ul>
						@foreach($errores as $error)
							<li>{{ $error  }}</li>
				        @endforeach	
						
					</ul>
				</div>

				<div class="panel-heading">
	            	Vista Previa de Soluciones
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

				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($datos as $solucion)
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

				            </tr>
				            @endforeach		            
				        </tbody>
			    	</table>
				    
				</div>
			</div>
		</div>				    
	
		
	</div>
</div>

	
@endsection


@section('end_js')

@endsection