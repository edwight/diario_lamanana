@extends('app')

@section('post')
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                   <section class="series">


    <h1 class="page-title">Modulos de Administracion</h1>

    
    <h2>Modulo Administracion </h2>
    <div class="artlist">
    <article class="serie">
        <a href="{{ asset('/admin/posts') }}" title="modulo posts">
        <picture>
            <img src="{{ asset('/imgs/admin/posts--thumb.png') }}" alt="Modulo Noticias">
        </picture>
    </a>
    <h2 class="azul-laravel5-1">Modulo Noticias</h2>
    <p>Comienza a Crear, Editar, Eliminar Noticia</p>
</article>



<article class="serie">
        <a href="{{ asset('/admin/users') }}" title="modulo de usuario">
        <picture>
            <img src="{{ asset('/imgs/admin/users--thumb.png') }}" alt="modulo usuario">
        </picture>
    </a>
    <h2 class="naranja">Modulo Usuarios</h2>
    <p>Comienza a Crear, Editar, Eliminar Usuarios</p>
</article>

<article class="serie">
        <a href="{{ asset('/admin/chicahot/') }}" title="Modulo ChicaHot">
        <picture>
            <img src="{{ asset('/imgs/admin/chicahots--thumb.png') }}" alt="modulo ChicaHot">
        </picture>
    </a>
    <h2 class="naranja">Modulo Chica Hot</h2>
    <p>Comienza a Crear, Editar, Eliminar Usuarios</p>
</article>

<article class="serie">
        <a href="{{ asset('/admin/tags/') }}" title="Modulo Etiquetas">
        <picture>
            <img src="{{ asset('/imgs/admin/tags--thumb.png') }}" alt="Modulo Etiqueta">
        </picture>
    </a>
    <h2 class="naranja-f">Modulo Etiquetas</h2>
    <p>Comienza a Crear, Editar, Eliminar Etiquetas</p>
</article>
<article class="serie">
        <a href="{{ asset('/admin/category') }}" title="Modulo Categoria">
        <picture>
            <img src="https://styde.net/images/series/1x/vagrant-laravel-homestead.jpg" alt="Modulo Categoria">
        </picture>
    </a>
    <h2 class="azul-c">Modulo Categoria</h2>
    <p>Comienza a Crear, Editar, Eliminar Categorias</p>
</article>  

<article class="serie">
        <a href="{{ asset('/admin/edicion/') }}" title="Modulo Revista">
        <picture>
            <img src="{{ asset('/imgs/admin/magazine--thumb.png') }}" alt="Modulo Revista">
        </picture>
    </a>
    <h2 class="azul-c">Modulo Revista</h2>
    <p>Comienza a Crear, Editar, Eliminar Revista</p>
</article>  

<article class="serie">
        <a href="{{ asset('/admin/edicion/') }}" title="Modulo Anuncios">
        <picture>
            <img src="{{ asset('/imgs/admin/anuncios--thumb.png') }}" alt="Modulo Anuncios">
        </picture>
    </a>
    <h2 class="azul-c">Modulo Anuncios</h2>
    <p>Comienza a Crear, Editar, Eliminar Anuncios</p>
</article>

<article class="serie">
        <a href="{{ asset('/admin/edicion/') }}" title="Modulo Estadistica">
        <picture>
            <img src="{{ asset('/imgs/admin/estadisticas--thumb.png') }}" alt="Modulo Estadistica">
        </picture>
    </a>
    <h2 class="azul-c">Modulo Estadistica</h2>
    <p>mide Anuncios</p>
</article>

</div>
   


</section>
            </div>
        </div>
    </div>
</div>






<style type="text/css">
	.series .artlist {
  margin-right: -30px;
  width:100%;
}
.series .serie {
  overflow:hidden;
  position: relative;
  /* -webkit-transition-property: all; */
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  /* transition-property: all; */
  /* -webkit-transition-duration: 160ms; */
  -moz-transition-duration: 160ms;
  -ms-transition-duration: 160ms;
  -o-transition-duration: 160ms;
  /* transition-duration: 160ms; */
  /* -webkit-transition-timing-function: linear; */
  -moz-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  
  transition-timing-function: linear;
  padding-bottom: 30px !important;
  border: solid 1px #e9e9e9;
  text-align: left;
  margin: 0 24px 24px 0;
  -webkit-box-shadow: 0px 2px 1px 0px #ccc;
  -moz-box-shadow: 0px 2px 1px 0px #ccc;
  -ms-box-shadow: 0px 2px 1px 0px #ccc;
  -o-box-shadow: 0px 2px 1px 0px #ccc;
  box-shadow: 0px 2px 1px 0px #ccc;
  
  overflow: hidden;
  padding: 15px;
  width: 315px;
  display: inline-block;
  background: #fff;
  -moz-border-radius-topleft: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-bottomright: 6px;
  -moz-border-radius-bottomleft: 6px;
  
  vertical-align: top;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  
  -webkit-box-sizing: border-box; */
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
}
.series .serie a {
  text-decoration: none;
  color: #666;
}
.series .serie h2.azul-laravel5-1 {
  color: #00aad4;
}
.series .serie h2 {
  margin: 20px 0 15px 0;
  font-size: 18px;
}
.series .serie h2 {
  font-size: 16px;
  margin: 0;
  font-weight: normal;
}
.series .serie img {
  margin: -15px -15px 10px -15px;
  display: block;
  max-width: 315px !important;
}

</style>

	
@stop