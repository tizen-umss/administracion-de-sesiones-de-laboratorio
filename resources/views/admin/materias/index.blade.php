@extends('admin.layout')

@section('header') 
    <h1>
        Todas las materias
        <small>Optional description</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Materias</li>
      </ol>

@stop

@section('content')
   <!-- <h1>Dashboard</h1> -->
   <!-- /.box-header -->
   <div class="box-body">
              <table id="materias-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Codigo Materia</th>
                  <th>Nombre Materia</th>
                  <th>Descripcion Materia</th>
                  <th>Acciones </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr>
                            <td> {{$materia->id}}</td>
                            <td> {{$materia->codMat}}</td>
                            <td> {{$materia->nombreMat}}</td>
                            <td> {{$materia->descMat}}</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>

@stop
