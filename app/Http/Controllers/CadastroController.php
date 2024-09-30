<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'cargo' => 'required|string',
            'idade' => 'required|string',
            'cpf' => 'required|string',
        ]);

        Funcionario::create($request->all());

        return redirect('/cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
}

