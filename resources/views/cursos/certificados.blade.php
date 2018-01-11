@extends('template.index')
@section('title', 'Cursos | Home')

{{--  content  --}}
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Cursos</h2>
        </div>
        <div class="card-body">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Certificados</th>
                <th>Editar/Remover</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($all as $curso)
                    @if ($curso['certificados'] >= 100)
                        <tr>
                            <th scope="row">{{$curso['id']}}</th>
                            <td>{{$curso['nome']}}</td>
                            <td>{{$curso['certificados']}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{url('cursos/'.$curso['id'])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{url('cursos/deletar/'.$curso['id'])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
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