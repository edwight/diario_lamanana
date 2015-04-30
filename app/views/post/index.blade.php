@extends('layouts.master')
 
@section('index')
<div class="contenedor">
	<section class="section-main--col1">
		<div id="slideshow">
        <ul>
        @foreach($primera as $primeras)
		@if($primeras->img)
          <li>  
          	<a href="{{'/'.$primeras->id.'/'.$primeras->slugPost }}"><img src="{{ Image::path('/imgs/post/'.$primeras->img->imagen, 'resize', 602, 400) }}" alt="" title="{{$primeras->titulo}}"/></a>      
          </li>
        @endif
		@endforeach                        
        </ul>
		</div>   <!-- end carrusel -->
		<div class="central-articulo">
	@foreach($post as $posts)
		@if($posts->descripcion && $posts->img && $posts->subtitulo)
			<article id="box" class="article--first"><!--  si -->
					<figure class="fimg--first">
						<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resize', 458, 150) }}" />
					</figure>
					<div class="author">
						<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}<span>{{$posts->user->last_name}}</span></a>
					</div>
					<div class="contenido">
						<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
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
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}<span>{{$posts->user->last_name}}</span></a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}} </h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ date("d F Y",strtotime($posts->created_at)) }} </a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		
		@else
			<article id="box" class="article--no"><!--  si -->
				<div class="author--no">
					<a href="{{'/editor/'.$posts->user->id}}">{{$posts->user->first_name}}<span>{{$posts->user->last_name}}</span></a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ date("d F Y",strtotime($posts->created_at)) }} </a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}"class="category">{{$posts->category->name}}</a></li>
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
            <div class="paginate text-center">
                {{ $post->links() }}
            </div>
        </div>
    </div>
        
 
@stop

@section('index_js')


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

    <script>
       $('.section-main--col1 .central-articulo').infinitescroll({
			speed         	: 'fast',
            navSelector     : ".paginate",
            nextSelector    : ".pagination li a:last",
            itemSelector    : "#box",
            debug           : false,
            dataType        : 'html',
            maxPage			: 9,
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