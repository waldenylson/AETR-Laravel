@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group well">
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('id', 'Número', ['class' => 'control-label']) !!}
            {!! Form::text('id', null, ['class' => 'form-control', 'id' => 'id', 'disabled', 'placeholder' => 'Automático']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('requisitante', 'Requisitante', ['class' => 'control-label']) !!}
            {!! Form::text('requisitante', null, ['class' => 'form-control', 'id' => 'requisitante']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('setor', 'Setor', ['class' => 'control-label']) !!}
            {!! Form::text('setor', null, ['class' => 'form-control', 'id' => 'setor']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('ramal', 'Ramal', ['class' => 'control-label']) !!}
            {!! Form::text('ramal', null, ['class' => 'form-control', 'id' => 'ramal']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('natureza_id', 'Natureza Missão', ['class' => 'control-label']) !!}
            {!! Form::select('natureza_id', $naturezas, null, ['class' => 'form-control', 'id' => 'natureza_id']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('viatura_id', 'Viatura', ['class' => 'control-label']) !!}
            {!! Form::select('viatura_id', $viaturas, null, ['class' => 'form-control', 'id' => 'viatura_id']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('destino', 'Destino', ['class' => 'control-label']) !!}
            {!! Form::text('destino', null, ['class' => 'form-control', 'id' => 'destino']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('apresentar_se', 'Apresentar-se', ['class' => 'control-label']) !!}
            {!! Form::text('apresentar_se', null, ['class' => 'form-control', 'id' => 'apresentar_se', 'placeholder' => 'Mais Antigo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('data_inicio', 'Data Início', ['class' => 'control-label']) !!}
            {!! Form::date('data_inicio', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'data_inicio']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('hora_inicio', 'Hora Início', ['class' => 'control-label']) !!}
            {!! Form::time('hora_inicio', null, ['class' => 'form-control', 'id' => 'hora_inicio']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2" id="sandbox-container">
            {!! Form::label('data_chegada', 'Data Chegada', ['class' => 'control-label date']) !!}
            {!! Form::text('data_chegada', null, ['class' => 'form-control input-date', 'id' => 'data_chegada']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('hora_chegada', 'Hora Chegada', ['class' => 'control-label']) !!}
            {!! Form::time('hora_chegada', null, ['class' => 'form-control', 'id' => 'hora_chegada']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('odometro_saida', 'Odômetro Saída', ['class' => 'control-label']) !!}
            {!! Form::number('odometro_saida', null, ['class' => 'form-control', 'id' => 'odometro_saida']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('odometro_chegada', 'Odômetro Chegada', ['class' => 'control-label']) !!}
            {!! Form::number('odometro_chegada', null, ['class' => 'form-control', 'id' => 'odometro_chegada']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4">
            {!! Form::label('observacoes', 'Observações', ['class' => 'control-label']) !!}
            {!! Form::textarea('observacoes', null, ['class' => 'form-control', 'id' => 'observacoes']) !!}
        </div>
    </div>
</div>