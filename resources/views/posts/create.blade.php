@extends ('master')

@section ('content')
<legend class="title">New Post</legend>
{!! Form::open(array('route' => 'posts.store')) !!}

@include('errors._validation')

<div class="form-group">

   {!!Form::label('title', 'Post Title')!!}

   {!!Form::text('title', null, ['class' => 'form-control'])!!}

</div>

<div class="form-group">
	
	{!!Form::label('content', 'Post Content')!!}
	{!!Form::textarea('content', null, ['class' => 'form-control'])!!}

</div>

<div class="form-group">
	
	{!!Form::label('category_id', 'Category')!!}
	{!!Form::select('category_id', \App\Category::lists('title','id'),null, ['placeholder' => 'Pick Category', 'class' => 'form-control'])!!}
	
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop