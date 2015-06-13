@extends('layouts.master')
 
@section('index')
<div class="contenedor">
	<section class="section-main--col1">
		<div class="central-articulo">
	@foreach($searchResult as $posts)
		@if($posts->descripcion && $posts->img && $posts->subtitulo )
			<article id="box" class="article--first"><!--  si -->
					<figure class="fimg--first">
						<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resize', 458, 150) }}" />
					</figure>
					<div class="author">
						<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
					</div>
					<div class="contenido">
						<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
							<h2 class="title">{{$posts->titulo}}</h2>
						</a>
					</div>
					<div class="actions">
						<ul>
							<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }} </a></li>
							<li><a href="/categoria/{{($posts->category->slugCategory)}}" class="category">{{$posts->category->name}}</a></li>
						</ul>
					</div>
			</article>
		@elseif($posts->img)
			<article id="box" class="article"><!--  si -->
				<figure class="fimg">
					<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resize', 200, 240) }}" />
				</figure>
				<div class="author">
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}} </h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }}</a></li>
						<li><a href="/categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		
		@else
			<article id="box" class="article--no"><!--  si -->
				<div class="author--no">
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }}</a></li>
						<li><a href="/categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		@endif
	@endforeach	
	</div><!-- end central articulo -->
	</section>
	@include('layouts.aside', array('chica'=>$chica,'revista'=>$revista))
</div><!-- end contenedor -->
<div class="paginacion">
           
        </div>
    </div>
        
 
@stop

@section('index_js')
	 {{ Minify::javascript(array('/js/infinite-scroll/test/debug.js','/js/infinite-scroll/jquery.infinitescroll.js','/js/infinite-scroll/behaviors/manual-trigger.js'), array('charset' => 'utf-8')) }}

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
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.section-main--col1 .central-articulo').masonry();
		});
    </script>
   
@stop