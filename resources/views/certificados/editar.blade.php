@extends('template.index')
@section('title', 'Cursos | Editar')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Editar Certificado</h2>
        </div>
        <div class="card-body">
        {{ Form::open(['url' => 'cursos/atualizar', 'class' => 'form-horizontal']) }}
        {{ Form::hidden('id',$certificado->id,['placeholder' => 'Digite o nome do curso','class'=>'form-control']) }}

        <div class="form-group row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="aluno_id">Selecione o Aluno:</label>
                            <select name="aluno_id" class="form-control">
                                <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="curso_id">Selecione o Curso:</label>
                            <select name="curso_id" class="form-control">
                                @foreach ($cursos as $curso)
                                <option value="{{$curso->id}}">{{$curso->nome_curso}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4">
                            {{ Form::text('datamatricula',$certificado->datamatricula,['placeholder' => 'Digite a data de matrícula','class'=>'form-control', 'id' => 'data-matricula', 'required']) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::text('dataconclusao',$certificado->dataconclusao,['placeholder' => 'Digite a data de conclusão','class'=>'form-control', 'id' => 'data-conclusao', 'required']) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::text('nota',$certificado->nota,['placeholder' => 'Digite a nota','class'=>'form-control', 'required']) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
            <div class="col-sm-2 offset-sm-10">
                <a href="{{url('certificados')}}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        {{ Form::close() }}
        </div>
    </div>
</div>
@endsection