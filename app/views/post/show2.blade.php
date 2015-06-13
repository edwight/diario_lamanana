@extends('layouts.master')
@section('show')
<div class="contenedor">
   	@include('layouts.show_layouts', ['post'=>$post])
		<aside class="aside-detalles--col2">
			<ul class="list">
				@foreach($relatedArticles as $related)
                    @if($related->img)                 
				<li class="item">
					<article class="article"><!--  si -->
						<figure class="fimg">
							<img alt="" src="{{ Image::path('/imgs/post/'.$related->img->imagen, 'resize', 200, 240) }}" />
						</figure>
						<div class="author">
							<a href="{{'/editor/'.$related->user->id.'/'.$related->user->slugUser}}">{{$related->user->name}}</a>
						</div>
						<div class="contenido">
							<a class="toPost" href="{{'/'.$related->id.'/'.$related->slugPost }}" rel="">
								<h2 class="title">{{$related->titulo}} </h2>
							</a>
						</div>
						<div class="actions">
							<ul>
								<li><a class="time">{{ date("d F Y",strtotime($related->created_at)) }} </a></li>
								<li><a href="/categoria/{{$related->category->slugCategory}}" class="category">{{$related->category->name}}</a></li>
							</ul>
						</div>
					</article>
				</li>
					@else
					<li class="item">
						<article id="box" class="article--no" style="height:120px"><!--  si -->
							<div class="author--no">
								<a href="{{'/editor/'.$related->user->id.'/'.$related->user->slugUser}}">{{$related->user->name}}</a>
							</div>
							<div class="contenido">
								<a class="toPost" href="{{'/'.$related->id.'/'.$related->slugPost }}" rel="">
									<h2 class="title" style="font-size: 1.2rem;">{{$related->titulo}}</h2>
								</a>
							</div>
							<div class="actions">
								<ul>
									<li><a class="time">{{ date("d F Y",strtotime($related->created_at)) }} </a></li>
									<li><a href="/categoria/{{$related->category->slugCategory}}"class="category">{{$related->category->name}}</a></li>
								</ul>
							</div>
						</article>
					</li>
					@endif
				@endforeach
			</ul>
		</aside>
</div><!-- end contenedor -->
		<footer class="footer-main">
			
		</footer>  



		<!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		{{ HTML::script('js/jquery.sharrre.min.js') }}
		-->
@stop
