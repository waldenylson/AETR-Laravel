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
                    <td>{!! $equipe->despachante     !!}</td>
                    <td>{!! $equipe->motorista1  !!}</td>
                    <td>{!! $equipe->motorista2  !!}</td>
                    <td>{!! \Carbon\Carbon::parse($equipe->data)->format('d/m/Y') !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('equipe.edit', $equipe->id) !!}" class="btn btn-primary btn-xs">
                            <i class="fa fa-fw fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('equipe.destroy', $equipe->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-fw fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma Equipe Cadastrada ainda!</h5>
    @endif
@stop
