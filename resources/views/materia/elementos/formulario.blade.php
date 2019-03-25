<div class="form-group">
    {!! Form::label('nomMat', 'Nombre de la materia') !!}
    {!! Form::text('nomMat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('codMat', 'Código de la materia') !!}
    {!! Form::text('codMat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('desMat', 'Descripción') !!}
    {!! Form::textarea('desMat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <a href="{{ route('materia.index')}}" class="btn btn-default pull-rihght">Listado</a>
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary pull-right']) !!}
</div>