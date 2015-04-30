<p>Bienbenido </p><strong>detalles</strong>
<div class="menu">
</div>
<p>{{ HTML::link( 'logout' , 'salir') }}</p>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('action' => array('UserController@update'), 'files' => true, 'method' => 'PUT')) }}
      {{Form::label('primer nombre', 'Primer nombre')}}
      {{Form::text('first_name', $user->first_name )}}
      {{Form::label('segundo nombre', 'Segundo Nombre')}}
      {{Form::text('last_name', $user->last_name)}}

      {{Form::label('email', 'Email')}}
      {{Form::text('email', $user->email)}}

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

      {{Form::submit('Guardar')}}
{{ Form::close() }}