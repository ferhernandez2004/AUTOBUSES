<?php

namespace App\Http\Controllers;

use App\Models\Motoristas;
use Illuminate\Http\Request;

class MotoristasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorista = Motoristas::all();
        return view('motoristas.index', compact('motorista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motoristas.create');
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
            'nombres'=>'required|max:255',
            'apellidos'=>'required|max:255',
            'email'=>'required|max:255',
            'telefono'=>'required|max:255',
            'dui'=>'required|max:255',
            'nit'=>'required|max:255',
            'direccion'=>'required|max:255',
            'licencia'=>'required|max:255',
        ]);
        $show = Motoristas::create($validateData);
        return redirect()->back();
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
        $motorista = Motoristas::findOrFail($id);
        return view('motoristas.edit', compact('motorista'));
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
            'nombres'=>'required|max:255',
            'apellidos'=>'required|max:255',
            'email'=>'required|max:255',
            'telefono'=>'required|max:255',
            'dui'=>'required|max:255',
            'nit'=>'required|max:255',
            'direccion'=>'required|max:255',
            'licencia'=>'required|max:255',
        ]);
        Motoristas::whereId($id)->update($validateData);
        return redirect('/motoristas')->with('success', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $motorista = Motoristas::findOrFail($id);
        $motorista->delete();
        return redirect('/motoristas')->with('success', 'Datos borrados');
    }
}
