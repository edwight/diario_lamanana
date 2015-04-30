

{{ Form::open(array('action' => 'TagsController@store' ))}}
    {{ Form::label('tags', 'Tags')}}
    {{ Form::text('tags', '')}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}