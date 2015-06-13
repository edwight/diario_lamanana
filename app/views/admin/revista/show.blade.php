@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registar</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                            <div class="col-md-6">
                            	<a href="/admin/edicion/create"><button type="button" class="btn btn-primary">Nueva Edicion</button></a>
                            </div>
                        </div>
					
					<table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>Nombre</th>
				          <th>Acciones</th>
				        </tr>
				      </thead>
				      <tbody>
						@foreach($revistas->hojas as $revista)
				        <tr>
				          <th scope="row">{{ $revista->id}}</th>
				          <td>{{ $revista->titulo}}</td>
						  <td><a href="{{ URL::to('admin/edicion/'.$revista->id. '/edit') }}">
						  <button type="button" class="btn btn-primary">Editar</button></a>
				          | {{ Form::open(['url'=>'admin/edicion/'.$revista->id]) }}
                    		{{ Form::hidden('_method', 'DELETE') }}
                    		{{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                			{{ Form::close() }}</td>
				        </tr>
				     @endforeach
				     
				    </table>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

	    