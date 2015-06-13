@extends('layouts.master')
 
@section('index')
<div class="contenedor">
	<section class="section-main--col1">
		<div class="central-articulo">
	@foreach($user as $posts)
		@include('layouts.posts', ['posts'=>$posts])
	@endforeach	
	</div><!-- end central articulo -->
	</section>
	@include('layouts.aside', array('chica'=>$chica,'revista'=>$revista))
</div><!-- end contenedor -->
	<div class="paginacion">
	    <div class="paginate text-center">
	        {{ $user->links() }}
	    </div>
	</div>
</div>
@stop

@section('index_js')


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

    <script type="text/javascript">
    	$(document).ready(function(){
			$('.section-main--col1 .central-articulo').masonry();
		});
    </script>
@stop