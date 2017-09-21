<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.ico') }}"/>
		<meta charset="utf-8">
		<title>@yield('title') | Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<meta name="theme-color" content="@yield('color')">
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
		<meta name='date' content='@yield('date')'>
		<meta name="author" content="Josip Rajković">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<meta name='robots' content='index,follow'>
		<meta name='medium' content='blog'>

	
	</head>
	<body>
			@include('templates.partials.navbar')	
		<div class="container">
			@yield('main')
		</div>
		<footer>
			<div class="container">
				<p>All right reserved. Josip Rajkovič &copy; 2017</p>
			</div>
		</footer>
	</body>
	@yield('script')
	
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="		sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  	crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="{{ URL::asset('js/basic.js') }}"></script>
	<script>
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    	}
			});
	</script>
</html>