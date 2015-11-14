<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">
	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<style>body{margin-top: 70px;}</style>
</head>
<body class="container">
	@yield('content')
	<script src="{!! asset('bower_components/jquery/dist/jquery.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootbox/bootbox.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/fancybox/source/jquery.fancybox.js?v=2.1.5') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>