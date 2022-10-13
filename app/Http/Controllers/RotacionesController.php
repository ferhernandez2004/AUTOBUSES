<?php

namespace App\Http\Controllers;

use App\Models\Rotaciones;
use Illuminate\Http\Request;

class RotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotacion = Rotaciones::all();
        return view('rotaciones.index', compact('rotacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'asignacion_de_ruta'=>'required|max:255',
            'motorista'=>'required|max:255',
            'fecha'=>'required|max:255'
        ]);
        $show = Rotaciones::create($validateData);
        return redirect('/rotaciones')->with('success', 'Unidad Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        return view('rotaciones.edit', compact('rotacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'asignacion_de_ruta'=>'required|max:255',
            'motorista'=>'required|max:255',
            'fecha'=>'required|max:255'
        ]);
        Rotaciones::whereId($id)->update($validateData);
        return redirect('/rotaciones')->with('success', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rotaciones  $rotacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        $rotacion->delete();
        return redirect('/rotaciones')->with('success', 'Datos borrados');
    }
}
