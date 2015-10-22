@extends ('master')

@section ('content')
<legend class="title">New Post</legend>
{!! Form::open(array('route' => 'posts.store')) !!}

@include('errors._validation')

@include('posts._form')

{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop