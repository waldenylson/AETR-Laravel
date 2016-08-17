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

                <p class="center"><strong>FICHA RE REQUISIÇÃO E DESPACHO DE VIATURA</strong></p>
            </div>
        </div><br><br>

        <table class="table is-bordered">
            <tr>
                <td>Número: 1234</td>
                <td>Requisitante: TCEL LUIZ CARLOS</td>
                <td>Setor: PROTOCOLO</td>
                <td>Ramal: 8068</td>
            </tr>
            <tr>
                <td>Natureza: TRANSPORTE MILITAR BCT</td>
                <td>Destino: BOA VIAGEM / PRAZERES</td>
                <td>Apresentar-se: TCEL LUIZ CARLOS</td>
            </tr>
        </table>

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