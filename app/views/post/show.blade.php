@extends('layouts.master')
@section('show')
 
<div class="contenedor">
   	@include('layouts.show_layouts', ['post'=>$post])
		<aside class="aside-detalles--col2">
			<ul class="list">
				
			</ul>
		</aside>
</div><!-- end contenedor -->
		
			
		
		
 
<script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>

  
@stop