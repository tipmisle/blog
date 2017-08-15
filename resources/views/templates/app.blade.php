<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		@yield('header')
		
		<div class="container">
			@yield('main')
		</div>
	</body>
</html>