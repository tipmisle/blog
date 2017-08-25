<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title') | Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	</head>
	<body>
			@include('templates.partials.navbar')	
		<div class="container">
			@yield('main')
		</div>
	</body>
	@yield('script')
</html>