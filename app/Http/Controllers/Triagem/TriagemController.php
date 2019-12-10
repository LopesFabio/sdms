<?php

namespace App\Http\Controllers\Triagem;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TriagemController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::get();
        return view('triagem.index', compact('pacientes'));
    }

    public function store(Request $request)
    {
        $request->all();
    }
}
