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
        $cursos = new CursosModel;
        $cursos->nome = $request->input('nome');
        $cursos->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $cursos->save();
        return redirect('cursos');
    }

    public function listar (){
        $cursos = new CursosModel;
        $all = $cursos::all();
        return view('cursos.home',['all'=>$all]);
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
        $new->nome = $request->input('nome');
        $new->inativo = ($request->input('disponivel') == 1) ? $request->input('disponivel') : 0;
        $new->save();
        return redirect('cursos');
    }
    
    public function selecionar($id){
        $curso = new CursosModel;
        $return = $curso::find($id);
        return view('cursos.editar',['curso'=>$return]);
    }
}
