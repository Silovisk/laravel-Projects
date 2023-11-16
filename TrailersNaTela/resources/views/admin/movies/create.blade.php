@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Filme</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    <a href="/admin/filmes/create">
                        Adicionar Filme
                    </a>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('movies.store') }}" id="formCreateMovie" class="global-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Titulo do Filme" value="{{ old('title') }}" required>
                                <label for="title">Título</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="category">Categoria</label>
                            <div class="form-floating mb-3">
                                <select class="form-control select2MovieCategory" id="category" name="category[]" multiple="multiple" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ in_array($category->id, old('category', [])) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="director_id" name="director_id" required>
                                        <option value="" selected disabled>Selecione um diretor</option>
                                        @foreach($directors as $director)
                                            <option value="{{ $director->id }}" {{ old('director_id') == $director->id ? 'selected' : '' }}>
                                                {{ $director->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="director">Diretor</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="duration" name="duration"
                                    placeholder="Duração do Filme" value="{{ old('duration') }}" required>
                                <label for="duration">Duração</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="path_poster" name="path_poster"
                                    placeholder="Poster do Filme" value="{{ old('path_poster') }}">
                                <label for="path_poster">Poster</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="path_trailer" name="path_trailer"
                                    placeholder="Trailer do Filme" value="{{ old('path_trailer') }}" required>
                                <label for="path_trailer">URL Trailer</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Nome do Filme"
                                    value="{{ old('synopsis') }}" required></textarea>
                                <label for="synopsis">Sinopse</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a type="button" class="btn btn-secondary mb-3 d-flex" href="{{ route('movies.index') }}">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary mb-3 ms-3 d-flex">
                                    Salvar
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modals')
@endsection
