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
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h2>Iniciar sesión </h2>
									<div class="card-body card-padding">
										<form class="form-horizontal text-center" role="form" method="POST" action="{{ url('/login') }}">
											{{ csrf_field() }}

											<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<label for="email" class="col-md-4 control-label">E-Mail</label>

												<div class="col-md-6">
													<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="25">

													@if ($errors->has('email'))
													<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
													@endif
												</div>
											</div>

											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
												<label for="password" class="col-md-4 control-label">Contraseña</label>

												<div class="col-md-6">
													<input id="password" type="password" class="form-control" name="password" maxlength="20">

													@if ($errors->has('password'))
													<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</br>
										<div class="form-group text-center">
											<div class="col-md-6 col-md-offset-3">
												<button type="submit" class="btn btn-primary">
													<i class="fa fa-btn fa-sign-in"></i> Iniciar sesión
												</button>
												</br></br>
												<a class="btn btn-link" href="{{ url('/register') }}">No tienes cuenta? Regístrate</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<footer class="text-center">
			Smart.Net |  Todos los derechos reservados | privacidad | &copy; 2018
			<ul class="hi-menu" style="color: #000000; text-decoration: none;">
				<li><a href="#">Home</a></li>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</footer>
		@include('includes.footer_includes')
		@yield('after_includes')
	</body>
	</html>
