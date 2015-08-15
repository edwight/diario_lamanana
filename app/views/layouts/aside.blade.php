<aside class="aside-main--col3">
				<section class="list--col1">
					<figure class="chica" style="margin:10px 5px; height: 270px;">
						<a href="http://localhost:8000/hot/chicahot"><img style="width:100%; height:270px;" alt="" src="{{ Image::path('/imgs/chicahot/'.$chica->img, 'resize', 276, 184) }}"/></a>
					</figure>
				</section>
				<section class="list--col2">
					<figure class="chica" style="margin:10px 5px;">
						<a href="/edicion">
						@if($revista->hojas)
				            <img alt="#" src="{{Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resize', 370, 544) }}">
				        @else
							<img style="width:100%; height:270px;" alt="#" src="{{Image::path('/imgs/revista/1.jpg', 'resize', 370, 544) }}">
          				@endif	
						</a>
					</figure>	
 				</section>
				<section class="list--col3">
					
					<!-- --------------------------------------------contenedor twitter -------------------------------------------->
<a class="twitter-timeline" href="https://twitter.com/LaManana15" data-widget-id="453290806774738945">Tweets por @LaManana15</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



 <!-- -------------------------------------------- end contenedor twitter -------------------------------------------->
				</section>
				<section class="list--col3">
					
					<!-- --------------------------------------------contenedor facebook -------------------------------------------->
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Lamanana/658497187550386" data-width="300px" data-height="300px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

 <!-- -------------------------------------------- end contenedor facebook -------------------------------------------->
				</section>
	</aside>