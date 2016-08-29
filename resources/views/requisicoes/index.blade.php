@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-edit"></i>
        Requisições de Viatura Cadastradas
    </h2>
    <hr />
    @if(count($requisicoes) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>NÚMERO</th>
                <th>REQUISITANTE</th>
                <th>VIATURA</th>
                <th>NATUREZA MISSÃO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($requisicoes as $requisicao)
                <tr>
                    <td>{!! $requisicao->id            !!}</td>
                    <td>{!! $requisicao->requisitante  !!}</td>
                    <td>{!! $requisicao->viatura->modelo  !!}</td>
                    <td>{!! $requisicao->natureza->titulo  !!}</td>


                    <td width="1%" nowrap>
                        @if($requisicao->finalizada == 0)
                            <a href="{!! route('requisicoes.edit', $requisicao->id) !!}" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>&nbsp;&nbsp;editar&nbsp;
                            </a>

                            <a href="{!! route('requisicoes.destroy', $requisicao->id) !!}" class="btn btn-danger btn-xs btn-remover">
                                <i class="fa fa-remove"></i>&nbsp;&nbsp;remover&nbsp;
                            </a>

                            <a href="{!! route('requisicoes.updateStatus', $requisicao->id) !!}" class="btn btn-warning btn-xs btn-finalizar">
                                <i class="fa fa-power-off"></i>&nbsp;&nbsp;Finalizar&nbsp;&nbsp;&nbsp;
                            </a>

                            <a class="btn btn-info btn-xs">
                                <i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar&nbsp;
                            </a>

                            <a href="{!! route('requisicoes.print', $requisicao->id) !!}" class="btn btn-info btn-xs">
                                <i class="fa fa-print"></i>&nbsp;&nbsp;Imprimir&nbsp;
                            </a>
                        @else
                            <a class="btn btn-info btn-xs" disabled>
                                <i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;Finalizada&nbsp;
                            </a>

                            <a href="{!! route('requisicoes.view', $requisicao->id) !!}"class="btn btn-primary btn-xs">
                                <i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar&nbsp;
                            </a>

                            <a class="btn btn-success btn-xs">
                                <i class="fa fa-print"></i>&nbsp;&nbsp;Imprimir&nbsp;
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma requisicao Cadastrada ainda!</h5>
    @endif
@stop
