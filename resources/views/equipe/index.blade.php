@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-users"></i>
        Equipes de Serviço Cadastradas
    </h2>
    <hr />
    @if(count($equipes) > 0)
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
            @foreach($equipes as $equipe)
                <tr>
                    <td>{!! $equipe->despachante  !!}</td>
                    <td>{!! $equipe->motorista1   !!}</td>
                    <td>{!! $equipe->motorista2   !!}</td>
                    <td>{!! $equipe->data         !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('equipe.edit', $equipe->id) !!}" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i>&nbsp;&nbsp;editar&nbsp;
                        </a>

                        <a href="{!! route('equipe.destroy', $equipe->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i>&nbsp;&nbsp;remover&nbsp;
                        </a>
                        @if($equipe->finalizado == 0)
                            <a href="{!! route('equipe.updateStatus', $equipe->id) !!}" class="btn btn-warning btn-xs btn-finalizar">
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
        <h5 class="well">Nenhuma Equipe Cadastrada ainda!</h5>
    @endif
@stop
