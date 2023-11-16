@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Listagem Dos Filmes</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Filmes
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <a type="button" class="btn btn-primary mb-3 d-flex" href="{{ route('movies.create') }}">
                Novo Filme
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Sinopse</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Diretor</th>
                        <th style="width:25%; text-align: center;" scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($movies)
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->synopsis }}</td>
                                <td>
                                    @foreach ($movie->categories as $category)
                                        <span class="badge bg-info text-light fs-6 mb-2">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>{{ $movie->director->name }}</td>
                                <td class="text-center">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-1">
                                            <a href="{{ route('movies.edit', ['movie' => $movie->id]) }}"
                                                class="text-primary border-0 bg-transparent">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="text-danger border-0 bg-transparent"
                                                onclick="Page.destroyMovie({{ $movie }})">
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

    <x-pagination :paginator="$movies" />

@endsection

@section('modals')
@endsection
