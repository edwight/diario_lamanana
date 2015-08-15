@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario: {{$user->name}}</div>
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
                    {{ Form::model($user,['action'=>['UserController@update',$user->id],'class'=>'form-horizontal','role'=>'form','method' => 'PUT' ,'files' => true]) }}
                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::text('nombre', $user->name,['class'=>'form-control','name'=>'nombre'] )}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('email', 'Correo Eletronico', array('class' => 'col-md-4 control-label')) }}
                            <div class="col-md-6">
                                {{Form::text('email', $user->email,['class'=>'form-control','name'=>'email'] )}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::password('password', ['class'=>'form-control','name'=>'password'] )}}
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group has-warning">
                            <label class="col-md-4 control-label">descripcion</label>
                            <div class="col-md-6">
                                {{ Form::textarea('descripcion',$user->perfil->descripcion,['class'=>'form-control','name'=>'descripcion','id'=>'inputWarning2', 'aria-describedby'=>'inputWarning2Status'])}}
                            </div>
                        </div>

                        <div class="form-group has-warning">
                            {{Form::label('photo', 'Foto', ['class' => 'col-md-4 control-label','for'=>'inputWarning1']) }}
                            <div class="col-md-6 ">
                                {{Form::file('photo',['class'=>'btn btn-warning'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('type', 'Tipo de usuario', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::select('type',[''=>'selecione tipo','admin'=>'Administrador','editor'=>'Editor','user'=>'Usuarios'], null,['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registar
                                </button>
                            </div>
                        </div>
                     {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


    