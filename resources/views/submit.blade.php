<h1>Create a new Course</h1>
{{ Form::open(array('url' => 'handle')) }}
{{ Form::label('title', 'Title') }}
{{  Form::text("title") }}

{{ Form::label('description', 'Description') }}
{{ Form::textarea("title") }}

{{  Form::label("type", "Type") }}
{{ Form::select('type', App\Course::getEnum('types')) }}


<h2>Date and Location</h2>
{{ Form::date('name', \Carbon\Carbon::now()) }}
{{ Form::close() }}
