@extends('plantillas.plantilla')

@section('titulo', 'Materias')

@section('contenido')
    <p>
        <h2>
            Materias
            <a href="/materia/create" class="btn btn-primary pull-right">Nueva materia</a>
        </h2>
    </p>
    <div class="col-sm-25">
            
            @include('materia.elementos.info')
                                              
            <table class="table table-hover table-striped">
                <thead>
                    <tr> <!--Los titulos de los items-->
                        <th width="20px">ID</th> <!--Texto de encabezado de la tabla-->
                        <th>Materia</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Creación</th>
                        <th>Modificación</th>
                        <th>Editar</th>
                        <th>Borrar</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $materia)
                        <tr> <!--Fila-->
                            <td>{{ $materia->id }}</td> <!--Columna-->
                            <td>{{ $materia->nomMat }}</td>
                            <td>{{ $materia->codMat }}</td>
                            <td>{{ $materia->desMat }}</td>
                            <td>{{ $materia->created_at }}</td>
                            <td>{{ $materia->updated_at }}</td>
                            <td><a href=" {{ route('materia.edit', $materia->id) }} " class="btn btn-link">Editar</a></td>
                            <td> <!--Eliminar-->
                                <form action="{{ route('materia.destroy', $materia->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-link" onclick="return confirm('Está seguro de continuar? \n Materia: {{$materia->nomMat}} \n Codigo: {{$materia->codMat}} \n Se eliminará permanentemente de la base de datos')">eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $materias->render()!!}
    </div>
    <div class="col-sm-4">
        
    </div>
@endsection