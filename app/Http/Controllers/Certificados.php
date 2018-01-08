<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CertificadosModel;

class Certificados extends Controller
{
    public function index()
    {
        $certificados = DB::table('aluno_certificado')->paginate(2);
        return view('certificados.home', ['all' => $certificados]);
    }

    public function showInsert(){
        return view('certificados.cadastrar');
    }

    public function insert(Request $request){
        $certificados = new CertificadosModel;
        $certificados->nome = $request->input('nome');
        $certificados->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $certificados->save();
        return redirect('certificados');

    }

    public function listar (){
        $certificados = new CertificadosModel;
        $all = $certificados::all();
        return view('certificados.home',['all'=>$all]);
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
        $curso = new CertificadosModel;
        $return = $curso::find($id);
        return view('certificados.editar',['curso'=>$return]);
    }
}
