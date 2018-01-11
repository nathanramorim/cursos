<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AlunosModel;

class Busca extends Controller
{
    public function buscar(Request $request) {
        $aluno = new AlunosModel;
        // Sets the parameters from the get request to the variables.
        $name = Request::get('busca');
        $result = $aluno::find($name);
        return view('alunos.home',['all'=>$result]);
    }
}
