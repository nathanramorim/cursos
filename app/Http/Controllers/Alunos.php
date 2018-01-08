<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunosModel;
use Carbon\Carbon;

class Alunos extends Controller
{
    public function showInsert(){
        return view('alunos.cadastrar');
    }

    public function insert(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $data_nascimento = explode('-',$request->input('data_nascimento'));
        $data_nascimento =  $data_nascimento[2].'-'.$data_nascimento[1].'-'.$data_nascimento[0];
        $alunos = new AlunosModel;
        $alunos->matriculado = $request->input('matriculado');
        $alunos->datacadastro = $date;
        $alunos->nome = $request->input('nome');
        $alunos->email = $request->input('email');
        $alunos->senha = $request->input('senha');
        $alunos->telefone = $request->input('telefone');
        $alunos->data_nascimento = $data_nascimento;
        $alunos->save();
        return redirect('/alunos');

    }

    public function listar (){
        $alunos = new AlunosModel;
        $all = $alunos::all();
        return view('alunos.home',['all'=>$all]);
    }

    public function deletar($id){
        $aluno = new AlunosModel;
        $aluno::find($id)->delete();
        return redirect('alunos');
    }
    public function atualizar(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $aluno = new AlunosModel;
        $new = $aluno::find($request->input('id'));
        $data_nascimento = explode('-',$request->input('data_nascimento'));
        $data_nascimento =  $data_nascimento[2].'-'.$data_nascimento[1].'-'.$data_nascimento[0];
        $new->matriculado = $request->input('matriculado');
        $new->datacadastro = $date;
        $new->nome = $request->input('nome');
        $new->email = $request->input('email');
        $new->senha = $request->input('senha');
        $new->telefone = $request->input('telefone');
        $new->data_nascimento = $data_nascimento;
        $new->save();
        return redirect('alunos');
    }
    
    public function selecionar($id){
        $aluno = new AlunosModel;
        $return = $aluno::find($id);
        return view('alunos.editar',['aluno'=>$return]);
    }
}
