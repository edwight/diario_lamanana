<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    {{ Minify::stylesheet('/css/style.css') }}
	</head>
	<body>
    <header class="header-main">
      <div class="share-bar">
          <div id="headermain">
          <a href="#" class="bt-menu"></a>
          <div id="sb-search" class="sb-search">
           {{ Form::open(array('action' => array('BusquedaController@postBusqueda'),'method' => 'POST')) }}
           {{ Form::text('search', '', array('class' => 'sb-search-input','placeholder'=>'búsqueda por título...','id'=>'search')) }}
            
            <input class="sb-search-submit" type="submit" value="">
            {{ Form::submit('Save', array('class' => 'sb-search-submit','type'=>'submit','value'=>' ')) }}
            <span class="sb-icon-search"></span>
          {{ Form::close() }}
        </div>
        <a href="/"><figure class="logo"></figure></a>
          </div>  
        </div>
    </header>
    <nav class="nav">
    <div class="info"><p>El Diario de Mayor Circulación en Falcón </p></div>
    <ul class="nav-list">
    @foreach(Category::all() as $categorias)
        <li><a href="/categoria/{{$categorias->slugCategory}}"><span class="icon-"></span>{{$categorias->name}}</a></li>
    
    @endforeach   
    </ul>
    <ul class="nav-menu">
       <div id="tag_cloud-3" class="footer-widget widget_tag_cloud">
       <h2 class="footer-head">Etiquetas</h2>
          <div class="tagcloud">
          @foreach(Tag::take(60)->get() as $tags)
            <a href="/etiquetas/{{$tags->slugTags}}" class="tag-link-72" title="{{$tags->name}}" style="font-size: 12px;">{{$tags->name}}</a>
          @endforeach
            </div>
          </div>
    </ul>
    <div class="acerca">
      <p></p>
      <p>Estamos Ubicados en:</p>
      <p>
      <strong>Coro:</strong>  Calle Zamora 64-1
      <strong> Punto Fijo:</strong> Calle Libertad esquina AV. Mexico
      </p>
      <p>Contacto de Aviso: </p>
      <p>
      <strong>avisoscoro@hotmail.com</strong>, <strong>avisoscoro@gmail.com</strong>
      </p>
      <p>
         <strong>Coro:</strong>   +(58) 0268 251.86.67  <strong>Punto Fijo</strong>   +(58) 069 246.85.16  
      </p>
        La mañana © - by-nc-sa (cc) {{date('Y')}}. Algunos derechos reservados. El contenido de este sitio está licenciado bajo CreativeCommons.
      </p>
    </div>
  </nav>
		@yield('index')
		@yield('show')
    @yield('edicion')

    <!--
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script type="text/javascript">
      $("document").ready(function(){
 
          $(".share-bar .bt-menu").click(alerta);

          function alerta(){
            $(".nav").toggle();
            $(".contenedor").toggle();
          
        }
      
      });
    </script>    
    {{ Minify::javascript(array('/js/masonry.min.js','/js/modernizr.custom.js','/js/craftyslide.min.js','/js/classie.js','/js/uisearch.js'), array('charset' => 'utf-8')) }}

    @yield('index_js')
    
    @yield('show_js')
 
    <!-- ----------------search ---------------- 
     {{ HTML::script('js/search/classie.js') }}
     {{ HTML::script('js/search/uisearch.js') }}
     -->
    <script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>
	</body>
</html>