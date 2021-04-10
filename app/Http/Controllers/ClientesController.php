<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $clientes = Funcionario::all();

        return view('clientes.listar', ['clientes' => $clientes]);
    }
}
