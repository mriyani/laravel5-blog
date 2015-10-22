@extends ('master')

@section ('content')

{!! Form::model($post,array('route' => array('posts.update', $post->id), 'method' => 'put')) !!}

@include('errors._validation')

<legend class="title">Edit Post</legend>

@include('categories._form')

{!! Form::submit('Update', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop