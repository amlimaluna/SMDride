<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.styles')

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>

<div class="logo">
    <a href="{{ url('/') }}">
        {{ config('app.name') }}
    </a>
</div>

<div class="content">

    <form class="login-form" action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

        <h3 class="form-title">Entrar</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
			Entre com suas credenciais </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Usuário</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="Usuário" name="username"/>
            @include('partials.input-errors', ['input' => 'username'])
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Senha</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="Senha" name="password"/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Login</button>
            <label class="rememberme check">
                <input type="checkbox" name="remember" value="1"/>Lembrar de mim </label>
        </div>
        <div class="create-account">
            <p>
                <a href="{{ route('register') }}" id="register-btn" class="uppercase">Crie uma conta</button>
            </p>
        </div>
    </form>

</div>

<div class="copyright">
    {{ date('Y') }} &copy; {{ config('app.name') }}
</div>

@include('partials.scripts')
</body>
</html>