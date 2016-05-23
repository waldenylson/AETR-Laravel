<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">

    <link rel="stylesheet" href="{!! asset('bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.css') !!}">

	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<link rel="stylesheet" media="screen" type="text/css" href="{!! asset('bower_components/fancybox/source/jquery.fancybox.css?v=2.1.5') !!}">

    <style>body{margin-top: 80px;}</style>
</head>
<body class="container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fa fa-home">&nbsp;&nbsp;HOME&nbsp;</i>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown" role="menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
                       <i class="fa fa-keyboard-o">&nbsp;&nbsp;CADASTROS&nbsp;</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript;"><h7><i class="fa fa-car">&nbsp;&nbsp;VIATURAS</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="{{ route('viaturas.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                                <li><a class="fancybox" href="{{ route('viaturas.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                            </ul>
                        </li>
                        <li><a href="javascript;"><h7><i class="fa fa-tree">&nbsp;&nbsp;NATUREZAS</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="{{ route('naturezas.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                                <li><a class="fancybox" href="{{ route('naturezas.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                            </ul>
                        </li>
                        <li><a href="javascript;"><h7><i class="fa fa-users">&nbsp;&nbsp;EQUIPES</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="{{ route('equipe.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                                <li><a class="fancybox" href="{{ route('equipe.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                            </ul>
                        </li>

                        <li class="divider"></li>

                        <li><a href="javascript;"><h7><i class="fa fa-user">&nbsp;&nbsp;USUÁRIOS&nbsp;&nbsp;</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="{{ route('seguranca.relacionar') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                                <li><a class="fancybox" href="#">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" role="menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
                        <i class="fa fa-edit">&nbsp;&nbsp;REQUISIÇÕES&nbsp;</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="fancybox" href="{{ route('requisicoes.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Preencher</i></a></li>
                        <li><a class="fancybox" href="{{ route('requisicoes.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                    </ul>
                    {{--<li><a href="javascript;"><h7><i class="fa fa-user">&nbsp;&nbsp;TESTE&nbsp;&nbsp;</i></h7></a>
                        <ul class="dropdown-menu">
                            <li><a class="fancybox" href="#">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                            <li><a class="fancybox" href="#">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                        </ul>
                    </li>--}}
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">
                        <i class="fa fa-user"> {{ strtoupper($user['usu_login']) }}</i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('seguranca.logout') }}">
                        <i class="fa fa-sign-out"> SAIR&nbsp;&nbsp;</i>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
@yield('content')
	<script src="{!! asset('bower_components/jquery/dist/jquery.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.js') !!}" type="text/javascript"></script>

	<script src="{!! asset('bower_components/smartmenus/dist/jquery.smartmenus.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.js') !!}" type="text/javascript"></script>

	<script src="{!! asset('bower_components/fancybox/source/jquery.fancybox.js?v=2.1.5') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>