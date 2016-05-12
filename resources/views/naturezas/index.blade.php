@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-tree"></i>
        Naturezas de Missão Cadastradas
    </h2>
    <hr />
    @if(count($naturezas) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>TÍTULO</th>
                <th>DESCRIÇÃO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($naturezas as $natureza)
                <tr>
                    <td>{!! $natureza->titulo     !!}</td>
                    <td>{!! $natureza->descricao  !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('naturezas.edit', $natureza->id) !!}" class="btn btn-primary btn-xs">
                            <i class="fa fa-fw fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('naturezas.destroy', $natureza->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-fw fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma Natureza Cadastrada ainda!</h5>
    @endif
@stop
