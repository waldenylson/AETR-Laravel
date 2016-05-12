@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-car"></i>
        Viaturas Cadastradas
    </h2>
    <hr />
    @if(count($viaturas) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
                <tr>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>REGISTRO FAB</th>
                    <th>DISPONIBILIDADE</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
            @foreach($viaturas as $viatura)
                <tr>
                    <td>{!! $viatura->marca                                          !!}</td>
                    <td>{!! $viatura->modelo                                         !!}</td>
                    <td>{!! $viatura->reg_fab                                        !!}</td>
                    <td>{!! $viatura->disponivel == 0 ? 'INDISPONÍVEL' : 'DIPONÍVEL' !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('viaturas.edit', $viatura->id) !!}" class="btn btn-primary btn-xs">
                            <i class="fa fa-fw fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('viaturas.destroy', $viatura->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-fw fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma Viatura Cadastrada ainda!</h5>
    @endif
@stop
