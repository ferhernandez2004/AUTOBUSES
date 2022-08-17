<?php

namespace App\Http\Controllers;

use App\Models\Unidades;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad = Unidades::all();
        return view('unidades.index', compact('unidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidades.create');
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
            'matricula'=>'required|max:255',
            'modelo'=>'required|max:255',
            'marca'=>'required|max:255',
            'modelo_del_motor'=>'required|max:255',
            'combustible'=>'required|max:255',
        ]);
        $show = Unidades::create($validateData);
        return redirect('/unidades')->with('success', 'Unidad Guardada');
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
        $unidad = Unidades::findOrFail($id);
        return view('unidades.edit', compact('unidad'));
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
            'matricula'=>'required|max:255',
            'modelo'=>'required|max:255',
            'marca'=>'required|max:255',
            'modelo_del_motor'=>'required|max:255',
            'combustible'=>'required|max:255',
        ]);
        Unidades::whereId($id)->update($validateData);
        return redirect('/unidades')->with('success', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidades  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidad = Unidades::findOrFail($id);
        $unidad->delete();
        return redirect('/unidades')->with('success', 'Datos borrados');
    }
}
