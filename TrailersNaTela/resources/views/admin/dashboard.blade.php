@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mb-0">Listagem dos filmes</h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($movies as $movie)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="{{ route('movies.show', ['movie' => $movie->id]) }}"
                                        class="text-decoration-none">
                                    <img src="{{ $movie->path_poster ? asset('storage/posters/' . $movie->path_poster) : asset('assets/img/boxed-bg.jpg') }}"
                                        class="card-img-top img-fluid w-100 zoom" alt="Movie Poster"
                                        style="height: 300px; object-fit: cover;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title"><strong class="fs-4">Titulo:</strong> {{ $movie->title }}
                                        </h5>
                                        <p class="card-text"><strong class="fs-4">Sinopse:</strong> {{ $movie->synopsis }}
                                        </p>
                                        <strong class="fs-4">Categoria:</strong>
                                        <div class="d-flex flex-wrap m-1">
                                            @foreach ($movie->categories as $category)
                                                <span class="badge bg-info text-light fs-6 mb-2 m-2">
                                                    {{ $category->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                        <p class="card-text"><strong class="fs-4">Diretor:</strong>
                                            {{ $movie->director->name }}
                                        </p>
                                        <p class="card-text"><strong class="fs-4">Duração:</strong>
                                            {{ $movie->duration }}
                                        </p>
                                        <div class="mt-auto d-flex justify-content-center">
                                            <a href="{{ route('movies.show', ['movie' => $movie->id]) }}"
                                                class="btn btn-primary w-25 mt-auto btn-vibrate">Ver Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="col-md-12">
                                <h3 class="mb-0">Nenhum filme cadastrado</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <x-pagination :paginator="$movies" />
    </div>

@endsection

@section('modals')
@endsection
