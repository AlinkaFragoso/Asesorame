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
		<title>Asesora.me</title>
		@include('includes.head_includes')
	</head>
	<body>
		@include('includes.header')
		<section id="main">
			@yield('breadcrum')
			@include('includes.menu')
			<section id="content">
	            <div class="container">
	            	@yield('content')
	            </div>
	        </section>
        </section>
	    <a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>
	    @include('includes.footer')
	    @include('includes.footer_includes')
	    @yield('after_includes')
	</body>
</html>
