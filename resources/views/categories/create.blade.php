@extends ('master')

@section ('content')

{!! Form::open(array('route' => 'categories.store')) !!}

@include('errors._validation')

<legend class="title">New Category</legend>

@include('categories._form')

{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop