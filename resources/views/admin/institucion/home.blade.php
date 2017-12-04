@extends('layouts.app')

@section('content')


<div class="container" style="padding-top:10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actores - Soluci&oacute;n <a href="{{ route('instituciones.create') }}" class="btn btn-primary pull-right">Nuevo</a></div>

					<div class="panel-body">
						<table class="table table-hover">
					        <thead>
					            <tr>
					                <th>Soluci&oacute;n</th>
					                <th>Actor</th>
					                <th>Responsabilidad</th>
					                <th>Acci&oacute;n</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@foreach($actoresSoluciones as $actorSolucion)
								<tr>
					                <td>{{ $actorSolucion->solucion_id }}</td>
					                <td>{{ $actorSolucion->user_id }}</td>
					                <td>@if($actorSolucion->tipo_actor == 1)
					                		{{ "Responsable" }}
					                	@endif
					                	@if($actorSolucion->tipo_actor == 2)
					                		{{ "Corresponsable" }}
					                	@endif
					                </td>
					                <td></td>
					            </tr>
					            @endforeach		            
					        </tbody>
					    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection