@extends('layouts.app')

@section('content')
	
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{ Form::label('title','Title')}}
			{{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Enter Title...'])}}
		</div>
		<div class="form-group">
			{{ Form::label('body','Content')}}
			{{ Form::textarea('message','',['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' => 'Enter Content...'])}}
		</div>
		<div class="form-group"> 
			{{Form::file('cover_image')}}	
	
		</div>
		{{ Form::submit('Post',['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection