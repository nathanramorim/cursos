<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CursosModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Cursos extends Controller
{
    public function showInsert(){
        return view('cursos.cadastrar');
    }

    public function insert(Request $request){
        $cursos = new CursosModel;
        $cursos->nome_curso = $request->input('nome');
        $cursos->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $cursos->save();
        return redirect('cursos');
    }

    public function listar (){
        $cursos = new CursosModel;
        $all = $cursos::all();
        return view('cursos.home',['all'=>$all]);
    }

    public function certificados(){
        $cursos = new CursosModel;
        $all = $cursos::all();
        $n = 0;
        foreach ($all  as $curso){
            $allCursos[$n] = [
                'id' => $curso->id,
                'nome' => $curso->nome_curso,
                'certificados' => $this->numeroCertificados($curso->id)
            ];
            $n++;
        }
        return view('cursos.certificados',['all'=>$allCursos]);

    }

    public function numeroCertificados($curso_id = null){
        $result = DB::table('aluno_certificado')
        ->join('curso', 'curso.id', '=', 'aluno_certificado.curso_id')
        ->where('curso.id',$curso_id)->count();
        return $result;
    }


    public function deletar($id){
        $curso = new CursosModel;
        $curso::find($id)->delete();
        return redirect('cursos');
    }

    public function atualizar(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $curso = new CursosModel;
        $new = $curso::find($request->input('id'));
        $new->nome_curso = $request->input('nome');
        $new->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $new->save();
        return redirect('cursos');
    }
    
    public function selecionar($id){
        $curso = new CursosModel;
        $return = $curso::find($id);
        return view('cursos.editar',['curso'=>$return]);
    }

    public function seed($qtd,$senha){
        $cont = 0;
        if($senha == 'root'){
            for ($i=1; $i <= $qtd  ; $i++) { 
                $curso = new CursosModel();
                $curso->nome_curso_curso = str_random(10);
                $curso->inativo = 1;
                $curso->save();
                $cont++;
            }
            echo $cont.' cargas feitas!';
        }else{
            return redirect('alunos');
        }
    }
}
