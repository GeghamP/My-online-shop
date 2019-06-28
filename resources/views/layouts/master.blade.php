<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>@yield('title')</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ URL::to('src/css/style.css') }}">
		<script src="https://kit.fontawesome.com/feea379495.js"></script>
		@yield('styles')
		
	</head>
	
	<body>
		@include('partials.header')
		<div class = "container">
			@yield('content')
		</div>	
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		@yield('scripts')
	</body>	
</html>