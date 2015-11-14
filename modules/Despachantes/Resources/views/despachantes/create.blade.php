@extends('templates.fancyboxContent')
@section('content')
<h2>
    <i class="fa fa-user"></i>
    Cadastrar Despachantes
</h2>
    {!! Form::open() !!}
        <div class="form-group well">
            <div class="row">
                <div class="col-md-4">
                    {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
                    {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome', 'autofocus' => '']) !!}
                </div>
                 <div class="col-md-2">
                    {!! Form::label('nome_guerra', 'Nome Guerra', ['class' => 'control-label']) !!}
                    {!! Form::text('nome_guerra', null, ['class' => 'form-control', 'id' => 'nome_guerra']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('posto_graduacao', 'Posto/Graduacao', ['class' => 'control-label']) !!}
                    {!! Form::text('posto_graduacao', null, ['class' => 'form-control', 'id' => 'posto_graduacao']) !!}
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-2">
                    {!! Form::label('identidade', 'Identidade', ['class' => 'control-label']) !!}
                    {!! Form::text('identidade', null, ['class' => 'form-control', 'id' => 'identidade']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('saram', 'Saram', ['class' => 'control-label']) !!}
                    {!! Form::text('saram', null, ['class' => 'form-control', 'id' => 'saram']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('sessao', 'Sessão', ['class' => 'control-label']) !!}
                    {!! Form::text('sessao', null, ['class' => 'form-control', 'id' => 'sessao']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('ramal', 'Ramal', ['class' => 'control-label']) !!}
                    {!! Form::text('ramal', null, ['class' => 'form-control', 'id' => 'ramal']) !!}
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-2">
                    {!! Form::label('chefe', 'Chefe', ['class' => 'control-label']) !!}
                    {!! Form::text('chefe', null, ['class' => 'form-control', 'id' => 'chefe']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('ramal_chefe', 'Ramal Chefe', ['class' => 'control-label']) !!}
                    {!! Form::text('ramal_chefe', null, ['class' => 'form-control', 'id' => 'ramal_chefe']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('agenda', 'Agenda', ['class' => 'control-label']) !!}
                    {!! Form::text('agenda', null, ['class' => 'form-control', 'id' => 'agenda']) !!}
                </div>
                <div class="col-md-2">
                    {!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
                    {!! Form::text('celular', null, ['class' => 'form-control', 'id' => 'celular']) !!}
                </div>
            </div><br>
        </div>
        <button class="btn btn-primary" type="submit">
            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
        </button>
        <button class="btn btn-danger" id="btn-cancelar" type="button">
            <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
        </button>
    {!! Form::close() !!}
@stop
