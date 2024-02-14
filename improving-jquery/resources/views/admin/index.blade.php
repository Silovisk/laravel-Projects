@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="mb-0">Projetos alura</h3>
        </div>
        <div class="col-sm-6 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/sorteador/ia.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sorteador de Numeros</h5>
                    <br>
                    <p class="card-text">Usando Jquery</p>
                    <div class="d-flex justify-content-center">

                        <a href="{{ route('sorteador.index') }}" class="btn btn-primary">Sortear</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
@endsection

@section('modals')
@endsection
