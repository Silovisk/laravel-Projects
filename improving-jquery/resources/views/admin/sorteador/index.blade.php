@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="container">
        <div class="container__conteudo">
            <div class="container__informacoes">
                <div class="container__texto">
                    <h1>Sorteador<span class="container__texto-azul"> de números</span></h1>

                    <div class="container__campo">
                        <label class="texto__paragrafo">Quantidade de números</label>
                        <input class="container__input" id="quantidade" type="number" min="1">
                    </div>

                    <div class="container__campo">
                        <label class="texto__paragrafo">Do número</label>
                        <input class="container__input" id="de" type="number" min="1">
                    </div>

                    <div class="container__campo">
                        <label class="texto__paragrafo">Até o número</label>
                        <input class="container__input" id="ate" type="number" min="1">
                    </div>
                </div>

                <div class="chute container__botoes">
                    <button id="btn-sortear" class="container__botao">Sortear</button>
                    <button id="btn-reiniciar" class="container__botao-desabilitado" >Reiniciar</button>
                </div>
                <div class="container__texto" id="resultado">
                    <label class="texto__paragrafo">Números sorteados: nenhum até agora</label>
                </div>
            </div>

            <img src="{{asset('assets/img/sorteador/ia.png')}}" alt="Uma pessoa com capacete de astronauta" class="container__imagem-pessoa" />
        </div>
    </div>
</div>
@endsection

@section('content')
@endsection

@section('modals')
@endsection
