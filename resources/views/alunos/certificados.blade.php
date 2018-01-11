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
                <th>Qtd Certificados</th>
                <th>Editar/Remover</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($all as $aluno)
                    @if ($aluno['certificados'] >= 100)
                        <tr>
                            <th scope="row">{{$aluno['matricula']}}</th>
                            <td>{{$aluno['nome']}}</td>
                            <td>{{$aluno['email']}}</td>
                            <td>{{$aluno['telefone']}}</td>
                            <td>{{$aluno['datanascimento']}}</td>
                            <td>{{$aluno['certificados']}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{url('alunos/'.$aluno['id'])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{url('alunos/deletar/'.$aluno['id'])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div> 
@endsection