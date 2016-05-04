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
            {!! Form::label('viatura_id', 'Viatura', ['class' => 'control-label']) !!}
            {!! Form::select('viatura_id', $viaturas, null, ['class' => 'form-control', 'id' => 'viatura_id']) !!}
        </div>
        {{--<div class="col-md-3">
            {!! Form::label('modelo', 'Modelo', ['class' => 'control-label']) !!}
            {!! Form::text('modelo', null, ['class' => 'form-control', 'id' => 'modelo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('reg_fab', 'Registro FAB', ['class' => 'control-label']) !!}
            {!! Form::text('reg_fab', null, ['class' => 'form-control', 'id' => 'reg_fab']) !!}
        </div>--}}
    </div><br>
</div>