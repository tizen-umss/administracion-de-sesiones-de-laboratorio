<?php

namespace App\Http\Controllers\Admin;

use App\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriasController extends Controller
{
    public function index(){
        $materias = Materia::all();
        // if( auth()->user()->hasRole('Admin')){
        //     $materias = Materias::all();
        // }else{
        //     $materias = auth()->user()->materias;
        // }
        return view('admin.materias.index',compact('materias'));
    }

    public function create(){
        return view('admin.materias.create');
    }

    public function store(Request $request){
        //validacion
        $this->validate($request,[
            'codMat' => 'required',
            'nombreMat' => 'required'
        ]);
        // return Materia::create($request->all());

        $materia = new Materia;
        $materia->codMat = $request->get('codMat');
        $materia->nombreMat = $request->get('nombreMat');
        $materia->descMat = $request->get('descMat');
        $materia->save();

        return back()->with('flash','la materia ha sido creado exitosamente');

    }
}
