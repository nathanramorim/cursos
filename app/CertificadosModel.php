<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificadosModel extends Model
{
    protected $table = 'aluno_certificado';
    public $timestamps = false;
    public function alunos(){
        return $this->hasMany('aluno');
    }
    public function cursos(){
        return $this->hasMany('curso');
    }
}
