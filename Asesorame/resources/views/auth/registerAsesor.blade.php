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
                <div class="row">
                    <div class="col-md-8">
                        @if(Session::has('flash_message_registro'))
                          <div class="alert alert-success" role="alert">{{ Session::get('flash_message_registro') }}</div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h2>Registro de asesor </h2>
                                <div class="card-body card-padding">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registro/asesor') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre*</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="nombre" maxlength="40">

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail*</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" maxlength="25" required>

                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Contraseña*</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" maxlength="20" required>

                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirmación de contraseña*</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" maxlength="20" required>

                                                @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Cuéntanos por qué te gustaría ser asesor*</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" name="comentario" rows="5" placeholder="Porque..." required></textarea>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">¿Qué temas te gustaría impartir?*</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" name="experiencia" rows="5" placeholder="Temas..." required></textarea>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn fa-user"></i> Registrarme
                                                </button>
                                            </div>
                                        </br></br>
                                        <div style="display: inline-block;">
                                            <a class="btn btn-link" href="{{ url('/login') }}">Iniciar sesión</a>
                                            <a class="btn btn-link" href="{{ url('/register') }}">Registro de asesorado</a>
                                        </div>
                                        </div>
                                    </form>
                                </div>
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
