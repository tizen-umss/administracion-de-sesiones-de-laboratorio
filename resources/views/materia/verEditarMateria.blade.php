@extends('admin.layout') 

@section('content')
    <div class=col-sm-8>
        <h2>
            Editar materia
        </h2>
        {!! Form::model($materia, ['route' => ['materia.update', $materia->id], 'method' => 'PUT']) !!}
            @include('materia.elementos.formulario')
        {!! Form::close() !!}
    </div>
    <div div class="col-sm-4">
       <!--Aquí van las colecciones o funcionalidades (componentes que se ejecutan con laravel colective)-->
    </div>
@endsection
