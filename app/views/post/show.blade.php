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
					<img src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
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
							<img src="{{ Image::path('/imgs/user/'.$post->user->perfil->photo, 'resize', 458, 150) }}">
						</a>
					</figure>
					<div class="contenido-detalles">
						<span>por</span><a href="{{'/editor/'.$post->user->id}}"> {{$post->user->first_name}}, <span>{{$post->user->last_name}}</span></a>
					</div>
				</section>
				<div id="social_sharrre">
 					 <div id="twitter" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
  					<div id="facebook" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
  					<div id="googleplus" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
				</div><!-- end contenido social -->
			<!--end socialite -->
				<p class="ct-tags">
				Etiquetados con:
				@foreach ($post->tags as $tags)
				  <a href="etiquetas/{{$tags->slugTags}}" rel="tag">{{$tags->name}}</a> 
				@endforeach
				</p>		
			</div>
			<div class="comentarios"></div>
		</article>
		<aside class="aside-detalles--col2">
			<ul class="list">
				
			</ul>
		</aside>
</div><!-- end contenedor -->
		<footer class="footer-main">
			
		</footer> 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		{{ HTML::script('js/jquery.sharrre.min.js') }}
		<script>
		$('#twitter').sharrre({
		  share: {
		    twitter: true
		  },
		  template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span>Tweet</div></a>',
		  enableHover: false,
		  enableTracking: true,
		  buttons: { twitter: {via: '_JulienH'}},
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
 
<script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>
<script src="https://connect.facebook.net/en_GB/all.js" id="facebook-jssdk" async=""></script>   
  
@stop