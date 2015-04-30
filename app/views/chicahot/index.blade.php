<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		<title>Chica Hot</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		{{ HTML::style('chicahot/css/supersized.css', array('media' => 'screen')) }}
		{{ HTML::style('chicahot/theme/supersized.shutter.css', array('media' => 'screen')) }}
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		{{ Minify::javascript(array('/chicahot/js/jquery.easing.min.js','/chicahot/js/supersized.3.2.7.min.js','/chicahot/theme/supersized.shutter.min.js'), array('charset' => 'utf-8')) }}
	
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
					//autoplay no : 0, yes :1
					autoplay : 0,
					//Desactiva clic derecho y arrastre imagen usando Javascript.
					image_protect:1,
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
					

					// Components	
					slide_links				:	0,				
					//slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														
													
														@foreach($hot as $hots)
															{image : '{{ asset("imgs/chicahot/".$hots->img)}}', title : 'Imagen Credito: Diario la', thumb : '{{ Image::path("/imgs/chicahot/".$hots->img, "resize", 200, 150) }}'},
														@endforeach
														
												]
					
				});
		    });
		    
		</script>
		
	</head>
	
	<style type="text/css">
		ul#demo-block{ margin:0 15px 15px 15px; }
			ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url("{{ asset('chicahot/img/bg-black.png') }}"); font:11px Helvetica, Arial, sans-serif; }
			ul#demo-block li a{ color:#eee; font-weight:bold; }
	</style>

<body>

	<!--Demo styles (you can delete this block)-->
	
	<ul id="demo-block">
		<li><a href="/"><img src="http://localhost:8000/chicahot/img/chicahot.png"/></a></li>
	</ul>
	
	<!--End of styles-->

	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src='http://localhost:8000/chicahot/img/pause.png'/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			
			<a id="tray-button"><img id='tray-arrow' src='http://localhost:8000/chicahot/img/button-tray-up.png'/></a>
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>

</body>
</html>
