@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Diretores</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Editar Diretores
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('directors.update', ['director' => $director->id]) }}" id="formEditDirector"
                    class="global-form" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nome do Diretor" value="{{ $director->name ?? old('name') }}" required>
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="birth_date" name="birth_date"
                                    placeholder="Data de Nascimento"
                                    value="{{ $director->birth_date ?? old('birth_date') }}" required>
                                <label for="birth_date">Data de Nascimento</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="E-mail" value="{{ $director->email ?? old('email') }}" required>
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <select type="text" class="form-control" id="gender" name="gender"
                                    placeholder="Gênero" title="Informe seu gênero" required>
                                    <option value="">Selecione...</option>
                                    <option value="M"
                                        {{ ($director->gender ?? old('gender')) == 'M' ? 'selected' : '' }}>Masculino
                                    </option>
                                    <option value="F"
                                        {{ ($director->gender ?? old('gender')) == 'F' ? 'selected' : '' }}>Feminino
                                    </option>
                                    <option value="X"
                                        {{ ($director->gender ?? old('gender')) == 'X' ? 'selected' : '' }}>Outro</option>
                                </select>
                                <label for="gender">Gênero</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control phone" id="phone" name="phone"
                                    placeholder="Telefone" required value="{{ $director->phone ?? old('phone') }}">
                                <label for="phone">Telefone</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control cpf" id="cpf" name="cpf"
                                    placeholder="CPF" required value="{{ $director->cpf ?? old('cpf') }}">
                                <label for="cpf">CPF</label>
                            </div>
                        </div>

                        <hr>
                        <div class="col-md-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control zipcode" id="zipcode" name="zipcode"
                                    placeholder="CEP" required value="{{ $director->zipcode ?? old('zipcode') }}">
                                <label for="zipcode">CEP</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-6">
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Endereço" required value="{{ $director->address ?? old('address') }}" readonly>
                                <label for="address">Endereço</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Número" required value="{{ $director->number ?? old('number') }}">
                                <label for="number">Número</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="neighbourhood" name="neighbourhood"
                                    placeholder="Bairro" required
                                    value="{{ $director->neighbourhood ?? old('neighbourhood') }}" readonly>
                                <label for="neighbourhood">Bairro</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="Estado" required value="{{ $director->state ?? old('state') }}" readonly>
                                <label for="state">Estado</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Cidade" required value="{{ $director->city ?? old('city') }}" readonly>
                                <label for="city">Cidade</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="complement" name="complement"
                                    placeholder="Complemento" value="{{ $director->complement ?? old('complement') }}">
                                <label for="complement">Complemento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-secondary mb-3 d-flex"
                                href="{{ route('directors.index') }}">
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
