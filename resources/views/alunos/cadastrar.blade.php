@extends('template.index')
@section('title', 'Cursos | Alunos')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Cadastrar Aluno</h2>
        </div>
        <div class="card-body">
        {{ Form::open(['url' => 'alunos/insert', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::text('nome','',['placeholder' => 'Digite o nome completo','class'=>'form-control']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::password('senha',['placeholder' => 'Digite a senha','class'=>'form-control']) }}
                </div>
            </div>
            
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-2">
                                {{ Form::text('data_nascimento','',['placeholder' => 'Digite a data de nascimento','class'=>'form-control', 'id' => 'data-nascimento']) }}
                        </div>
                        <div class="col-md-4">
                                {{ Form::text('telefone','',['placeholder' => 'Digite o telefone de contato','class'=>'form-control', 'id' => 'telefone', 'maxlength' => '14']) }}
                        </div>
                        <div class="col-md-6">
                                {{ Form::email('email','',['placeholder' => 'Digite o endereço de email','class'=>'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::text('matriculado_show','',['placeholder' => 'Digite a senha','class'=>'form-control', 'disabled', 'id' => 'matricula_show']) }}
                    {{ Form::hidden('matriculado','',['placeholder' => 'Digite a senha','class'=>'form-control', 'id' => 'matricula']) }}
                    <span class="help-block-none">Este é o número referente a matrícula do aluno, caso seja efetuado o cadastro.</span>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-2 offset-sm-10">
                <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        {{ Form::close() }}
        </div>
    </div>
</div>
@endsection