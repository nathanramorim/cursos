<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CursosModel;
use Carbon\Carbon;

class Cursos extends Controller
{
    public function showInsert(){
        return view('cursos.cadastrar');
    }

    public function insert(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $data_nascimento = explode('-',$request->input('data_nascimento'));
        $data_nascimento =  $data_nascimento[2].'-'.$data_nascimento[1].'-'.$data_nascimento[0];
        $cursos = new CursosModel;
        $cursos->matriculado = $request->input('matriculado');
        $cursos->datacadastro = $date;
        $cursos->nome = $request->input('nome');
        $cursos->email = $request->input('email');
        $cursos->senha = $request->input('senha');
        $cursos->telefone = $request->input('telefone');
        $cursos->data_nascimento = $data_nascimento;
        $cursos->save();
        return redirect('/cursos');

    }

    public function listar (){
        $cursos = new CursosModel;
        $all = $cursos::all();
        return view('cursos.home',['all'=>$all]);
    }

    public function deletar($id){
        $aluno = new CursosModel;
        $aluno::find($id)->delete();
        return redirect('cursos');
    }
    
    public function selecionar($id){
        $aluno = new CursosModel;
        $return = $aluno::find($id);
        return view('cursos.editar',['curso'=>$return]);
    }
}
