@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>Edit Post</h1>
		{!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{ Form::label('title','Title')}}
			{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title...'])}}
		</div>
		<div class="form-group">
			{{ Form::label('body','Content')}}
			{{ Form::textarea('message',$post->body,['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' => 'Enter Content...'])}}
		</div>
		{{ Form::hidden('_method','PUT')}}
		<div class="form-group"> 
			{{Form::file('cover_image')}}	
	
		</div>
		{{ Form::submit('Update',['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection