<!doctype html>
<html lang="es">
<head>
<title>index impreso</title>

<script type="text/javascript" src="js/magazine.js"></script>
<link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"></link>


</head>
<body>

<div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                {{ Form::open(array('action' => array('RevistaController@create'),'method' => 'get')) }}
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Crear</span>
                </button>
                {{ Form::close() }}

                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Fecha de Edición</th>
      <th>eliminar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($revista as $revistas)
    <tr>
      <th scope="row">{{ $revistas->id }}</th>
      <td>{{ $revistas->titulo }}</td>
      <td>  
         {{ Form::open(array('action' => array('RevistaController@show', $revistas->id),'method' => 'get')) }}
          <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Editar</span>
          </button>
         {{ Form::close() }}
      </td>

      <td>  
         {{ Form::open(array('action' => array('RevistaController@destroy', $revistas->id),'method' => 'delete')) }}
          <button type="submit" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Eliminar</span>
          </button>
         {{ Form::close() }}
      </td>
  @endforeach
   
	</tbody>
</table>
</body>
</html>
