<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/app_login.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="login-content">
    <div class="lc-block toggled" id="l-login">

        <div class="row">
            <div align="center" class="col-xs-12">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="img-responsive"
                                              style="padding-bottom: 40px"/></a>
            </div>
        </div>
        <div class="lcb-form">

            @if (session('status'))
                <div class="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {!! csrf_field() !!}

                <div class="input-group m-b-20 form-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}"
                               required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    <div class="fg-line {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Senha" class="form-control" name="password"
                               required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-login btn-success"><i class="zmdi zmdi-arrow-forward"></i></button>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </form>
        </div>

        <div class="lcb-navigation">
            <a href="" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i>
                <span>Esqueceu a senha? </span></a>
        </div>
    </div>

    <!-- Register -->
    <div class="lc-block" id="l-register">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="row">
                <div align="center" class="col-xs-12">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="img-responsive"
                                                  style="padding-bottom: 40px"/></a>
                </div>
            </div>
            <div class="lcb-form">
                <div class="input-group m-b-20 form-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-group m-b-20 form-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-group m-b-20 form-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    <div class="fg-line {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="Senha" name="password" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-group m-b-20 form-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    <div class="fg-line">
                        <input type="password" class="form-control" placeholder="Confirmar senha" name="password_confirmation" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></button>
            </div>
        </form>
        <div class="lcb-navigation">
            <a href="" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i>
                <span>Entrar</span></a>
            <a href="" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Esqueceu a senha? </span></a>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="lc-block" id="l-forget-password">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="row">
                <div align="center" class="col-xs-12">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="img-responsive"
                                                  style="padding-bottom: 40px"/></a>
                </div>
            </div>
            <div class="lcb-form">
                <p class="text-left">Informe seu endereço de e-mail que enviaremos um email com o link para o cadastro
                    da nova senha.</p>

                <div class="form-group">
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required placeholder="Endereço de E-mail">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-login btn-success btn-float"><i
                            class="zmdi zmdi-check"></i></button>
            </div>
        </form>

        <div class="lcb-navigation">
            <a href="" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i>
                <span>Entrar</span></a>
            <a href="" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Registrar</span></a>
        </div>
    </div>

</div>

<!-- Javascript Libraries -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>

<script src="{{ asset('js/appLayout.min.js') }}"></script>
</body>
</html>