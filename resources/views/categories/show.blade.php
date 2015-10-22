@extends ('master')
@section ('content')

<h1>{{ $category->title}}</h1>
	<p>Category: <em>{{ $category->category->title}}</em></p>
	<p>{{ $category-> content}}</p>
	<a href="/categories">Back</a>
@stop