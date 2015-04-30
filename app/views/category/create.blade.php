

{{ Form::open(array('action' => 'CategoryController@store' ))}}
    {{ Form::label('category', 'Category')}}
    {{ Form::text('category', '')}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}