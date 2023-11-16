@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0"><strong>Filme:</strong> {{ $movie->title }}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active fs-1" aria-current="page">
                    <a class="text-decoration-none text-dark" href="/admin">Dashboard Filmes</a>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-back movie-card">
            <div class="movie-card-background"
                style="background-image: url('{{ $movie->path_poster ? asset('storage/posters/' . $movie->path_poster) : asset('assets/img/boxed-bg.jpg') }}');">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="{{ $movie->path_poster ? asset('storage/posters/' . $movie->path_poster) : asset('assets/img/boxed-bg.jpg') }}"
                            class="card-img-top img-fluid w-100 zoom movie-card-image" alt="Movie Poster"
                            style="height: 600px; object-fit: unset;">
                    </div>
                </div>
                <div class="col-md-6 movie-details d-flex align-items-center">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center p-3">
                            <div class="col-md-12">
                                <h5 class="card-title"><strong class="fs-4">Titulo:</strong> {{ $movie->title }}
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <p class="card-text"><strong class="fs-4">Sinopse:</strong> {{ $movie->synopsis }}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <strong class="fs-4">Categoria:</strong>
                                <div class="d-flex flex-wrap m-1">
                                    @foreach ($movie->categories as $category)
                                        <span class="badge bg-info text-light fs-6 mb-2 m-2">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="card-text"><strong class="fs-4">Diretor:</strong>
                                    {{ $movie->director->name }}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="card-text"><strong class="fs-4">Duração:</strong>
                                    {{ $movie->duration }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
@endsection
