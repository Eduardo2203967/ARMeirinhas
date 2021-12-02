<?php

namespace App\Http\Controllers;

use App\Models\Duvida;
use Illuminate\Http\Request;

class DuvidaController extends Controller
{

    //index = listar tudo
    //show = mostrar um registo

    //create = mostrar form criação
    //store = gravar dados do form de criação

    //edit = mostra form de edição de uma dúvida
    //update = gravar dados do form de edição

    //destroy = apagar um dúvida


    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('duvida');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function show(Duvida $duvida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function edit(Duvida $duvida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duvida $duvida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duvida $duvida)
    {
        //
    }
}