<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">
	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<link rel="stylesheet" media="screen" type="text/css" href="{!! asset('bower_components/fancybox/source/jquery.fancybox.css?v=2.1.5') !!}">
	<style>body{margin-top: 70px;}</style>
</head>
<body class="container">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="/"><strong><i class="fa fa-home">&nbsp;HOME&nbsp;&nbsp;</i></strong></a>
    </div>

    <ul class="nav navbar-nav">
        <li m    >
            <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
               <i class="fa fa-car">&nbsp;&nbsp;VIATURAS&nbsp;</i><span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><h4><i class="fa fa-list">&nbsp;&nbsp;Listar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-search">&nbsp;&nbsp;Localisar</i></h4></a></li>
                <li><a class="fancybox" href="{{ route('viaturas.create') }}"><h4><i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-rotate-left">&nbsp;&nbsp;Atualisar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-traXsh">&nbsp;&nbsp;Remover</i></h4></a></li>
            </ul>
        </li>


        <li class="dropdown" role="menu">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
               <i class="fa fa-user">&nbsp;&nbsp;DESPACHANTES&nbsp;</i><span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><h4><i class="fa fa-list">&nbsp;&nbsp;Listar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-search">&nbsp;&nbsp;Localisar</i></h4></a></li>
                <li><a class="fancybox" href="{{ route('despachantes.create') }}"><h4><i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-rotate-left">&nbsp;&nbsp;Atualisar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-trash">&nbsp;&nbsp;Remover</i></h4></a></li>
               </ul>
        </li>
        <li class="dropdown" role="menu">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
               <i class="fa fa-envelope">&nbsp;&nbsp;NATUREZAS MISSÃO&nbsp;</i><span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><h4><i class="fa fa-list">&nbsp;&nbsp;Listar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-search">&nbsp;&nbsp;Localisar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-rotate-left">&nbsp;&nbsp;Atualisar</i></h4></a></li>
                <li><a href="#"><h4><i class="fa fa-trash">&nbsp;&nbsp;Remover</i></h4></a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
               <i class="fa fa-folder-open">&nbsp;&nbsp;NOVA REQUISIÇÂO&nbsp;</i>
            </a>
        </li>
    </ul>
</nav>
	@yield('content')
	<script src="{!! asset('bower_components/jquery/dist/jquery.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootbox/bootbox.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/fancybox/source/jquery.fancybox.js?v=2.1.5') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>