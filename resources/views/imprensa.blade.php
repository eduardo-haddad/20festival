
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Apresentação - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Introduction - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno" style="height: 500px;">

            

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Imprensa', 'Press') !!}
                </div>
                
                <div class="texto">

                    {{-- {!! switchLang('', '') !!} --}}
                    <span class="bold">Press release</span>: <a href="/download/release_20Festival_pt.pdf">PT</a> / <a href="/download/release_20Festival_en.pdf">EN</a>
                    
                </div>
            </div>
    
            <div id="mainMenu">
                @include('elements.mainMenu')
            </div>

        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
