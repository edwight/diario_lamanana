@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
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
                            <a href="/admin/posts/create"><button type="button" class="btn btn-primary">Nuevo Post</button></a>
                        </div>
                    </div>
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
                       @foreach($post as $posts)
                        <tr>
                          <th scope="row">{{ $posts->id}}</th>
                          <td>{{ $posts->titulo}}</td>
                          <td>{{ $posts->category->name}}</td>
                           <td>{{ $posts->getCarbonAgo($posts->created_at) }}</td>
                          <td><a href="{{ URL::to('admin/posts/'.$posts->id. '/edit') }}">
                          <button type="button" class="btn btn-primary">Editar</button></a>
                          | {{ Form::open(['url'=>'admin/posts/'.$posts->id]) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}</td>
                        </tr>
                     @endforeach
                        
                    </table> 
                    {{ $post->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop




