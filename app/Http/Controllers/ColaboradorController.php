<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    //Carregar o formulário para cadastrar o novo colaborador
    public function create(){
        $colaboradores = Colaborador::orderByDesc('id')->get();
        //Carregar a view create aqui dentro
        return view('colaboradors.create', ['colaboradores' => $colaboradores]);
    }

    public function show(Colaborador $colaborador){
        return view('colaboradors.show', ['colaborador' => $colaborador]);
    }


    public function store(Request $request){
        // Teste: dd($request)
        
        //Cadastrar o Colaborador no Banco
        Colaborador::create([
            'name' => $request->name,
            'setor' => $request->setor,
            'city' => $request->city,
            'date' => $request->date
        ]);
        
        //Atualizar a tela de cadastro e exibir uma mensagem em caso de sucesso
        return redirect()->route(('colaborador.create'))->with('success', 'Colaborador cadastrado com sucesso');
    }

    public function edit(Colaborador $colaborador){
        return view('colaboradors.edit', ['colaborador' => $colaborador]);
    }

    public function update(Request $request, Colaborador $colaborador){

        $request->validate([
            'name' => 'required|string|max:255',
            'setor' => 'required|string',
            'city' => 'required|string',
            'date' => 'required|date',

        ]);

        $colaborador->update([
            'name' => $request ->input('name'),
            'setor' => $request ->input('setor'),
            'city' => $request ->input('city'),
            'date' => $request ->input('date')
        ]);

        return redirect()->route('colaborador.show', $colaborador)->with('success', 'Colaborador editado com sucesso');

    }

    public function destroy(Colaborador $colaborador){
        $colaborador->delete();

        return redirect()->route('colaborador.create', $colaborador)->with('success', 'Colaborador apagado com sucesso');
    }
}