@extends('layouts.app')

@section('content')


<div class="container" style="padding-top:10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Instituciones <a href="{{ route('instituciones.create') }}" class="btn btn-primary pull-right">Nuevo</a></div>

					<div class="panel-body">
						<table class="table table-hover">
					        <thead>
					            <tr>
					                <th>#</th>
					                <th>Nombre</th>
					                <th>Acción</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@foreach($instituciones as $institucion)
								<tr>
					                <td>{{ $institucion->id }}</td>
					                <td>{{ $institucion->name }}</td>
					                <td><a href="{{ '/instituciones/'.$institucion->id.'/edit' }}" class="btn btn-primary">Editar</a>  <a href="" class="btn btn-danger">Eliminar</a></td>
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