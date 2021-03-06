@extends('layouts.master')
 
@section('index')
<div class="contenedor">
	<section class="section-main--col1">
		<div class="central-articulo">
	@foreach($user as $posts)
		@include('layouts.posts', ['posts'=>$posts])
	@endforeach	
	       <div class="paginate">
            {{ $user->links() }}
        <br>
        </div><!-- end paginated -->    
    </div><!-- end central articulo -->
    </section>
    @include('layouts.aside', array('chica'=>$chica,'revista'=>$revista))
</div><!-- end contenedor -->
   
@stop

@section('script_index')

    <script type="text/javascript">
        $(document).ready(function(){
            $('.section-main--col1 .central-articulo').masonry();
        });
    </script>
   
@stop