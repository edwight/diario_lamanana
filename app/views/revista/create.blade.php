<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8">
	<title></title>

	{{ HTML::script('js/dropzone/fastclick.js') }}
	{{ HTML::script('js/dropzone/dropzone.js') }}
	<script>Dropzone.autoDiscover = true;</script>
	{{ HTML::style('css/dropzone/dropzone.css') }}
	{{ HTML::script('js/dropzone/primus.js') }}
	


</head>
<body>

{{ Form::open(array('action' => array('RevistaController@store' ),'files'=>true, 'method' => 'POST', 'data-ajax' => 'true', 'class' => 'dropzone', 'id' => 'my-awesome-dropzone'))}}

	
    {{-- More fields... --}}
    

{{ Form::close() }}
</body>
</html>
