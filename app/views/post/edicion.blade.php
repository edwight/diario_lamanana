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
            <a href="edicion/impreso/{{$revista->id}}">
               <img alt="#" src="{{Image::path('/imgs/revista/'.$revista->titulo.'/'.$revista->hojas->first()->titulo, 'resize', 370, 544) }}">
            </a>
            </div>
          </div>

        </div>
      </div>

    </div>
      </div><!--end product -->

      <div class="title_description">
        <p class="date-magazine">June 2015</p>
        <h1 class="ng-binding">WIRED</h1>
        <div class="body_copy">
      <section ng-controller="TabController as tab" class="ng-scope">
        <ul>
          <li ng-class="{ tabActive: tab.isSet(1) }" class="tabActive">
            <a ng-class="{ active: tab.isSet(1) }" href="" ng-click="tab.setTab(1)" class="active">Descripción</a>
          </li>

          <li ng-class="{ tabActive: tab.isSet(2) }">
            <a ng-class="{ active: tab.isSet(2) }" href="" ng-click="tab.setTab(2)" style="text-transform:uppercase;">detalles</a>
          </li>
        </ul>
        <hr>
        <div ng-show="tab.isSet(1)" class="">
          <h6 class="ng-binding">STUFF, la revista de estilo de vida del hombre del siglo XXI.</h6>
          <p class="ng-binding">STUFF es la “Biblia” para conocer la última tecnología. Imprescindible para quienes quieren estar “un paso por delante”. STUFF se dirige a un público muy interesado en conocer lo último en tecnología, utilizando un tono informal y accesible.</p>
        </div>
        <div ng-show="tab.isSet(2)" class="ng-hide">
          <table cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td colspan="2">
                  <p style="margin-top:0;margin-bottom:10px;">*Precio con IVA incluido</p>
                </td>
              </tr>
            </tbody>
          </table>
          <span style="font-weight:bold;text-transform:uppercase" class="platforms">Disponible en:</span>
          <ul class="platformNamesText">
            <li ng-repeat="platform in issue.platforms" ng-if="platform.name=='iPad'" class="ng-scope">iPad</li>
            <li ng-repeat="platform in issue.platforms" ng-if="platform.name=='iPhone'" class="ng-scope">iPhone</li>
            <li ng-repeat="platform in issue.platforms" ng-if="platform.name=='Win 8'" class="ng-scope">Win8</li>
            <li ng-repeat="platform in issue.platforms" ng-if="platform.name=='Android PDF'" class="ng-scope">Android</li>
            <li ng-repeat="platform in issue.platforms" ng-if="platform.name=='Zinio Reader 4'" class="ng-scope">ZR4</li>
          </ul>
        </div>
      </section>
    </div>
    </div><!-- end title_description -->
    <div class="bg_blur">
      <img  src="http://imgs.zinio.com/dag/500671272/2015/416340769/cover.jpg?width=450">
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
        <div class="block">
          <a href="/">
            <div class="item">
              <img class="lazyOwl" alt="#" src="http://imgs.zinio.com/dag/500671272/2015/416335099/cover.jpg?width=200&amp;height=262">
            </div>
          </a>
        </div>

        <div class="block ng-scope" ng-repeat="singleIssue in backIssueData" ng-if="$index != 0">
          <a href="http://www.zinio.com/www/browse/issue.jsp?skuId=416331491&amp;offerId=500447383&amp;subscription=true">
            <div class="item">
              <img class="lazyOwl" ng-src="http://imgs.zinio.com/dag/500671272/2015/416331491/cover.jpg?width=200&amp;height=262" alt="#" src="http://imgs.zinio.com/dag/500671272/2015/416331491/cover.jpg?width=200&amp;height=262">
            </div>
          </a>
        </div>

        <div class="block ng-scope" ng-repeat="singleIssue in backIssueData" ng-if="$index != 0">
          <a href="http://www.zinio.com/www/browse/issue.jsp?skuId=416331491&amp;offerId=500447383&amp;subscription=true">
            <div class="item">
              <img class="lazyOwl" ng-src="http://imgs.zinio.com/dag/500671272/2015/416331491/cover.jpg?width=200&amp;height=262" alt="#" src="http://imgs.zinio.com/dag/500671272/2015/416331491/cover.jpg?width=200&amp;height=262">
            </div>
          </a>
        </div>
      </div>
    </div>
  </section><!-- end recent_issues -->


    </div><!-- end contenedor -->

  @stop