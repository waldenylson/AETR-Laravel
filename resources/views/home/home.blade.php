@extends('...templates.app')

@section('content')
<div class="well text-center">
    <img src="{!! asset('images/logocindacta.png') !!}" alt=""/>
    <h1>
        <span class="label label-default">AETR</span><br>
        <small>Controle de Viaturas</small>
    </h1>
</div>
<iframe src="" id="contentLoad" name="contentLoad" frameborder="0"></iframe>
@stop