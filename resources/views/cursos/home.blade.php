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
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Editar/Remover</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($all as $curso)
                <?php $data_n = explode('-',$curso->data_nascimento)?>
                <?php $data_n = $data_n[2].'-'.$data_n[1].'-'.$data_n[0]?>
                <tr>
                    <th scope="row">{{$curso->id}}</th>
                    <td colspan="5">{{$curso->nome}}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{url('cursos/'.$curso->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{url('cursos/deletar/'.$curso->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div> 
@endsection