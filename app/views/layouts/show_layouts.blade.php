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
					<a href="/categoria/{{$post->category->slugCategory}}"><p>{{$post->category->name}}</p></a>
				</section>
				<section class="fecha">
					<p>{{ date("d F Y",strtotime($post->created_at)) }}</p>
				</section>
				<section class="subtitulo">
						<p class="subtitulo">{{$post->contenido->subtitulo}}</p>
				</section>
				<section class="body-text">
					<h2 class="titulo">{{$post->titulo}}</h2>
				</section>
				@if($post->contenido->descripcion)
					<section class="body-text">
						<blockquote>
							<p class="descripcion">{{$post->contenido->descripcion}}</p>    
						</blockquote>
					</section>
				@endif
				<section class="body-text">
					{{$post->contenido->contenido}}
				
				</section>
				<section class="author-detalles">
				
					<figure class="img-detalles">
						<a href="{{'/editor/'.$post->user->id.'/'.$post->user->slugUser}}">
							<img src="{{ Image::path('/imgs/users/'.$post->user->perfil->photo, 'resize', 60, 60) }}">
						</a>
					</figure>
					<div class="contenido-detalles">
						<span>por</span><a href="{{'/editor/'.$post->user->id.'/'.$post->user->slugUser}}"> {{$post->user->name}}</a>
					</div>
				</section>
				
			<!--end socialite -->
				<p class="ct-tags">
				Etiquetados con:
				@foreach ($post->tags as $tags)
				  <a href="/etiquetas/{{$tags->slugTags}}" rel="tag">{{$tags->name}}</a> 
				@endforeach
				</p>		
			</div>
			<div class="comentarios"></div>
		</article>