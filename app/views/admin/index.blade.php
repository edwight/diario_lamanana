@extends('layouts.master')

@section('index')
<div class="contenedor">
	<section class="section-main--col1">
		<div class="central-articulo">
	@foreach($post as $posts)
		@if($posts->descripcion && $posts->img && $posts->subtitulo)
			<article id="box" class="article--first"><!--  si -->
					<figure class="fimg--first">
						<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resize', 458, 150) }}" />
					</figure>
					<div class="author">
						<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
					</div>
					<div class="contenido">
						<a class="toPost" href="{{'/admin/'.$posts->id }}" rel="">
							<h2 class="title">{{$posts->titulo}}</h2>
						</a>
					</div>
					<div class="actions">
						<ul>
							<li><a class="time">{{ date("d F Y",strtotime($posts->created_at)) }} </a></li>
							<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
						</ul>
					</div>
			</article>
		@elseif($posts->img)
			<article id="box" class="article"><!--  si -->
				<figure class="fimg">
					<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resize', 178, 120) }}" />
				</figure>
				<div class="author">
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/admin/'.$posts->id }}" rel="">
						<h2 class="title">{{$posts->titulo}} </h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ date("d F Y",strtotime($posts->created_at)) }}</a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		
		@else
			<article id="box" class="article--no"><!--  si -->
				<div class="author--no">
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/admin/'.$posts->id }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ date("d F Y",strtotime($posts->created_at)) }} </a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		@endif
	@endforeach	
	</section>
	<aside class="aside-main--col3">
		<section class="list--col1"><a href=""><img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg"></a></section>
		<section class="list--col2">avances</section>
		<section class="list--col3">twitter</section>
	</aside>
</div><!-- end contenedor -->
<div class="col-span-12">
            <div class="paginate text-center">
                {{ $post->links() }}
            </div>
        </div>
    </div>
        
 
@stop

@section('index_js')
<!-- 
	{{ HTML::script('js/lazyload.min.js') }}
-->
     <script type="text/javascript">
    	$(function() {
    		$("img.lazy").lazyload({
     			container: $(".section-main--col1"),
     			effect: "fadeIn"
				});		 
		});
    </script>
    <!-- 
	{{ HTML::script('js/carrusel/craftyslide.min.js') }}
	-->
		<script>
			$("#slideshow").craftyslide({
			        'width': '95%',
			        'height': 400,
			        'pagination': false,
			        'fadetime': 500,
			        'delay': 2500
			      });	
      	</script> 
    {{ Minify::javascript(array('/js/infinite-scroll/test/debug.js','/js/infinite-scroll/jquery.infinitescroll.js','/js/infinite-scroll/behaviors/manual-trigger.js'), array('charset' => 'utf-8')) }}
    <!--
	{{ HTML::script('js/infinite-scroll/test/debug.js') }}
    {{ HTML::script('js/infinite-scroll/jquery.infinitescroll.js') }}
    {{ HTML::script('js/infinite-scroll/behaviors/manual-trigger.js') }}
    -->
    <script>
       $('.section-main--col1 .central-articulo').infinitescroll({
            navSelector     : ".paginate",
            nextSelector    : ".pagination li a:last",
            itemSelector    : "#box",
            debug           : false,
            dataType        : 'html',
            maxPage			: 4,
            path: function(index) {
                return "?page=" + index;
            }
            }, function(newElements, data, url){
            var $newElems = $( newElements );
            $('.section-main--col1 .central-articulo').masonry( 'appended', $newElems, true);
        });
    </script>
    <!-- 
    {{ HTML::script('js/masonry.min.js') }}
    -->
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.section-main--col1 .central-articulo').masonry();
		});
    </script>
@stop