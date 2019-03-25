@extends('plantillas.plantilla') 

@section('titulo', 'Editar materia')
@section('contenido')
    <div class="col-sm-8">
        <h2>
            <p><br>Editar materia</p>
        </h2>
    </div>

    <form class="form-group" method = "POST" action="/materia"> <!--Hacemos referencia a nuestro enlace para el controlador controlador2-->
                      
        <!--@csrf Protege contra inseguridades (dado por laravel)--> 
        {{csrf_field()}} <!--para la version 5.5.* Protege contra inseguridades (dado por laravel)-->
        <div class="col-sm-5">
                @include('materia.elementos.info') 
            <div class = "form-group"> <!--clase de bootstrap-->

                <label for="">ID:</label>
                <input type="text" required name = "id" class = "form-control" value="{{$materia->id}}">

                <label for="">Nombre:</label>
                <input type="text" required name = "nomMat" class = "form-control" value="{{$materia->nomMat}}"> <!--Campo para ingresar texto-->
                
                <label for="">Código:</label>
                <input type="number" required name = "codMat" class = "form-control" value="{{$materia->codMat}}"> <!--Campo para ingresar texto-->

                <label for="">Descripción:</label>
                <textarea name="desMat" id="" cols="10" rows="5" class = "form-control" value="{{$materia->desMat}}"></textarea>
                {{-- <input type="tex" name = "desMat" class = "form-control"> <!--Campo para ingresar texto--> --}}
            </div>
        </div>
            <a href="/materia" class="btn btn-primary">Volver</a>
            <a href="/materia/update" class="btn btn-primary">guardar</a>
            <button type = "submit" class = "btn btn-primary">Guardar</button> 
            
    </form>

@endsection

