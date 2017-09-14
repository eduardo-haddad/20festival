
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

            

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Programa de vídeo — Auditório', '') !!}
                </div>

                <div class="texto interno">
                {!! switchLang('<h1>PROGRAMA IV</h1>&nbsp;&nbsp;Duracão 1h15’<br>
                    Dia 7.10 às 12h e 16h; dia 8.10, às 16h<br>
                    A partir do dia 10.10: de terça a sábado, às 18h; domingos, às 16h', 

                    '') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Roy Dib</strong> ({!!switchLang('Líbano', 'Lebanon')!!}, 1983)<br>
                    <em>Beit El Baher</em>, 2016, 75’ 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Em uma casa projetada por um conhecido arquiteto iraquiano dos anos 1960, um jantar reúne quatro pessoas em torno de temas e relações complicados. O conforto financeiro contrasta com o desconforto existencial, enquanto a tentativa arquitetônica de mesclar modernismo e tradições islâmicas reflete questões intelectuais e emocionais de uma geração de árabes ilhada entre ruínas de ideologias, medos e desejos.', 

                    'In a house designed by a renowned Iraqi architect from the 1960s, a dinner party brings together four people confronting complicated themes and relationships. Financial comfort contrasts with existential discomfort, while the architectural attempt to blend modernism and Islamic traditions reflects the intellectual and emotional issues of a generation of Arabs trapped between ideological ruins, fears, and desires.') !!}
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
