<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     @yield('head')
    {{ Minify::stylesheet('/css/style.css') }}
    @yield('style_index')
    <style type="text/css">
      .publicidad-header{
        position: absolute;
        top: 0;
        right: 0;
        max-width:740px;
        width: 45%;
        height: 100%;
        max-height: 200px;
        overflow:hidden;
      }
      .publicidad-header img{
        width:100%;
        height:100%;
      }
    </style>
	</head>
	<body>
  <!-- --------------------------------- facebook widget -------------------------------------------- -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- -------------------------------------- end facebook widget --------------------------------------------- -->

    <header class="header-main" id="header">
      <div class="contenedor-logo">
          <a href="/">
            <figure class="logo"></figure>
          </a>
          <div class="publicidad-header">
            <img  src="{{asset('/imgs/publicidad/baner.png') }}">
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
            </form>
          </div>
          <div id="headermain">
            <a href="#" class="bt-menu">&#xf0c9;</a>
              <div id="sb-search" class="sb-search"></div>
          </div>
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
  </nav>
		@yield('index')
		@yield('show')
    @yield('edicion')
    @include('layouts.footer')
    <!--
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    -->
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js'></script>

    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script type="text/javascript">
        window.onscroll = function() {
            if (window.pageYOffset >= 200){
              jQuery('.share-bar').css({position: 'fixed'});
                $("#sb-search").addClass("logo2");
            }
            else {
              jQuery('.share-bar').css({position: '', right: '', top: ''});
              $( "#sb-search" ).removeClass( "logo2" )
            }
        }
      </script>

    <script type="text/javascript">
      $("document").ready(function(){
 
          $(".share-bar .bt-menu").click(menu);

          function menu(){
            $(".nav").toggle();
            $(".contenedor").toggle();  
            //$(".contenedor-logo").toggle(); 
        }
      
      });

    </script>
    
    <script type="text/javascript">
        $(window).resize(function(){
          var pageWidth = $(window).width(); 
          if( pageWidth >= 1005){
              //alert(pageWidth);
              if($('.publicidad-header img').length){
                $('.publicidad-header img').attr('src', "{{asset('/imgs/publicidad/baner.png') }}");
              }
              else{
                $(".publicidad-header").append(" <img src='{{asset('/imgs/publicidad/baner.png') }}'/>");
              }
              
              //$('.publicidad-header').addClass('publicidad-header');
              //$('.publicidad-header img').attr('src', "{{asset('/imgs/publicidad/baner.png') }}");
              //$("publicidad").addClass("intro");
            }
            else if( pageWidth <= 1000){
              $('.publicidad-header > img').remove();
              //$('.publicidad-header img').removeAttr('src');
              //$('.publicidad-header').removeClass('publicidad-header');
              
            }
        });
  </script>

    {{ Minify::javascript(array('/js/masonry.min.js','/js/modernizr.custom.js','/js/craftyslide.min.js'), array('charset' => 'utf-8')) }}

    @yield('script_index')
    
 
 
    <script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>
    
	</body>
</html>