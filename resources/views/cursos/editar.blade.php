@extends('template.index')
@section('title', 'Cursos | Editar')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Editar Curso</h2>
        </div>
        <div class="card-body">
        {{ Form::open(['url' => 'alunos/update', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="nome">Nome:</label>
                    {{ Form::text('nome',$curso->nome,['placeholder' => 'Digite o nome completo','class'=>'form-control']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="senha">Senha:</label>
                    {{ Form::password('senha',['placeholder' => 'Digite a senha','class'=>'form-control']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="matriculado">Número de matricula:</label>
                    {{ Form::text('matriculado',$curso->matriculado,['placeholder' => 'Digite a senha','disabled','class'=>'form-control','id' => 'matricula']) }}
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-2 offset-sm-10">
                <a href="{{url('cursos')}}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        {{ Form::close() }}
        </div>
    </div>
</div>
@endsection