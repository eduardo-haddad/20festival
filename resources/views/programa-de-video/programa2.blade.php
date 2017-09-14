
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
                {!! switchLang('<h1>PROGRAMA II</h1>&nbsp;&nbsp;Duracão 1h06’20”<br>
                    Dia 5.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 12h<br>
                    A partir do dia 10.10: de terça a sábado, às 14h; domingos, às 12h', 

                    '') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Kavich Neang</strong> (Camboja, 1987)<br>
                    <em>Kong Bei</em>, 2015, 20’20”
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Uma costureira e um motorista de mototáxi levam uma vida a dois, comum e previsível, há quarenta anos. Certa noite, ao levar uma passageira, ele se lembra de uma dançarina que amou e de quem se perdeu quando o Khmer Vermelho chegou ao poder, em 1975. O encontro revela as realidades mudas que entrelaçam a vida das pessoas e a história política.', 

                    'A seamstress and a motorcycle taxi driver have shared an ordinary and predictable life for forty years. One night, when driving a female passenger, he recalls a dancer he once loved and lost when the Khmer Rouge came to power in 1975. The encounter reveals the mute realities that intertwine people’s lives and political history.') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Haig Aivazian</strong> ({!!switchLang('Líbano', 'Lebanon')!!}, 1980)<br>
                    <em>Not Every Day Is Spring</em>, 2016, 46’
                </div>
                
                <div class="texto interno">
                {!! switchLang('Apresentações musicais em Istambul pontuam o filme, como uma melodia que atravessa as histórias fragmentadas da Turquia. A vida e a música de Udi Hrant Kenkulian tornam-se símbolo das violências cometidas contra a população armênia, como o estabelecimento da rádio estatal, central na formação da nacionalidade turca moderna, em prédio erguido com as pedras de um cemitério armênio.', 

                    'Musical shows in Istanbul punctuate the film like a melody that runs through the fragmented stories of Turkey. The life and music of Udi Hrant Kenkulian have become a symbol of the violence committed against the Armenian population, such as the decision to set up the state radio station, a key element in the formation of modern Turkish nationality, in a building erected with stones from an Armenian cemetery.') !!}
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
