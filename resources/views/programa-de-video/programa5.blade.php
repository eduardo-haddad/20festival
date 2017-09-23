
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Programa de vídeo - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Video program - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Programa de vídeo — Auditório', '') !!}
                </div>

                <div class="texto interno">
                {!! switchLang('<h1>PROGRAMA IV</h1>&nbsp;&nbsp;Duracão 1h15’<br>
                    Dia 7.10 às 14h e 18h; dia 8.10, às 18h<br>
                    A partir do dia 10.10: de terça a sábado, às 20h; domingos, às 18h', 

                    '') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Natasha Mendonca</strong> ({!!switchLang('Índia', 'India')!!}, 1978)<br>
                    <em>Ajeeb Aashiq</em>, 2016, 75’ 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Na Índia, o cotidiano de uma mulher cis e de um homem trans é atravessado pelas relações de gênero. Ambos buscam amor e liberdade em uma cultura de violência e misoginia. Alternando drama e poesia, o filme cria um manifesto transfeminista, um comentário sobre a geopolítica e a cultura de Mumbai, um exercício de imaginação sobre novas formas de vida.', 

                    'In India, the daily life of a cis woman and a trans man is traversed by gender relations. Both seek love and freedom in a culture of violence and misogyny. Alternating drama and poetry, the film creates a transfeminist manifesto, a commentary on the geopolitics and culture of Mumbai, an imaginative exercise on new ways of life.') !!}
                </div>
               

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
