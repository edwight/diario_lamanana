
{{ HTML::ul($errors->all()) }}


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{ HTML::style('css/lib/editor/font-awesome.min.css') }}
    {{ HTML::style('css/lib/editor/froala_editor.min.css') }}
    {{ HTML::style('css/lib/editor/froala_style.min.css') }}
    <!--    multiples Select css-->
    {{ HTML::style('select/docsupport/style.css') }}
    {{ HTML::style('select/docsupport/prism.css') }}
    {{ HTML::style('select/chosen.css') }}


    <style>
        body {
            text-align: center;
        }
        .formulario {
          display: block;
          margin: 20px;

        }
        .formulario input {
          margin: 10px 0;
        }
        section, .side-by-side{
            width: 100%;
            max-width: 1200px;
            margin: auto;
            text-align: left;
        }
        .columna1--admin{
            width: 30%;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
<div class="formulario">
{{ Form::open(array('action' => array('AdminController@update', $post->id ),'files'=>true, 'method' => 'PUT'))}}
    
    {{ Form::text('subtitulo', $post->subtitulo, array('size' => '150')) }}
    {{ Form::text('titulo', $post->titulo, array('size' => '150')) }}
    {{ Form::textarea('descripcion',$post->descripcion, array('size' => '150x5')) }}
    <section id="editor">
      <textarea id="edit" name="contenido">{{$post->contenido}}</textarea>
    </section>
     <!--
    <section id="editor">
        <div name="contenido" id='edit' style="margin-top: 30px;">
       
          </div>
    </section>
    -->
    <div class="side-by-side clearfix">
        <div class="columna1--admin">
              <select data-placeholder="Selecione un Editor..." name="editor" class="chosen-select" style="width:350px;" tabindex="2" id="editor">
                <option value="{{$post->user->id}}">{{$post->user->first_name}}, <span>{{ $post->user->last_name }}</span></option>
                @foreach (User::all() as $users)
                <option value="{{ $users->id }}">{{ $users->first_name }}, <span>{{ $users->last_name }}</span></option>
                 @endforeach
              </select>
            <select data-placeholder="Seleciones las Etiquetas..." class="chosen-select" name="tags[]" multiple style="width:350px;" tabindex="4" id="tags">
                <option value=" "></option>
                    @foreach (Tag::all() as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
            </select>
            <select data-placeholder="Selecione una Categoria..." name="categorys" class="chosen-select" style="width:350px;" tabindex="2" id="categorys">
                    <option value="{{$post->category->id}}">{{$post->category->name}}</option>
                    @foreach (Category::all() as $categorys)
                        <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="columna1--admin">
             {{ Form::label('imagen','File',array('id'=>'imagen')) }}
            {{ Form::file('imagen','',array('class'=>'imagen')) }}
        </div>
        <div class="columna1--admin">
        {{Form::label('primeras', 'Primeras')}}
        @if($post->primeras)
          {{Form::checkbox('primeras', $post->primeras, true)}}
        @else
          {{Form::checkbox('primeras', $post->primeras)}}
        @endif
        </div>
    </div>
    
    
    {{-- More fields... --}}
    
    {{ Form::submit('Save', ['name' => 'submit']) }}

</div><!--end formulario -->
    
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
 {{ HTML::script('select/chosen.jquery.js') }}
 {{ HTML::script('select/docsupport/prism.js') }}
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
{{ Form::close() }}

 {{ HTML::script('js/lib/editor/libs/jquery-1.11.1.min.js') }}
  {{ HTML::script('js/lib/editor/froala_editor.min.js') }}
  <!--[if lt IE 9]>
    <script src="js/lib/editor/froala_editor_ie8.min.js"></script>
  <![endif]-->
    {{ HTML::script('js/lib/editor/plugins/tables.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/lists.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/colors.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/font_family.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/font_size.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/block_styles.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/media_manager.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/video.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/char_counter.min.js') }}

  <script>
      $(function(){
        $('#edit').editable({inlineMode: false})
      });
  </script>
  
</body>
</html>
