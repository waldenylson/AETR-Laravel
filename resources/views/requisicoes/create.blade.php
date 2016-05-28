@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-edit"></i>
        Preencher Requisição Viatura
    </h2>
    <hr />
    {!! Form::open(['route' => 'requisicoes.store']) !!}
    @include('requisicoes.partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger fancybox-item fancybox-close" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
