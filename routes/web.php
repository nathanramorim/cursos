<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Alunos@index')->name('home');
Route::get('/page/{page}','Alunos@listar')->name('home-page');

Route::prefix('/alunos')->group(function () {
    Route::get('/', 'Alunos@index')->name('aluno-listar');
    Route::get('page/{page}', 'Alunos@pagination')->name('aluno-pagination');
    Route::get('certificados', 'Alunos@certificados')->name('aluno-certificado');
    Route::get('cadastrar', 'Alunos@showInsert')->name('aluno-cadastrar');
    Route::post('insert', 'Alunos@insert')->name('aluno-insert');
    Route::get('deletar/{id}', 'Alunos@deletar')->name('aluno-deletar');
    Route::post('atualizar', 'Alunos@atualizar')->name('aluno-atualizar');
    Route::get('/{id}', 'Alunos@selecionar')->name('aluno-id');
    Route::get('carga/{id}/{senha}', 'Alunos@seed')->name('aluno-carga');
});

Route::prefix('/cursos')->group(function () {
    Route::get('/', 'Cursos@listar')->name('curso-listar');
    Route::get('certificados', 'Cursos@certificados')->name('curso-certificado');
    Route::get('cadastrar', 'Cursos@showInsert')->name('curso-cadastrar');
    Route::post('insert', 'Cursos@insert')->name('curso-insert');
    Route::get('deletar/{id}', 'Cursos@deletar')->name('curso-deletar');
    Route::post('atualizar', 'Cursos@atualizar')->name('curso-atualizar');
    Route::get('/{id}', 'Cursos@selecionar')->name('curso-id');
    Route::get('carga/{id}/{senha}', 'Cursos@seed')->name('cursos-carga');
});

Route::prefix('/certificados')->group(function () {
    Route::get('/', 'Certificados@listar')->name('certificado-listar');
    Route::get('cadastrar', 'Certificados@showInsert')->name('certificado-cadastrar');
    Route::post('insert', 'Certificados@insert')->name('certificado-insert');
    Route::get('deletar/{id}', 'Certificados@deletar')->name('certificado-deletar');
    Route::post('atualizar', 'Certificados@atualizar')->name('certificado-atualizar');
    Route::get('certificados/{id}', 'Certificados@selecionar')->name('certificado-id');
    Route::get('carga/{id}/{senha}', 'Certificados@seed')->name('certificado-carga');
    
});