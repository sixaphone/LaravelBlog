@extends('layouts.app')
@section('content')
	<h1 class="text-center">{{$title}}</h1>
	@if(count($services)>0)
	<div class="text-center" >
	<ul class="list-unstyled list-group" style="margin:auto;width:20%;">
		@foreach($services as $service)
			<li class="list-group-item">{{$service}}</li>
		@endforeach
	</ul>
	</div>
	@endif
@endsection
