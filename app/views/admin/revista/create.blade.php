@extends('app')

@section('style')
   
    <script>Dropzone.autoDiscover = true;</script>
    {{ HTML::style('css/dropzone/dropzone.css') }}
   
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registar</div>
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
                    <h1>Bootstrap File Input Example</h1>
                   
                    {{ Form::open(['action' =>'RevistaController@store','files'=>true, 'method' => 'POST', 'data-ajax' => 'true', 'class' => 'dropzone', 'id' => 'my-awesome-dropzone'])}}
                      
                     {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
    {{ HTML::script('js/dropzone/fastclick.js') }}
    {{ HTML::script('js/dropzone/dropzone.js') }}
    {{ HTML::script('js/dropzone/primus.js') }}
    <script>Dropzone.autoDiscover = true;</script>
@stop


