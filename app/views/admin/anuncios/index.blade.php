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
                        	<a href="/admin/users/create"><button type="button" class="btn btn-primary">Nuevo Usuario</button></a>
                        </div>
                    </div>
                    <div class="row">
					<div class="col-md-6">
					{{Form::open(['route'=>'admin.users.index','method'=>'GET', 'class'=>'input-group'])}}
						{{Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre de usuario...'])}}
				      	<span class="input-group-btn">
				        	<button class="btn btn-default" type="submit">Go!</button>
				      	</span>
				    {{Form::close()}}
				  	</div><!-- /.col-lg-6 -->
				  	</div><!-- /.row -->
					<table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>Nombre</th>
				          <th>Correo</th>
				          <th>Tipo</th>
				          <th>Acciones</th>
				        </tr>
				      </thead>
				      <tbody>
						@foreach($user as $users)
				        <tr>
				          <th scope="row">{{ $users->id}}</th>
				          <td>{{ $users->name}}</td>
				          <td>{{ $users->email}}</td>
				          <td>{{ $users->type}}</td>
						  <td><a href="{{ URL::to('admin/users/'.$users->id. '/edit') }}">
						  <button type="button" class="btn btn-primary">Editar</button></a>
				          | {{ Form::open(['url'=>'admin/users/'.$users->id]) }}
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