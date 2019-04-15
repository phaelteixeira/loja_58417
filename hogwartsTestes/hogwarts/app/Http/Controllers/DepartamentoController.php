<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('listar_departamento', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $salas = Sala::all();
        return view('cadastro_departamento',compact('salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nome = $request->input("nome");
        $departamento->coordenador = $request->input("coordenador");
        $departamento->sala_id = $request->input("sala_id");
        $departamento->save();
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("editar_departamento",compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $departamento = Departamento::find($id);
        $departamento->nome = $request->input("nome");
        $departamento->coordenador = $request->input("coordenador");
        $departamento->sala_id = $request->input("sala_id");
        $departamento->save();
        return view('listar_departamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamentos = Departamento::find($id);
        $departamentos -> delete();
        return redirect()->route('departamentos.index');
    }
}
