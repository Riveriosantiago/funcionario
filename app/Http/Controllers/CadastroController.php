<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function listar()
    {
        return view('admin.cadastro.listar');
    }

    public function adicionar()
    {
        return view('admin.cadastro.form');
    }
}
