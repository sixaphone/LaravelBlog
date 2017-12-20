@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center"  style="margin-top: 5%;">
		<h1>Home</h1>
		<p class="lead">WELCOME YOUNGLINGS</p><br>
		@guest
		<p><a class="btn btn-lg btn-success" href="/register" role="button">Sign up today</a></p>
		<p><a class="btn btn-lg btn-info" href="/login" role="button">Log in tomorrow</a></p>
		@else
		<p>{{auth()->user()->name}}</p>
		<p>{{auth()->user()->email}}</p>
		
		@endguest
	</div>
@endsection