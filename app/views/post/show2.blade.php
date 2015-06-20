@extends('layouts.master')

@section('style_index')
<style type="text/css">
    .publicidad_1{
      width: 150px;
      height: 700px;
      background-image: url("{{ asset('/imgs/publicidad/publicidad.gif') }}");
      background-size: 100% 100%;
      position: absolute;
      top: 40px;
      left: 15px;

    }
    .publicidad_2{
      width: 370px;
      height: 300px;
      background-image: url("publicidad.jpg");
      background-size: 100% 100%;
      position: absolute;
      top: 40px;
      right: 15px;

    }
  </style>
@stop
@section('show')
<div class="publi_1 publicidad_1">
 </div><!-- public_1 -->
<div class="contenedor">
   	@include('layouts.show_layouts', ['post'=>$post])
		<aside class="aside-detalles--col2">
			<ul class="list">
				@foreach($relatedArticles as $related)
                    @if($related->img)                 
				<li class="item">
					<article class="article" style="width:inherit"><!--  si -->
						<figure class="fimg">
							<img alt="" src="{{ Image::path('/imgs/post/'.$related->img->imagen, 'resize', 240, 240) }}" />
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
						<article id="box" class="article--no" style="height:120px; width:inherit"><!--  si -->
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
	

@stop

@section('script_index')
<script type="text/javascript">
        $(window).resize(function(){
          var pageWidth = $(window).width(); 
          if( pageWidth >= 1001){
              //alert(pageWidth);
              $('.publi_1').addClass('publicidad_1');
              //$("publicidad").addClass("intro");
            }
            else if( pageWidth <= 1000){
              $('.publicidad_1').removeClass('publicidad_1');
              
            }
        });
  </script>
  @stop
