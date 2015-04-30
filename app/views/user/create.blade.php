
  {{ HTML::ul($errors->all()) }}

{{ Form::open(array('action' => array('UserController@store'), 'files' => true)) }}
    {{Form::label('primer nombre', 'Primer nombre')}}
    {{Form::text('first_name', Input::old('first_name') )}}
    {{Form::label('segundo nombre', 'Segundo Nombre')}}
    {{Form::text('last_name', Input::old('last_name'))}}

    {{Form::label('email', 'Email')}}
    {{Form::text('email',Input::old('email'))}}

    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}

    {{Form::label('descripcion', 'Descripcion')}}
    {{Form::text('descripcion', '')}}

    {{Form::label('facebook', 'Facebook')}}
    {{Form::text('facebook', '')}}

    {{Form::label('twitter', 'Twitter')}}
    {{Form::text('twitter', '')}}

    {{ Form::label('file','File',array('id'=>'file')) }}
    {{ Form::file('photos','',array('class'=>'photos')) }}

    {{Form::label('editor', 'Editor')}}
    {{ Form::checkbox('editor', '1') }}

    {{Form::label('user', 'User')}}
    {{ Form::checkbox('user', '1', true) }}


    {{Form::submit('Guardar')}}
    {{ Form::close() }}
