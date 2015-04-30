@extends('layouts.master')
@section('show')
<div class="contenedor">
   <article class="article-detalles--col1">
			<section class="imagen-detalles">		
			@if($post->img)
				<figure class="fimg">
					<img alt="" src="{{ Image::path('/imgs/post/'.$post->img->imagen, 'resize', 890, 480) }}" />
				</figure>
			@else
				<figure class="fimg">
					
				</figure>
			@endif
			</section>
			<div class="atras"></div>
			<div class="contenido-detalles">
				<section class="categoria">
					<a href="{{$post->category->slugCategory}}"><p>{{$post->category->name}}</p></a>
				</section>
				<section class="subtitulo">
						<p class="subtitulo">{{$post->subtitulo}}</p>
				</section>
				<section class="body-text">
					<h2 class="titulo">{{$post->titulo}}</h2>
				</section>
				@if($post->descripcion)
					<section class="body-text">
						<blockquote>
							<p class="descripcion">{{$post->descripcion}}</p>    
						</blockquote>
					</section>
				@endif
				<section class="body-text">
					{{$post->contenido}}
				
				</section>
				<section class="author-detalles">
				
					<figure class="img-detalles">
						<a href="{{'/editor/'.$post->user->id}}">
							<img src="{{ Image::path('/imgs/user/'.$post->user->perfil->photo, 'resize', 70, 70) }}">
						</a>
					</figure>
					<div class="contenido-detalles">
						<span>por</span><a href="{{'/editor/'.$post->user->id}}"> {{$post->user->first_name}}, <span>{{$post->user->last_name}}</span></a>
					</div>
				</section>
				<div id="social_sharrre">
 					 <div id="twitter" data-url="http://lamanana.com.ve/" data-text="{{$post->titulo}}"></div>
  					<div id="facebook" data-url="http://lamanana.com.ve/" data-text="{{$post->titulo}}"></div>
  					<div id="googleplus" data-url="http://lamanana.com.ve/" data-text="{{$post->titulo}}"></div>
				</div><!-- end contenido social -->
				<p class="ct-tags">
				Etiquetados con: 
				@foreach ($post->tags as $tags)
				  <a href="/etiquetas/{{$tags->slugTags}}" rel="tag">{{$tags->name}}</a> 
				@endforeach
				</p>	
					
			</div>
			<div class="comentarios"></div>
		</article>
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
							<a href="{{'/editor/'.$related->user->id}}">{{$related->user->first_name}}<span>{{$related->user->last_name}}</a>
						</div>
						<div class="contenido">
							<a class="toPost" href="{{'/'.$related->id.'/'.$related->slugPost }}" rel="">
								<h2 class="title">{{$related->titulo}} </h2>
							</a>
						</div>
						<div class="actions">
							<ul>
								<li><a class="time">{{ date("d F Y",strtotime($related->created_at)) }} </a></li>
								<li><a href="categoria/{{$related->category->slugCategory}}" class="category">{{$related->category->name}}</a></li>
							</ul>
						</div>
					</article>
				</li>
					@else
					<li class="item">
						<article id="box" class="article--no" style="height:120px"><!--  si -->
							<div class="author--no">
								<a href="{{'/editor/'.$related->user->id}}">{{$related->user->first_name}}<span>{{$related->user->last_name}}</span></a>
							</div>
							<div class="contenido">
								<a class="toPost" href="{{'/'.$related->id.'/'.$related->slugPost }}" rel="">
									<h2 class="title" style="font-size: 1.2rem;">{{$related->titulo}}</h2>
								</a>
							</div>
							<div class="actions">
								<ul>
									<li><a class="time">{{ date("d F Y",strtotime($related->created_at)) }} </a></li>
									<li><a href="categoria/{{$related->category->slugCategory}}"class="category">{{$related->category->name}}</a></li>
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
@section('show_js')
{{ Minify::javascript(array('/js/jquery.sharrre.min.js'))}}
<script>
			$('#twitter').sharrre({
			  share: {
			    twitter: true
			  },
			  template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span>Tweet</div></a>',
			  enableHover: false,
			  enableTracking: true,
			  buttons: { twitter: {via: 'LaManana15'}},
			  click: function(api, options){
			    api.simulateClick();
			    api.openPopup('twitter');
			  }
			});
			$('#facebook').sharrre({
			  share: {
			    facebook: true
			  },
			  template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span>Like</div></a>',
			  enableHover: false,
			  enableTracking: true,
			  click: function(api, options){
			    api.simulateClick();
			    api.openPopup('facebook');
			  }
			});
			$('#googleplus').sharrre({
			  share: {
			    googlePlus: true
			  },
			  template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span>Google+</div></a>',
			  enableHover: false,
			  enableTracking: true,
			  click: function(api, options){
			    api.simulateClick();
			    api.openPopup('googlePlus');
			  }
			});
		</script>
 
 
@stop