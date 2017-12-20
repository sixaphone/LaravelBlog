@extends('layouts.app')

@section('content')
	
<h1>Posts</h1>
	@if(count($posts)>0)
	<div class="text-left">

		@foreach($posts as $post)
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="Cover Image">	
				</div>

				<div class="col-md-8 col-sm-8">
					
					<a style="text-decoration: none; color:black;" href="/posts/{{$post->id}}"> <div class="container-fluid" style="background-color: #f2f2f2; border: 2px solid #dddddd;">
						<h4>{{$post['title']}}</h4>
						<p>{!! $post['body'] !!}</p>	
						<small>Created at {{$post->created_at}} by: {{$post->user->name}}</small>
						<br>
					</div>
					</a>
				</div>
			</div>

		</div>
		@endforeach
		{{$posts->links()}}
	</div>
	@endif
@endsection