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
		<td>
			{!! Form::model($post,array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
			<a href="{{route('posts.edit', ['posts' => $post->id])}}">Edit</a>
			{!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
			{!! Form::close() !!}
		</td>
	</tr>
@endforeach
</table> 
@stop