<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Curso();
        $usuario->name = $request->name;
        $usuario->asistencia = $request->asistencia;
        $usuario->curso_id = $request->curso_id;
        $usuario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Curso::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $usuario = Curso::find($id);
        $usuario->name = $request->name;
        $usuario->asistencia = $request->asistencia;
        $usuario->curso_id = $request->curso_id;
        $usuario->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Curso::find($id);
        $usuario->delete();
    }
}
