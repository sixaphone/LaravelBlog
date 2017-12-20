@extends('layouts.template')

@section('content')

	<div class="jumbotron text-center"  style="margin-top: 10%;">
		<h1>{{$title}}</h1>
		<p class="lead">WELCOME YOUNGLINGS</p><br>
		<p><a class="btn btn-lg btn-success" href="/signup" role="button">Sign up today</a></p>
		<p><a class="btn btn-lg btn-info" href="login" role="button">Log in tomorrow</a></p>
	</div>

          
@endsection