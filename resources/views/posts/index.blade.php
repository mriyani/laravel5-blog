@extends ('master')
@section ('content')

<table class="table table-striped">
	<tr>
		<th>Title</th>
		<th>Content</th>
		<th>Category</th>
		<th>Action</th>
	</tr>
@foreach ($posts as $post)
	<tr>
		<td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
		<td>{{ str_limit($post->content,20) }}</td>
		<td>{{ $post->category->title }}</td>
		<td><a href="{{route('posts.edit', ['posts' => $post->id])}}">Edit</a></td>
	</tr>
@endforeach
</table> 
@stop