@extends('layouts.master')
 
@section('edicion')
			<div class="contenedor">
				<section class="section-main--col1">
				<ul class="book_thumbs">
					<li class="book-big" style="float:left;">
               			<a href="edicion/impreso/{{$revista->id}}">
               				<img src="{{ Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resize', 276, 184) }}">
               			</a>
          			</li>

          			@foreach ($revistas as $revista)
          			@if($revista->id < $revista->max('id'))
          			<li style="float:left;">
               			<a href="edicion/impreso/{{$revista->id}}">
                    		<img src="{{ Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resize', 276, 184) }}">
               			</a>
          			</li>
          			@endif
          			@endforeach
          		</ul>
			</section>
	</section>
	@include('layouts.aside', array('chica'=>$chica,'revista'=>$revista))
</div><!-- end contenedor -->	
		</div><!-- end contenedor -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
          
    <!-- carga lazyload -->
    
     @stop
	</body>

</html>