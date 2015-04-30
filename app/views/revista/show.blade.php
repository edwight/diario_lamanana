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
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
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
      <th>foto</th>
      <th>editar</th>
      <th>eliminar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($revista->hojas as $hojas)
    <tr>
      <th scope="row">{{ $hojas->titulo }}</th>
        <td>
          <figure>
              <a href="."><img alt="" src="{{ Image::path('/imgs/revista/'.$hojas->revista->titulo.'/'.$hojas->titulo, 'resize', 150, 170) }}"/></a>
            </figure>
        </td>
      <td>  
         {{ Form::open(array('action' => array('RevistaController@edit', $hojas->id),'method' => 'get')) }}
          <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Editar</span>
          </button>
         {{ Form::close() }}
      </td>

      <td>  
    {{ Form::open(array('action' => array('EliminarHojasController@destroy', $hojas->id),'method' => 'delete')) }}
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