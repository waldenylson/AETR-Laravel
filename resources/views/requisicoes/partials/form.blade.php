@if($errors->any())
    <div class="alert alert-danger" xmlns="http://www.w3.org/1999/html">
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
            {!! Form::text('id', null, ['class' => 'form-control', 'id' => 'id', 'disabled']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('om', 'OM', ['class' => 'control-label']) !!}
            {!! Form::text('om', null, ['class' => 'form-control', 'id' => 'om']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('requisitante', 'Requisitante', ['class' => 'control-label']) !!}
            {!! Form::text('requisitante', null, ['class' => 'form-control', 'id' => 'requisitante']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('setor', 'Setor', ['class' => 'control-label']) !!}
            {!! Form::text('setor', null, ['class' => 'form-control', 'id' => 'setor']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('ramal', 'Ramal', ['class' => 'control-label']) !!}
            {!! Form::text('ramal', null, ['class' => 'form-control', 'id' => 'ramal']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('destino', 'Destino', ['class' => 'control-label']) !!}
            {!! Form::text('destino', null, ['class' => 'form-control', 'id' => 'destino']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('natureza_id', 'Natureza Missão', ['class' => 'control-label']) !!}
            {!! Form::select('natureza_id', $naturezas, null, ['class' => 'form-control', 'id' => 'natureza_id']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('data_inicio', 'Data Início', ['class' => 'control-label']) !!}
            {!! Form::date('data_inicio', null, ['class' => 'form-control', 'id' => 'data_inicio']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('hora_inicio', 'Hora Início', ['class' => 'control-label']) !!}
            {!! Form::time('hora_inicio', null, ['class' => 'form-control', 'id' => 'hora_inicio']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('data_chegada', 'Data Chegada', ['class' => 'control-label']) !!}
            {!! Form::date('data_chegada', null, ['class' => 'form-control', 'id' => 'data_chegada']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('hora_chegada', 'Hora Chegada', ['class' => 'control-label']) !!}
            {!! Form::time('hora_chegada', null, ['class' => 'form-control', 'id' => 'hora_chegada']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('viatura_id', 'Viatura', ['class' => 'control-label']) !!}
            {!! Form::select('viatura_id', $viaturas, null, ['class' => 'form-control', 'id' => 'viatura_id']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('motorista', 'Motorista(s)', ['class' => 'control-label']) !!}
            {!! Form::text('motorista', null, ['class' => 'form-control', 'id' => 'motorista']) !!}
        </div>
    </div><br>
</div>