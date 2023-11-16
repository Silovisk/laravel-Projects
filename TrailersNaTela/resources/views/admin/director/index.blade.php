@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Listagem de Diretores</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Diretores
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <a type="button" class="btn btn-primary mb-3 d-flex" href="{{ route('directors.create') }}">
                Novo Diretor
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">CEP</th>
                        <th style="width:25%; text-align: center;" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($directors)
                        @foreach ($directors as $director)
                            <tr>
                                <td>{{ $director->id }}</td>
                                <td>{{ $director->name }}</td>
                                <td>{{ $director->email }}</td>
                                <td>{{ $director->phone }}</td>
                                <td>{{ $director->zipcode }}</td>
                                <td class="text-center">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-1">
                                            <a href="{{ route('directors.edit', ['director' => $director->id]) }}"
                                                class="text-primary border-0 bg-transparent">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="text-danger border-0 bg-transparent"
                                                onclick="Page.destroyDirector({{ $director }})">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <x-pagination :paginator="$directors" />
@endsection

@section('modals')
@endsection
