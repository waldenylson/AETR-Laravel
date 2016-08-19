@extends('templates.print')
@section('content')

    <div class="box" style="margin-top: 10px">

        <div class="columns">
            <div class="column">
                <p class="title">
                    <div class="center">COMANDO DA AERONÁUTICA</div>
                    <div class="center">CINDACTA III</div>
                    <div class="center">AETR</div>
                </p>

                <p class="center"><strong>FICHA DE REQUISIÇÃO E DESPACHO DE VIATURA</strong></p>
            </div>
        </div><br><br>

        <table class="table is-bordered">
            <thead class="tableHeader">
                <tr class="titulo">
                    <th class="firstColumn"><strong class="font-print-request">NÚMERO</strong></th>
                    <th class="secondColumn"><strong class="font-print-request">REQUISITANTE</strong></th>
                    <th class="thirdColumn"><strong class="font-print-request">SETOR</strong></th>
                    <th class="fourthColumn"><strong class="font-print-request">RAMAL</strong></th>
                </tr>
            </thead>
            <tr class="text-color-priv">
                <td>{{ strtoupper($requisicao->id)           }}</td>
                <td>{{ strtoupper($requisicao->requisitante) }}</td>
                <td>{{ strtoupper($requisicao->setor)        }}</td>
                <td>{{ strtoupper($requisicao->ramal)        }}</td>
            </tr>
        </table>

        <table class="table is-bordered">
            <thead  class="tableHeader">
                <tr>
                    <th class="firstColumn"><strong class="font-print-request">DATA</strong></th>
                    <th class="secondColumn"><strong class="font-print-request">DESTINO</strong></th>
                    <th class="thirdColumn"><strong class="font-print-request">NATUREZA</strong></th>
                    <th class="fourthColumn"><strong class="font-print-request">APRESENTAR-SE</strong></th>
                </tr>
            </thead>
            <tr class="text-color-priv">
                <td>{{ strtoupper($requisicao->data_inicio)      }}</td>
                <td>{{ strtoupper($requisicao->destino)          }}</td>
                <td>{{ strtoupper($requisicao->natureza->titulo) }}</td>
                <td>{{ strtoupper($requisicao->apresentar_se)    }}</td>
            </tr>
        </table>

        <hr class="tracejado">

        <table class="table is-striped is-bordered">
            <tr>
                <td><strong class="font-print-request">VIATURA:</strong> {{ $requisicao->viatura->id }}</td>
                <td><strong class="font-print-request">ODÔMETRO SAÍDA:</strong> {{ $requisicao->odometro_saida }}</td>
            </tr>
            <tr>
                <td><strong class="font-print-request">REG FAB:</strong> {{ $requisicao->viatura->reg_fab }}</td>
                <td><strong class="font-print-request">HORA SAÍDA:</strong> {{ $requisicao->hora_saida }}</td>
            </tr>
            <tr>
                <td><strong class="font-print-request">PLACA:</strong> {{ $requisicao->viatura->placa }}</td>
                <td><strong class="font-print-request">ODÔMETRO CHEGADA:</strong> {{ $requisicao->odometro_saida }}</td>
            </tr>
            <tr>
                <td><strong class="font-print-request">MOTORISTA:</strong>
                    {!!
                        !isEmpty($requisicao->motorista_externo_sv)
                            ? $requisicao->motorista_externo_sv
                            : $requisicao->equipe->motorista1
                    !!}
                </td>
                <td><strong class="font-print-request">HORA CHEGADA:</strong> {{$requisicao->hora_chegada}}</td>
            </tr>
            <tr>
                <td><strong class="font-print-request">DESPACHANTE:</strong> {{ $requisicao->equipe->despachante }}</td>
                <td><strong class="font-print-request">ASSINATURA:</strong></td>
            </tr>
        </table>

        <hr class="tracejado">

        <div class="boxx">

            <div class="box-assinatura">
                <div class="center">
                    <div class="teste">
                        <p>Borges Cap R1</p>
                        <p>Chefe da AETR</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop