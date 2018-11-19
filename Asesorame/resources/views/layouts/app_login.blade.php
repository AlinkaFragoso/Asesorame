<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Asesora.me') }}</title>
		@include('includes.head_includes_login')
	</head>
	<body>
		<div class="login-content">
			@yield('content')
        </div>
        @include('includes.footer_includes_login')
    </body>
</html>
