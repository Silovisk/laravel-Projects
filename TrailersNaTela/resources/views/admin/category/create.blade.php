@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Listagem Das Categorias</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Categoria
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('categories.store') }}" id="formCreateCategory" class="global-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Titulo do Filme" value="{{ old('name') }}" required>
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <textarea type="text" class="form-control" id="description" name="description"
                                    placeholder="Titulo do Filme" value="{{ old('description') }}"></textarea>
                                <label for="description">Descrição</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a type="button" class="btn btn-secondary mb-3 d-flex" href="{{ route('categories.index') }}">
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
