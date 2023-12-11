<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return Docente::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Docente();
        $usuario->name = $request->name;
        $usuario->id = $request->id;
        $usuario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if(!Docente::find($id)){
            return 'usuario no encontrado';
        }
        return Docente::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $usuario = Docente::find($id);
        $usuario->name = $request->name;
        $usuario->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Docente::find($id);
        $usuario->delete();
    }
}
