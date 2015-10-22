@extends ('master')

@section ('content')
<legend class="title">New Category</legend>
{!! Form::open(array('route' => 'categories.store')) !!}

@include('errors._validation')

<div class="form-group">
	
	{!!Form::label('title', 'Title')!!}
	{!!Form::text('title', null, ['class' => 'form-control'])!!}
	
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop