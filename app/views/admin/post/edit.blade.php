@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
                     {{ Form::model($post,['action' =>['AdminController@update', $post->id],'class'=>'form-horizontal','role'=>'form', 'method' => 'PUT' ,'files' => true]) }}
                        <div class="form-group">
                        {{Form::label('subtitulo', 'SubTitulo', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-10">
                           {{Form::text('subtitulo', $post->contenido->subtitulo,['class'=>'form-control','name'=>'subtitulo','placeholder'=>'Ante Titulo'] )}}
                        </div>
                    </div>

                    <div class="form-group">
                        {{Form::label('titulo', 'Titulo', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-10">
                            {{Form::text('titulo', $post->titulo,['class'=>'form-control','name'=>'titulo','placeholder'=>'Titulo'] )}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('descripcion', 'Descripcion', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-10">
                            {{Form::textarea('descripcion', $post->contenido->descripcion,['class'=>'edicion','name'=>'descripcion'] )}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('contenido', 'Contenido', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-10">
                            {{Form::textarea('contenido', $post->contenido->contenido ,['class'=>'edit','name'=>'contenido'] )}}
                        </div>
                    </div>
                    
                    <div class="form-group">
                    {{Form::label('editor', 'Editor', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                            <select data-placeholder="Selecione un Editor..." name="editor" class="form-control" tabindex="2" id="editor">
                                <option value="{{ $post->user->id }}">{{ $post->user->name }}</option>
                                @foreach ($userlist as $users)
                                <option value="{{ $users->id }}">{{ $users->name }}</option>
                                 @endforeach
                            </select>   
                        </div>
                    </div>
                    <div class="form-group">
                         {{Form::label('categoria', 'Categoria', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                            <select data-placeholder="Selecione una Categoria..." name="categorys" class="form-control"  tabindex="2" id="categorys">
                            <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                            @foreach ($categorylist as $categorys)
                                <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                         {{Form::label('etiquetas', 'Etiquetas', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                           <select data-placeholder="Seleciones las Etiquetas..." class="chosen-select" name="tags[]" multiple style="width:100%;" tabindex="4" id="tags">
                            <option value=""></option>
                            @foreach ($tagslist as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {{Form::label('imagen', 'Imagen', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                            {{Form::file('imagen',['class'=>'btn btn-info'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('primera', 'Primera', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                            {{Form::checkbox('primeras',1)}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-6">
                            {{ Form::submit('Save', ['name' => 'submit','class'=>'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection