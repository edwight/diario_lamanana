<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8">
  <title>edit</title>


  


</head>
<body>

  {{Form::open(array('action' => array('RevistaController@update', $hojas->id),'files'=>true,'method' => 'put')) }}
  {{Form::file('file')}}
  
    {{-- More fields... --}}
    <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Enviar</span>
    </button>

{{ Form::close() }}
</body>
</html>
