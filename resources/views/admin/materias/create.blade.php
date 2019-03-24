@extends('admin.layout')

@section('header') 
    <h1>
        Materias
        <small>Crear Materia</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{route('admin.materias.index')}}"><i class="fa fa-list"></i> Materias</a></li>
        <li class="active">Crear</li>
      </ol>

@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
        
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Crear una materia</h3>
        </div>
        <form method="POST" action="{{route('admin.materias.store')}}">
        {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label>Codigo de materia</label>
                    <input name="codMat" class="form-control" placeholder="Ingresa aqui el codigo de la materia">
                </div>

                <div class="form-group">
                    <label>Nombre de la materia</label>
                    <input name="nombreMat" class="form-control" placeholder="Ingresa aqui el codigo de la materia">
                </div>

                <div class="form-group">
                    <label>Descripcion de la materia</label>
                    <input name="descMat" class="form-control" placeholder="Ingresa aqui el codigo de la materia">
                </div>

                <div class="form-group">
                    <button type="submit"class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </form>
    </div>
</div>
</div>
@stop