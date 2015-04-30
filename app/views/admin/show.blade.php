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
		<section class="body-text">
			<a href="{{ '/admin/'.$post->id.'/edit'}}">
				<p class="subtitulo">{{$post->subtitulo}}</p>
			</a>
		</section>
		<section class="body-text">
			<a href="{{ '/admin/'.$post->id.'/edit'}}">
				<h2 class="titulo">{{$post->titulo}}</h2>
			</a>
		</section>
			<section class="body-text">
			<blockquote>
				<p class="descripcion">{{$post->descripcion}}</p>    
			</blockquote>
		</section>
		<section class="body-text">
			{{$post->contenido}}
		</section>
		<section class="author-detalles">
		
			<figure class="img-detalles">
				<a href="{{'/editor/'.$post->user->id}}"><img src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
				</a>
			</figure>
			<div class="contenido-detalles">
				<span>por</span><a href=""> {{$post->user->first_name}}, <span>{{$post->user->last_name}}</span></a>
			</div>
		</section>
		<div id="social_sharrre">
 			<div id="twitter" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
  			<div id="facebook" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
  			<div id="googleplus" data-url="http://sharrre.com/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
		</div><!-- end contenido social -->
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
				<li class="item">
					<article class="article"><!--  si -->
						<figure class="fimg">
							<img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
						</figure>
						<div class="author">
							<a href="{{'/editor/'.$post->user->id}}">Daniel Villalobos</a>
						</div>
						<div class="contenido">
							<a class="toPost" href="/2014/12/conoce-el-primer-trailer-oficial-de-terminator-genisys/" rel="">
								<h2 class="title">Conoce el primer tráiler oficial de Terminator: Genisys
								 Conoce el primer tráiler oficial de Terminator: Genisys</h2>
							</a>
						</div>
						<div class="actions">
							<ul>
								<li><a class="ng-binding">hace una hora</a></li>
								<li><a class="ng-binding icon-export">456</a></li>
							</ul>
						</div>
					</article>
				</li>
			</ul>
		</aside>
	
	{{ Form::open(array('action' => array('AdminController@destroy', $post->id ), 'method' => 'delete'))}}
      <button type="submit" class="btn btn-danger btn-mini">Delete</button>              
{{ Form::close() }}
{{ Form::open(array('action' => array('AdminController@edit', $post->id ), 'method' => 'get'))}}
      <button type="submit" class="btn btn-danger btn-mini">editar</button>              
{{ Form::close() }}

@stop

@section('show_js')
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