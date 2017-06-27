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

        <form class="register-form" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}

            <h3>Registar</h3>
            <p class="hint">
                Preencha sua credenciais abaixo:
            </p>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Nome</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Nome" name="name"/>
                @include('partials.input-errors', ['input' => 'name'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Usuário</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Usuário" autocomplete="off" name="username"/>
                @include('partials.input-errors', ['input' => 'username'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Senha</label>
                <input class="form-control placeholder-no-fix" type="password" placeholder="Senha" autocomplete="off" name="password"/>
                @include('partials.input-errors', ['input' => 'password'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Confirmação de Senha</label>
                <input class="form-control placeholder-no-fix" type="password" placeholder="Confirmação de Senha" autocomplete="off" name="password_confirmation"/>
                @include('partials.input-errors', ['input' => 'password_confirmation'])
            </div>

            <div class="form-actions">
                <a href="{{ route('login') }}" class="btn btn-default">Voltar</a>
                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Continuar</button>
            </div>
        </form>

</div>

<div class="copyright">
    {{ date('Y') }} &copy; {{ config('app.name') }}
</div>

@include('partials.scripts')
</body>
</html>