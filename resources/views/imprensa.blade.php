
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Imprensa - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Press - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno" style="height: 500px;">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>            

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Imprensa', 'Press') !!}
                </div>
                
                <div class="texto">

                    {{-- {!! switchLang('', '') !!} --}}

                    <p><span class="bold">Press release</span>: <a class="underline" href="/download/release_20Festival_pt.pdf">PT</a> / <a class="underline" href="/download/release_20Festival_en.pdf">EN</a></p>

                    <p><span class="bold">Video release</span>: <a class="underline" href="https://vimeo.com/233507757" target="_blank">{!! switchLang('Assistir', 'Watch') !!}</a> {!! switchLang('(disponível para download)', '(available for download)') !!}</p>

                    <p><span class="bold">{!! switchLang('Seleção de imagens (obras)', 'Image selection (works)') !!}</span>: <a class="underline" href="http://videobrasil.org.br/press/20festival/imagens_imprensa/20FestivalSescVideobrasil_imagens.zip">Download</a> / <a class="underline" href="https://www.flickr.com/photos/videobrasil/sets/72157686595495121"  target="_blank">Flickr</a></p>


                    
                    
                </div>
            </div>
    

        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
