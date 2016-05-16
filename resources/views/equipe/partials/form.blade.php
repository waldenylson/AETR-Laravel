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
            {!! Form::label('despachante', 'Despachante', ['class' => 'control-label']) !!}
            {!! Form::text('despachante', null, ['class' => 'form-control', 'id' => 'despachante', 'disabled']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('motorista1', 'Motorista I', ['class' => 'control-label']) !!}
            {!! Form::text('motorista1', null, ['class' => 'form-control', 'id' => 'motorista1']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('motorista2', 'Motorista II', ['class' => 'control-label']) !!}
            {!! Form::text('motorista2', null, ['class' => 'form-control', 'id' => 'motorista2']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('data', 'Data', ['class' => 'control-label']) !!}
            {!! Form::date('data', null, ['class' => 'form-control', 'id' => 'data']) !!}
        </div>
    </div><br>
</div>