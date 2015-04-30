<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
</head>

<body>
{{ HTML::ul($errors->all()) }}
{{ Form::open(array('action' => array('ChicahotController@store' ),'files'=>true, 'method' => 'POST'))}}
    
    {{ Form::label('titulo', 'Titulo') }}
    {{ Form::text('titulo', '') }}
     
    {{ Form::label('file','File',array('id'=>'file')) }}
    {{ Form::file('photo','',array('class'=>'photo')) }}
    

    
    
    {{-- More fields... --}}
    
    {{ Form::submit('Save', ['name' => 'submit']) }}


    
    

  
</body>
</html>
