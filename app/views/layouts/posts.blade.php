@if($posts->contenido->descripcion && $posts->img && $posts->contenido->subtitulo)
			<article id="box" class="article--first"><!--  si -->
					<figure class="fimg--first">
						<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resizeCrop', 458, 150) }}" />
					</figure>
					<div class="author">
						<a href="{{'/editor/'.$posts->user->id.'/'.$posts->user->slugUser}}">{{$posts->user->name}}</a>
					</div>
					<div class="contenido">
						<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
							<h2 class="title">{{$posts->titulo}}</h2>
						</a>
					</div>
					<div class="actions">
						<ul>
							<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }} </a></li>
							<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
						</ul>
					</div>
			</article>
		@elseif($posts->img)
			<article id="box" class="article"><!--  si -->
				<figure class="fimg">
					<img alt="" src="{{ Image::path('/imgs/post/'.$posts->img->imagen, 'resizeCrop', 178, 120) }}" />
				</figure>
				<div class="author">
					<a href="{{'/editor/'.$posts->user->id.'/'.$posts->user->slugUser}}">{{$posts->user->name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}} </h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }} </a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}" class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		
		@else
			<article id="box" class="article--no"><!--  si -->
				<div class="author--no">
					<a href="{{'/editor/'.$posts->user->id.'/'.$posts->user->slugUser}}">{{$posts->user->name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'/'.$posts->id.'/'.$posts->slugPost }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{ $posts->getCarbonAgo($posts->created_at) }} </a></li>
						<li><a href="categoria/{{$posts->category->slugCategory}}"class="category">{{$posts->category->name}}</a></li>
					</ul>
				</div>
			</article>
		@endif