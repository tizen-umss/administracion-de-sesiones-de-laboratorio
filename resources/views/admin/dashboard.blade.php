@extends('admin.layout')

@section('content')
   <h1>Dashboard</h1>
   <p>usuario autenticado:{{auth()->user()->name}}</p>
@stop
