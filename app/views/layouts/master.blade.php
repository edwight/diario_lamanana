<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    {{ Minify::stylesheet('/css/style.css') }}
	</head>
	<body>
    <header class="header-main" id="header">
<div class="contenedor-logo">
  <figure class="logo">

  </figure>
  <div class="publicidad"></div>
</div>
      <div class="share-bar">
    <div class="iconos">
      <a href="">
        <div class="icon facebook">&#xf09a;</div>
      </a>
      <a href="">
      <div class="icon twitter">&#xf099;</div>
      </a>
      <a href="">
              <div class="icon google">&#xf0d5;</div>
      </a>
      <a href="">
        <div class="icon rss">&#xf09e;</div>
      </a>
      <form id="demo-2">
    <input class="sb-icon-search" type="search" placeholder="Search">
    <span class="sb-icon-search"></span>
    </form>
    </div>
        <div id="headermain">
          <a href="#" class="bt-menu">&#xf0c9;</a>
          <div id="sb-search" class="sb-search">

        </div>

          </div></div>  
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
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js'></script>

    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script type="text/javascript">
        window.onscroll = function() {
            if (window.pageYOffset >= 200){
              jQuery('.share-bar').css({position: 'fixed'});
                $("#sb-search").addClass("logo");
            }
            else {
              jQuery('.share-bar').css({position: '', right: '', top: ''});
              $( "#sb-search" ).removeClass( "logo" )
            }
        }
      </script>

    <script type="text/javascript">
      $("document").ready(function(){
 
          $(".share-bar .bt-menu").click(menu);

          function menu(){
            $(".nav").toggle();
            $(".contenedor").toggle();  
            $(".contenedor-logo").toggle(); 
        }
      
      });
    </script>


    {{ Minify::javascript(array('/js/masonry.min.js','/js/modernizr.custom.js','/js/craftyslide.min.js'), array('charset' => 'utf-8')) }}

    @yield('script')
    
    @yield('show_js')
 
 
    <script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>
    
	</body>
</html>