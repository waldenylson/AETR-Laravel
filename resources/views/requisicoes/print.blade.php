@extends('templates.print')
@section('content')

    <div class="box" style="margin-top: 10px">

        <div class="columns">
            <div class="column">
                <p class="title is-6">
                    <div class="center">COMANDO DA AERONÁUTICA</div>
                    <div class="center">CINDACTA III</div>
                    <div class="center">AETR</div>
                </p>

                <p class="center"><strong>FICHA DE REQUISIÇÃO E DESPACHO DE VIATURA</strong></p>
            </div>
        </div><br><br>

        <table class="table is-bordered">
            <thead class="teste">
                <tr>
                    <th><strong class="font-print-request">NÚMERO</strong></th>
                    <th><strong class="font-print-request">REQUISITANTE</strong></th>
                    <th><strong class="font-print-request">SETOR</strong></th>
                    <th><strong class="font-print-request">RAMAL</strong></th>
                </tr>
            </thead>
            <tr>
                <td>1234</td>
                <td>TCEL LUIZ CARLOS</td>
                <td>PROTOCOLO</td>
                <td>8068</td>
            </tr>
        </table>

        <table class="table is-bordered">
            <thead>
                <tr>
                    <th>NATUREZA</th>
                    <th>DESTINO</th>
                    <th>APRESENTAR-SE</th>
                </tr>
            </thead>
            <tr>
                <td><strong class="font-print-request">TRANSPORTE MILITAR BCT</strong></td>
                <td><strong class="font-print-request">BOA VIAGEM / PRAZERES</strong></td>
                <td><strong class="font-print-request">TCEL LUIZ CARLOS</strong></td>
            </tr>
        </table>

        <hr>

        <table class="table is-striped">
            <tr>
                <td>Viatura: 1234</td>
                <td>Odômetro Saída: 123456</td>
            </tr>
            <tr>
                <td>Reg FAB: 14 DP 102</td>
                <td>Hora Saída: 14:30</td>
            </tr>
            <tr>
                <td>Placa: KKK 1111</td>
                <td>Odômetro Chegada: 123456</td>
            </tr>
            <tr>
                <td>Motorista: 3S WALDENYLSON SILVA</td>
                <td>Hora Chegada: 14:30</td>
            </tr>
            <tr>
                <td>Despachante: 3S WALDENYLSON SILVA</td>
                <td>Assinatura:_________________________________</td>
            </tr>
        </table>
    </div>
@stop