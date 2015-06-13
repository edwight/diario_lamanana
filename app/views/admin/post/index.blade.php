@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Post index 
				
				<!-- Single button -->
				<div class="btn-group">
  					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    					Action <span class="caret"></span>
  					</button>
  					<ul class="dropdown-menu" role="menu">
					    <li style="list-style:none;"><a href="#">Nuevo</a></li>
					    <li style="list-style:none;"><a href="#">lista</a></li>
					    <li style="list-style:none;"><a href="#">Something else here</a></li>
					    <li style="list-style:none;" class="divider"></li>
					    <li style="list-style:none;"><a href="#">Separated link</a></li>
  					</ul>
				</div>
                </div><!-- end panel heading -->
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<div class="contenedor">
						<section class="section-main--col1">
							<div class="central-articulo">
							@foreach($post as $posts)
								@include('layouts.posts', ['posts'=>$posts])
							@endforeach	
	            <div class="paginate text-center">
	                {{ $post->links() }}
	            </div>
        	</div>
    	</div>
    </div>
</div>
        
@stop

@section('style')
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
@stop

