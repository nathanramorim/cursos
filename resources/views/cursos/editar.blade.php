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
        {{ Form::open(['url' => 'cursos/atualizar', 'class' => 'form-horizontal']) }}
        {{ Form::hidden('id',$curso->id,['placeholder' => 'Digite o nome do curso','class'=>'form-control']) }}

            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::text('nome',$curso->nome_curso,['placeholder' => 'Digite o nome do curso','class'=>'form-control']) }}
                </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="offset-md-11 col-md-1 form-check text-right">
                        <?php $checked = false ?>
                        @if ($curso->inativo == 1)
                            <?php $checked = true ?>
                        @endif
                        {{Form::checkbox('disponivel',1, $checked,['class'=>'form-check-input'])}}
                        <label class="" for="disponivel">Disponível</label>
                    </div>
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