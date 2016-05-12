<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">

    <link rel="stylesheet" href="{!! asset('bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.css') !!}">

	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<link rel="stylesheet" media="screen" type="text/css" href="{!! asset('bower_components/fancybox/source/jquery.fancybox.css?v=2.1.5') !!}">

    <style>body{margin-top: 70px;}</style>
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
                        <li class="dropdown-header"><h5><i class="fa fa-car">&nbsp;&nbsp;VIATURAS</i></h5></li>
                        <li><a class="fancybox" href="{{ route('viaturas.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                        <li><a class="fancybox" href="{{ route('viaturas.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header"><h5><i class="fa fa-tree">&nbsp;&nbsp;NATUREZAS</i></h5></li>
                        <li><a class="fancybox" href="{{ route('naturezas.create') }}">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                        <li><a class="fancybox" href="{{ route('naturezas.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>

                        <li><a href="#">Separated link</a></li>
                        <li>
                            <a href="#"><h5><i class="fa fa-car">&nbsp;&nbsp;TESTE</i></h5></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">A long sub menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="disabled">
                                            <a class="disabled" href="#">Disabled item</a>
                                        </li>
                                        <li><a href="#">One more link</a></li>
                                        <li><a href="#">Menu item 1</a></li>
                                        <li><a href="#">Menu item 2</a></li>
                                        <li><a href="#">Menu item 3</a></li>
                                        <li><a href="#">Menu item 4</a></li>
                                        <li><a href="#">Menu item 5</a></li>
                                        <li><a href="#">Menu item 6</a></li>
                                        <li><a href="#">Menu item 7</a></li>
                                        <li><a href="#">Menu item 8</a></li>
                                        <li><a href="#">Menu item 9</a></li>
                                        <li><a href="#">Menu item 10</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Another link</a></li>
                                <li><a href="#">One more link</a></li>
                            </ul>
                        </li>
                    </ul>
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