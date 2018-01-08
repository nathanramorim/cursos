@extends('template.index')
@section('title', 'Cursos | Alunos')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Editar Aluno</h2>
        </div>
        <div class="card-body">
        {{ Form::open(['url' => 'alunos/atualizar', 'class' => 'form-horizontal']) }}
        {{ Form::hidden('id',$aluno->id) }}
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="nome">Nome:</label>
                    {{ Form::text('nome',$aluno->nome,['placeholder' => 'Digite o nome completo','class'=>'form-control','required']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="senha">Senha:</label>
                    {{ Form::password('senha',['placeholder' => 'Digite a senha','class'=>'form-control','required', 'value' => $aluno->senha]) }}
                </div>
            </div>
            
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-2">
                                <?php $data_n = explode('-',$aluno->data_nascimento)?>
                                <?php $data_n = $data_n[2].'-'.$data_n[1].'-'.$data_n[0]?>
                                <label for="data_nascimanto">Data de nascimento:</label>
                                {{ Form::text('data_nascimento',$data_n,['placeholder' => 'Digite a data de nascimento','class'=>'form-control', 'id' => 'data-nascimento','required']) }}
                        </div>
                        <div class="col-md-4">
                                <label for="telefone">Telefone:</label>
                                {{ Form::text('telefone',$aluno->telefone,['placeholder' => 'Digite o telefone de contato','class'=>'form-control', 'id' => 'telefone', 'maxlength' => '14','required']) }}
                        </div>
                        <div class="col-md-6">
                                <label for="email">E-mail:</label>
                                {{ Form::email('email',$aluno->email,['placeholder' => 'Digite o endereço de email','class'=>'form-control','required']) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="matriculado">Número de matricula:</label>
                    {{ Form::text('matriculado_show',$aluno->matriculado,['placeholder' => 'Digite a senha','disabled','class'=>'form-control','id' => 'matricula']) }}
                    {{ Form::hidden('matriculado',$aluno->matriculado) }}
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-2 offset-sm-10">
                <a href="{{url('alunos')}}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        {{ Form::close() }}
        </div>
    </div>
</div>
@endsection