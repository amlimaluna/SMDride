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
<body class="page-md login" style="background: #674ea7 !important">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>

<div class="logo">
    <a href="{{ url('/') }}">
       <img src = "{{ asset('/images/logorealoficial.png') }}" style="height:80px"/> 
    </a>
</div>

<div class="content">

        <form class="register-form" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}

            <h3 style="color: #674ea7">Registar</h3>
            <p class="hint">
                Preencha sua credenciais abaixo:
            </p>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Nome:</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Nome e Sobrenome" name="name" value="{{old('name')}}"/>
                @include('partials.input-errors', ['input' => 'name'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Usuário:</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Usuário" autocomplete="off" name="username" value="{{old('username')}}"/>
                @include('partials.input-errors', ['input' => 'username'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Senha:</label>
                <input class="form-control placeholder-no-fix" type="password" placeholder="Senha (no mínimo 6 caracteres)" autocomplete="off" name="password" value="{{old('password')}}"/>
                @include('partials.input-errors', ['input' => 'password'])
            </div>

            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Confirmação de Senha:</label>
                <input class="form-control placeholder-no-fix" type="password" placeholder="Confirmação de Senha" autocomplete="off" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                @include('partials.input-errors', ['input' => 'password_confirmation'])
            </div>

            <div class="form-actions">
                <a href="{{ route('login') }}" class="btn btn-default">Voltar</a>
                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" style="background: #FFA500">Continuar</button>
            </div>
        </form>

</div>

<div class="copyright" style="color: #FFF">
    {{ date('Y') }} &copy; {{ config('app.name') }}
</div>

@include('partials.scripts')
</body>
</html>