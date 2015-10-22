@extends ('master')

@section ('content')

{!! Form::model($category,array('route' => array('categories.update', $category->id), 'method' => 'put')) !!}

@include('errors._validation')

<legend class="title">Edit Category</legend>

@include('categories._form')

{!! Form::submit('Update', ['class' => 'btn btn-primary'])!!}

{!! Form::close() !!}

@stop