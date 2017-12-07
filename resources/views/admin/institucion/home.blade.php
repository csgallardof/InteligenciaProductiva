@extends('layouts.app')

@section('content')


<div class="container" style="padding-top:10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Instituciones<a href="{{ route('instituciones.create') }}" class="btn btn-primary pull-right">Nuevo</a></div>

					<div class="panel-body">
						<table class="table table-hover">
					        <thead>
					            <tr>
					                <th>Instituci&oacute;n</th>
					                <th>Email</th>
					                <th>Acci&oacute;n</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@foreach($instituciones as $institucion)
								<tr>
					                <td>
					                	{{ $institucion-> name}}
					                </td>
					                <td>
					                	{{ $institucion-> email}}
					                	
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