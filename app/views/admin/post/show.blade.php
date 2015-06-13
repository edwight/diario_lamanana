@extends('app')

@section('post')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registar</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

<div class="contenedor">
   <article class="article-detalles--col1">
	<section class="imagen-detalles">
	@if($post->img)
		<figure class="fimg">
			<img src="{{ Image::path('/imgs/post/'.$post->img->imagen, 'resize', 662, 432) }}" />
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
		<section class="body-text">
			<a href="">
				<p class="subtitulo">{{$post->contenido->subtitulo}}</p>
			</a>
		</section>
		<section class="body-text">
			<a href="">
				<h2 class="titulo">{{$post->titulo}}</h2>
			</a>
		</section>
			<section class="body-text">
			<blockquote>
				<p class="descripcion">{{$post->contenido->descripcion}}</p>    
			</blockquote>
		</section>
		<section class="body-text">
			{{$post->contenido->contenido}}
		</section>
		<section class="author-detalles">
		
			<figure class="img-detalles">
				<a href="{{'/editor/'.$post->user->id}}"><img src=".">
				</a>
			</figure>
			<div class="contenido-detalles">
				<span>por</span><a href=""> {{$post->user->name}}</a>
			</div>
		</section>
		
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
	
	{{ Form::open(['action' =>'AdminController@destroy', $post->id, 'method' => 'delete'])}}
      <button type="submit" class="btn btn-danger btn-mini">Delete</button>              
	{{ Form::close() }}
{{ Form::open(['action' =>'AdminController@edit', $post->id , 'method' => 'get'])}}
      <button type="submit" class="btn btn-danger btn-mini">editar</button>              
{{ Form::close() }}


              </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('style')
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
@stop