<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumnos::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Alumnos();
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
        return Alumnos::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $usuario = Alumnos::find($id);
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
        $usuario = Alumnos::find($id);
        $usuario->delete();
    }
}
