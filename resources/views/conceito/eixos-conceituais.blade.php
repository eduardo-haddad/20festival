
@extends('layouts.base')

@php
    $idioma = Config::get('app.locale');
@endphp

@section('title')
{!! switchLang(
    'Eixos conceituais - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Conceptual axis - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Eixos conceituais', 
                                'Conceptual axis') !!}
                </div>
                
                <div class="texto eixos">
                    @if($idioma == 'pt')
                        <p><img src="{{ asset('img/eixos/cosmovisoes.png') }}" class="cosmovisoes"></p>
                        <p><img src="{{ asset('img/eixos/ecologias.png') }}" class="ecologias"></p>
                        <p><img src="{{ asset('img/eixos/reinvencao-da-cultura.png') }}" class="reinvencao"></p>
                        <p><img src="{{ asset('img/eixos/historias-invisiveis.png') }}" class="historias"></p>
                        <p><img src="{{ asset('img/eixos/politicas-de-resistencia.png') }}" class="politicas"></p>
                        <p><img src="{{ asset('img/eixos/outros-modernismos.png') }}" class="modernismos"></p>
                    @else
                        <p><img src="{{ asset('img/eixos/cosmovisoes_en.png') }}" class="cosmovisoes"></p>
                        <p><img src="{{ asset('img/eixos/ecologias_en.png') }}" class="ecologias"></p>
                        <p><img src="{{ asset('img/eixos/reinvencao-da-cultura_en.png') }}" class="reinvencao"></p>
                        <p><img src="{{ asset('img/eixos/historias-invisiveis_en.png') }}" class="historias"></p>
                        <p><img src="{{ asset('img/eixos/politicas-de-resistencia_en.png') }}" class="politicas"></p>
                        <p><img src="{{ asset('img/eixos/outros-modernismos_en.png') }}" class="modernismos"></p>
                    @endif


                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
