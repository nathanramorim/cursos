@extends('template.index')
@section('title', 'Cursos | Home')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Certificados</h2>
        </div>
        <div class="card-body">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Data de Matricula</th>
                    <th>Data de Conclusao</th>
                    <th>Nota</th>
                    <th>Editar/Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $certificado)
                <tr>
                    <th scope="row">{{$certificado->id}}</th>
                    <td>{{$certificado->nome}}</td>
                    <td>{{$certificado->nome_curso}}</td>
                    <td>{{$certificado->datamatricula}}</td>
                    <td>{{$certificado->dataconclusao}}</td>
                    <td>{{$certificado->nota}}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{url('certificados/'.$certificado->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{url('certificados/deletar/'.$certificado->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$all->links()}}
        </div>
    </div>
</div> 
@endsection