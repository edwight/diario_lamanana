@extends('layouts.master')
@section('show')
 
<div class="contenedor">
   	@include('layouts.show_layouts', ['post'=>$post])
		<aside class="aside-detalles--col2">
			<ul class="list">
				
			</ul>
		</aside>
</div><!-- end contenedor -->
		<footer class="footer-main">
			
		</footer> 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
 
<script src="https://platform.twitter.com/widgets.js" id="twitter-wjs" charset="utf-8" async=""></script>
<script src="https://connect.facebook.net/en_GB/all.js" id="facebook-jssdk" async=""></script>   
  
@stop