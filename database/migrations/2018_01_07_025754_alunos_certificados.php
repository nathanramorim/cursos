<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlunosCertificados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_certificado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluno_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->date('datamatricula');
            $table->date('dataconclusao');
            $table->double('nota',10,2) ;           
            $table->foreign('aluno_id')->references('id')->on('aluno');
            $table->foreign('curso_id')->references('id')->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_certificado');
    }
}
