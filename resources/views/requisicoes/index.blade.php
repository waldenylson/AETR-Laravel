@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-edit"></i>
        requisicoes de Serviço Cadastradas
    </h2>
    <hr />
    @if(count($requisicoes) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>DESPACHANTE</th>
                <th>MOTORISTA I</th>
                <th>MOTORISTA II</th>
                <th>DATA</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($requisicoes as $requisicao)
                <tr>
                    <td>{!! $requisicao->despachante  !!}</td>
                    <td>{!! $requisicao->motorista1   !!}</td>
                    <td>{!! $requisicao->motorista2   !!}</td>
                    <td>{!! $requisicao->data         !!}</td>

                    <td width="1%" nowrap>
                        @if($requisicao->finalizado == 0)
                            <a href="{!! route('requisicao.edit', $requisicao->id) !!}" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>&nbsp;&nbsp;editar&nbsp;
                            </a>

                            <a href="{!! route('requisicao.destroy', $requisicao->id) !!}" class="btn btn-danger btn-xs btn-remover">
                                <i class="fa fa-remove"></i>&nbsp;&nbsp;remover&nbsp;
                            </a>

                            <a href="{!! route('requisicao.updateStatus', $requisicao->id) !!}" class="btn btn-warning btn-xs btn-finalizar">
                                <i class="fa fa-power-off"></i>&nbsp;&nbsp;Finalizar&nbsp;&nbsp;&nbsp;
                            </a>
                        @else
                            <a class="btn btn-info btn-xs" disabled>
                                <i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;Finalizado&nbsp;
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
