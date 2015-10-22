@extends ('master')

@section ('content')
<legend class="title">New Post</legend>
{!! Form::open(array('route' => 'categories.store')) !!}

@include('errors._validation')

@include('categories._form')

{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop