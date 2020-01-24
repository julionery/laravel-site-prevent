@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Páginas</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Lista de Páginas</h2>
        </div>
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($paginas as $pagina)
                    <tr>
                        <td>{{ $pagina->titulo }}</td>
                        <td>{!! $pagina->texto !!} </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.paginas.editar', $pagina->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection