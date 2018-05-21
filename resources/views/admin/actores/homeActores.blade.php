@extends('layouts.app')

@section('content')
 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h4>Actores - Soluci&oacute;n </h4>
                	
                	<a href="{{ route('actorSolucion.create') }}" class="btn btn-primary pull-right">Nuevo</a></div>

					<div class="panel-body">
						<table class="table table-hover">
					        <thead>
					            <tr>
					                <th>Fuente</th>
					                <th>Soluci&oacute;n</th>
					                <th>Actor</th>
					                <th>Responsabilidad</th>
					                <th>Acci&oacute;n</th>
					            </tr>
					        </thead>
					       
					    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection