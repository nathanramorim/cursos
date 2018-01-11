<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\CertificadosModel;
use App\CursosModel;
use App\AlunosModel;

class Certificados extends Controller
{
   
    public function listar()
    {
        $certificados = DB::table('aluno_certificado')
                            ->join('aluno', 'aluno.id', '=', 'aluno_certificado.aluno_id')
                            ->join('curso', 'curso.id', '=', 'aluno_certificado.curso_id')
                            ->paginate(10);
        return view('certificados.home', ['all' => $certificados]);
    }

    public function showInsert(){
        $aluno = new AlunosModel;
        $alu = $aluno::all();
        $curso = new CursosModel;
        $curs = $curso::all();
        return view('certificados.cadastrar',['cursos' => $curs, 'alunos' => $alu]);
    }

    public function insert(Request $request){
        $certificados = new CertificadosModel;
        $certificados->aluno_id = $request->input('aluno_id');
        $certificados->curso_id = $request->input('curso_id');
        $certificados->datamatricula = $this->acertaData($request->input('datamatricula'));
        $certificados->dataconclusao = $this->acertaData($request->input('dataconclusao'));
        $certificados->nota = $request->input('nota');
        $certificados->save();
        return redirect('certificados');
    }

   

    public function deletar($id){
        $certificados = new CertificadosModel;
        $certificados::find($id)->delete();
        return redirect('certificados');
    }

    public function atualizar(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $curso = new CertificadosModel;
        $new = $curso::find($request->input('id'));
        $new->nome = $request->input('nome');
        $new->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $new->save();
        return redirect('certificados');
    }
    
    public function selecionar($id){
        $certificado = new CertificadosModel;
        $certi = $certificado::find($id);
        $aluno = new AlunosModel;
        $alu = $aluno::find($certi->aluno_id);
        $curso = new CursosModel;
        $curs = $curso::all();
        return view('certificados.editar',['certificado'=>$certi,'cursos' => $curs, 'aluno' => $alu]);
    }
    public function acertaData($data){
        $data = explode('-',$data);
        $data =  $data[2].'-'.$data[1].'-'.$data[0];
        return $data;
    }

    public function seed($max_id,$senha){
        $date = Carbon::now()->toDateTimeString();
        $cont = 0;
        if($senha == 'root'){
            for ($i=12; $i <= $max_id ; $i++) { 
                $certificado = new CertificadosModel();
                $certificado->aluno_id = 13;
                $certificado->curso_id = 3;
                $certificado->datamatricula = $date;
                $certificado->dataconclusao = $date;
                $certificado->nota = 78;
                $certificado->save();
                $cont++;
            }
            echo $cont.' cargas feitas!';
        }else{
            return redirect('alunos');
        }
    }
}
