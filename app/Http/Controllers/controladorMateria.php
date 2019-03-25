<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia;

class controladorMateria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = materia::orderBy('id')->paginate();
        return view('materia.verListaMaterias', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materia.verAgregarMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tablaMateria = new materia();
        $tablaMateria->nomMat = $request->input('nomMat');
        $tablaMateria->codMat = $request->input('codMat');
        $tablaMateria->desMat = $request->input('desMat');
        $tablaMateria->save();
        //return view('materia.verListaMaterias', compact('materias'));
        //return view('materia.verInforme');
        return back()->with('info', 'La materia se agregó satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $materia = materia::find($id);
        return view('materia.verEditarMateria', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materia = materia::find($id);
        $materia->nomMat = $request->input('nomMat');
        $materia->codMat = $request->input('codMat');
        $materia->desMat = $request->input('desMat');
        $materia->save();
        return redirect()->route('materia.index')
                ->with('info', 'La materia se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia = materia::find($id);
        $materia->delete();
        return back()->with('info', 'La materia se eliminó corretcamete');
    }
}
