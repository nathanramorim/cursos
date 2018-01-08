@extends('template.index')
@section('title', 'Cursos | Cadastro')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Cadastrar Curso</h2>
        </div>
        <div class="card-body">
        {{ Form::open(['url' => 'cursos/insert', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::text('nome','',['placeholder' => 'Digite o nome do curso','class'=>'form-control']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="offset-md-11 col-md-1 form-check text-right">
                        {{Form::checkbox('disponivel', 1, false,['class'=>'form-check-input'])}}
                        <label class="" for="disponivel">Disponível</label>
                    </div>
                </div>
            </div>
            <div class="line"></div>
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