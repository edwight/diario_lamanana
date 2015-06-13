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
				@include('layouts.posts', ['posts'=>$posts])
			@endforeach	
			<div class="paginate">
				 {{ $post->links() }}
				<br>
			</div><!-- end paginated -->	
		</div><!-- end central articulo -->
	</section>
@include('layouts.aside', array('chica'=>$chica,'revista'=>$revista))
</div><!-- end contenedor -->
    
@stop

@section('script')


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
    


    <!-- 
    {{ HTML::script('js/masonry.min.js') }}
    -->
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.section-main--col1 .central-articulo').masonry();
		});
    </script>
@stop