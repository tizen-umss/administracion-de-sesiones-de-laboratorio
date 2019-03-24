<?php

namespace App\Http\Controllers\Admin;

use App\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriasController extends Controller
{
    public function index(){
        $materias = Materia::all();
        return view('admin.materias.index',compact('materias'));
    }
}
