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
				{{ Form::open(array('action' => 'TagsController@store' ))}}
				<div class="form-group">
                        {{Form::label('tags', 'Tags', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-10 ">
                            {{Form::text('tags', null,['class'=>'form-control','name'=>'tags','placeholder'=>'Etiqueta'] )}}
                        </div>
                    </div>
				{{ Form::submit('Save', ['name' => 'submit']) }}
				{{ Form::close() }}
			</div>
        </div>
     </div>
    </div>
</div>
@endsection