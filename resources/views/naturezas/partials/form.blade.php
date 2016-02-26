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
        <div class="col-md-7">
            {!! Form::label('titulo', 'Título', ['class' => 'control-label']) !!}
            {!! Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo', 'autofocus' => '']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-7">
            {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
            {!! Form::textArea('descricao', null, ['class' => 'form-control', 'id' => 'descricao']) !!}
        </div>
    </div>
</div>