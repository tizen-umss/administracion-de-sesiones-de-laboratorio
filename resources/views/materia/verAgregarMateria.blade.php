@extends('admin.layout') 

@section('content')

    <div class="col-sm-8">
        <h2>
            Crear nueva materia
        </h2>
    </div>
        <form class="form-group" method = "POST" action="/materia"> <!--Hacemos referencia a nuestro enlace para el controlador controlador2-->              
            <!--@csrf Protege contra inseguridades (dado por laravel)--> 
            {{csrf_field()}} <!--para la version 5.5.* Protege contra inseguridades (dado por laravel)-->
            <div class="col-sm-5">
                    @include('materia.elementos.info') 
                <div class = "form-group"> <!--clase de bootstrap-->
                    <label for="">Nombre:</label>
                    <input type="text" required name = "nomMat" class = "form-control"> <!--Campo para ingresar texto-->

                    <label for="">Código:</label>
                    <input type="number" required name = "codMat" class = "form-control"> <!--Campo para ingresar texto-->

                    <label for="">Descripción:</label>
                    <textarea name="desMat" id="" cols="10" rows="5" class = "form-control"></textarea>
                    {{-- <input type="tex" name = "desMat" class = "form-control"> <!--Campo para ingresar texto--> --}}
                </div>
                <a href="/materia" class="btn btn-default">Volver</a>
                <button type = "submit" class = "btn btn-primary pull-right">Guardar</button>
            </div>
        </form>
@stop