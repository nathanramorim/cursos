<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunosModel extends Model
{
    protected $table = 'aluno';
    public $timestamps = false;
    public function certificado(){
        return $this->belongsTo('aluno_certificado');
    }
}
