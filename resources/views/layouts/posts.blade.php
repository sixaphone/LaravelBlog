<!DOCTYPE html>
<html lang="{{config('app.locale'),'en'}}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">  
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<title>{{config('app.name'),'Blog'}}</title>
</head>

<body><br>
    @include('layouts.navbar')
	<div class="container">
    @include('posts.messages')
		@yield('content')
	</div>
</body>




    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

</html>