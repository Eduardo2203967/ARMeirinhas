<?php

namespace App\Http\Controllers;

use App\Http\Requests\DuvidaRequest;
use App\Models\Duvida;
use Illuminate\Http\Request;

class DuvidaController extends Controller
{
    public function index()
    {
        $duvida = duvida::all();
        return view('duvida', compact('duvida'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(DuvidaRequest $request)
    {
        try{
            $data = $request->validated();
            Duvida::create($data);

            return redirect('/duvida')->with('message','Dúvida submetida com sucesso');
        } catch (\Exception $ex){
            return redirect('/duvida')->with('Algo está mal');
        }
        
    }

    public function edit(duvida $duvida){

        return view ('edit', compact('duvida'));
    }

    public function update(DuvidaRequest $request, duvida $duvida)
    {
        $data = $request->validated();
        $duvida->fill($data);
        $duvida->save();

        return redirect('/duvida')->with('message','Atualizado com Sucesso');
    }

    public function show(duvida $duvida)
    {
        //return $duvida;
        return view('show', compact('duvida'));
    }

    public function destroy(duvida $duvida)
    {
        $duvida->delete();
        return redirect()->back()->with('message','Comentário Apagado com sucesso');
    }
}


