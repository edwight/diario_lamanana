@extends('layouts.master')
 
@section('edicion')


<div class="contenedor">
    
       <section class="productDetails">
    <div class="Product">
      <div id="owl-demo" class="product_hero owl-carousel owl-theme" style="opacity: 1; display: block;">
      <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="left: 0px; display: block;">

          <div class="owl-item">
            <div class="item">
            @if($revista->hojas)
            <a href="edicion/impreso/{{$revista->id}}">
               <img alt="#" src="{{Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resize', 370, 544) }}">
            </a>
            @endif
            </div>
          </div>

        </div>
      </div>

    </div>
      </div><!--end product -->

      <div class="title_description">
        
    </div><!-- end title_description -->
    <div class="bg_blur">
      
    </div>
    </section>
  <section class="recent_issues" ng-hide="totalSize==1">
    <h4>Números recientes</h4>
    <div id="demo">
      <div class="row">
        @foreach($revistas as $revista)
        <div class="block">
          <a href="edicion/impreso/{{$revista->id}}">
            <div class="item">
              <img class="lazyOwl" alt="#" src="{{Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resizeCrop', 195, 264) }}">
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- end recent_issues -->


    </div><!-- end contenedor -->

  @stop