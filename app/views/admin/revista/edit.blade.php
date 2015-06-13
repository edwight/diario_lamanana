@extends('app')

@section('style')
<link href="{{ asset('/css/fileinput/fileinput.css') }}" rel="stylesheet">
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
                    {{ Form::open(['action'=>'RevistaController@store','class'=>'form-horizontal','role'=>'form', 'files'=>true, 'method' => 'POST','enctype'=>'multipart/form-data']) }}
                       <div class="form-group">
                            <input name="file" id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                        </div>
                     {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript" src="{{ asset('/js/fileinput/fileinput.min.js') }}"></script>
<script>
$("#file-3").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>



@stop

    