<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunosModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

    public function certificados(){
        $alunos = new AlunosModel;
        $all = $alunos::all();
        return view('alunos.certificados',['all'=>$all]);

    }

    public function numeroCertificados($aluno_id = null){
        $result = DB::table('aluno_certificado')
        ->join('aluno', 'aluno.id', '=', 'aluno_certificado.aluno_id')
        ->where('aluno.id',$aluno_id)->count();
        return $result;
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

    public function seed($qtd,$senha){
        $date = Carbon::now()->toDateTimeString();
        $cont = 0;
        if($senha == 'root'){
            for ($i=1; $i <= $qtd  ; $i++) { 
                $aluno = new AlunosModel();
                $aluno->nome = str_random(10);
                $aluno->matriculado = rand();
                $aluno->email =  str_random(10).'@gmail.com';
                $aluno->telefone = '(31) 99999-9999';
                $aluno->senha = '123456';
                $aluno->datacadastro = $date;
                $aluno->data_nascimento = $date;
                $aluno->save();
                $cont++;
            }
            echo $cont.' cargas feitas!';
        }else{
            return redirect('alunos');
        }
    }
    
}
