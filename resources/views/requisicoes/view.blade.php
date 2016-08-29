@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-eye"></i>
        Visualizar Requisição Viatura
    </h2>
    <hr />
    {!! Form::model($requisicao, ['class' => 'form-disable']) !!}
    @include('requisicoes.partials.form-view')
    <a href="{!! route('requisicoes.print', $requisicao->id) !!}" class="btn btn-success btn-xs">
        <i class="fa fa-print"></i>&nbsp;&nbsp;Imprimir&nbsp;
    </a>
    <a id="btn-cancelar" class="btn btn-warning btn-xs">
        <i class="fa fa-close"></i>&nbsp;&nbsp;Cancelar&nbsp;&nbsp;&nbsp;
    </a>
    {!! Form::close() !!}
@stop
