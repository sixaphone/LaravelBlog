@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default"><i class="fa fa-arrow-left"> </i> Go Back</a>
	<hr>
	<img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="Cover Image">	
	<hr>
	<h1>{{$post->title}}</h1>
	
	<hr>
	<div>
		<h4>
			{!!$post->body !!}
		</h4>
	</div>
	<hr>
	<small>Created at {{$post->created_at}} by: {{$post->user->name}}</small>
	<hr>
	@if(Auth::user())
		@if(auth()->user()->id === $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
			{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST', 'class' => 'pull-right']) !!}
			{{ Form::hidden('_method','DELETE')}}
		 	{{ Form::submit('Delete',['class' => 'btn btn-danger'])}}
			{!! Form::close() !!}
		@endif
	@endif
	<hr>
@endsection