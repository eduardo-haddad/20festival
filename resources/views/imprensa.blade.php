
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

                    
                        <p><br><br><span class="bold">A4&Holofote</span><br>
                        Cristiane Nascimento<br>
                        <a href="mailto:cristianenascimento@a4eholofote.com.br">cristianenascimento@a4eholofote.com.br</a><br>
                        Neila Carvalho<br>
                        <a href="mailto:neilacarvalho@a4eholofote.com.br">neilacarvalho@a4eholofote.com.br</a><br>
                        +55 11 3897 4122</p>
                         
                        <p><span class="bold">{!! switchLang('Assessoria de Imprensa', 'Press relations') !!} | Sesc Pompeia</span><br>
                        Roberta Della Noce e Fernanda Porta Nova<br>
                        Camila Cetrone {!! switchLang('(estagiária)', '(intern)') !!}<br>
                        <a href="mailto:imprensa@pompeia.sescsp.org.br">imprensa@pompeia.sescsp.org.br</a><br>
                        +55 11 3871 7720</p>
                         
                        <p><span class="bold">{!! switchLang('Comunicação', 'Communication') !!} | Associação Cultural Videobrasil</span><br>
                        Marcele Rocha e Cecília do Val<br>
                        <a href="mailto:comunicacao@videobrasil.org.br">comunicacao@videobrasil.org.br</a><br>
                        +55 11 3645 0516</p>

                    


                    
                    
                </div>
            </div>
    

        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>

        <div id="logos">
            @include('elements.logos')
        </div>
    </div>
    

@stop
