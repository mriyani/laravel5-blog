@extends ('master')
@section ('content')

<h1>{{ $post->title}}</h1>
	<p>Category: <em>{{ $post->category->title}}</em></p>
	<p>{{ $post-> content}}</p>
	<a href="/posts">Back</a>
@stop