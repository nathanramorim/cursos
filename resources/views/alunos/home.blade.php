@extends('template.index')
@section('title', 'Cursos | Home')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Alunos</h2>
        </div>
        <div class="card-body">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Editar/Remover</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($all as $aluno)
                <?php $data_n = explode('-',$aluno->data_nascimento)?>
                <?php $data_n = $data_n[2].'-'.$data_n[1].'-'.$data_n[0]?>
                <tr>
                    <th scope="row">{{$aluno->matriculado}}</th>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->email}}</td>
                    <td>{{$aluno->telefone}}</td>
                    <td>{{$data_n}}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{url('alunos/'.$aluno->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{url('alunos/deletar/'.$aluno->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div> 
@endsection