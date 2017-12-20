<!DOCTYPE html>
<html lang="{{config('app.locale'),'en'}}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">  
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>{{config('app.name'),'Blog'}}</title>
</head>
<body><br>
    @include('layouts.navbar')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>