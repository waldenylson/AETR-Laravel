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
        <div class="col-md-3">
            {!! Form::label('marca', 'Marca', ['class' => 'control-label']) !!}
            {!! Form::text('marca', null, ['class' => 'form-control', 'id' => 'marca', 'autofocus' => '']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('modelo', 'Modelo', ['class' => 'control-label']) !!}
            {!! Form::text('modelo', null, ['class' => 'form-control', 'id' => 'modelo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('reg_fab', 'Registro FAB', ['class' => 'control-label']) !!}
            {!! Form::text('reg_fab', null, ['class' => 'form-control', 'id' => 'reg_fab']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            {!! Form::label('placa', 'Placa', ['class' => 'control-label']) !!}
            {!! Form::text('placa', null, ['class' => 'form-control', 'id' => 'placa']) !!}
        </div>
        <div class="col-md-5">
            {!! Form::label('disponivel', 'Situação da Viatura', ['class' => 'control-label']) !!}
            {!! Form::select('disponivel', ['1' => 'Disponível', '0' => 'Não Disponível'], null, ['class' => 'form-control', 'id' => 'disponivel']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            {!! Form::label('alocacao', 'Alocação da Viatura', ['class' => 'control-label']) !!}
            {!! Form::select('alocacao',
                ['cindacta3' => 'CINDACTA III',
                 'dtcea-rf'  => 'DTCEA-RF',
                 'dtcea-sv'  => 'DTCEA-SV',
                 'dtcea-fz'  => 'DTCEA-FZ',
                 'dtcea-nt'  => 'DTCEA-NT',
                 'dtcea-pl'  => 'DTCEA-PL',
                 'dtcea-ps'  => 'DTCEA-PS',
                 'dtcea-mo'  => 'DTCEA-MO',
                 'dtcea-fn'  => 'DTCEA-FN',
                 'dtcea-ar'  => 'DTCEA-AR',
                 'dtcea-lp'  => 'DTCEA-LP'], null, ['class' => 'form-control', 'id' => 'alocacao']) !!}
        </div>
        <div class="col-md-5">
            {!! Form::label('reservada', 'Viatura Exclusiva', ['class' => 'control-label']) !!}
            {!! Form::select('reservada',
                ['aetr'       => 'AETR',
                 'ies'        => 'IES',
                 'tsre'       => 'SUP/SDOC',
                 'int'        => 'INTENDÊNCIA',
                 'aili'       => 'LICITAÇÕES',
                 'cmt'        => 'COMANDANTE',
                 'copm'       => 'COPM',
                 'od'         => 'OD',
                 'guarda'     => 'GUARDA'], null, ['class' => 'form-control', 'id' => 'reservada'
                 ])
            !!}
        </div>
    </div>
</div>