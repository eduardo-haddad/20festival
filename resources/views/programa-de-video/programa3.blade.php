
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
                {!! switchLang('<h1>PROGRAMA III</h1>&nbsp;&nbsp;Duracão 1h02’41”<br>
                    Dia 6.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 14h<br>
                    A partir do dia 10.10: de terça a sábado, às 16h; domingos, às 14h', 

                    '') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Ana Vaz</strong> ({!!switchLang('Brasil', 'Brazil')!!}, 1986)<br>
                    <em>Amérika: Bahía de las Flechas</em>, 2016, 8’46” 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('O vídeo revisita o lago Enriquillo, na atual República Dominicana, onde Cristóvão Colombo aportou, em 1492, e confrontou o povo autóctone Taino para estabelecer o primeiro assentamento europeu na América. Usando a câmera como extensão do próprio corpo, a artista evoca a mudança cultural e ecológica sofrida pelo território, para fazer a história emergir do próprio cenário.', 

                    'This video revisits Lake Enriquillo in present-day Dominican Republic, where Christopher Columbus landed in 1492 and confronted the native Taíno people to establish the first European settlement in America. Using the camera as an extension of her own body, the artist evokes the cultural and ecological changes undergone by the land to make history emerge from the actual setting.') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Andrés Padilla Domene</strong> ({!!switchLang('México', 'Mexico')!!}, 1986)<br>
                    <em>Ciudad Maya</em>, 2016, 24’
                </div>
                
                <div class="texto interno">
                {!! switchLang('No limite entre ficção científica e documentário, o vídeo mostra jovens exploradores que manipulam estranhos aparatos tecnológicos para investigar um sítio arqueológico em ruínas na cidade mexicana de Mérida. O sítio revela-se uma réplica moderna de antigas construções maias. A obra questiona preconceitos e clichês associados ao povo indígena desaparecido. ', 

                    'Exploring the limits between science fiction and documentary, the video features young explorers manipulating strange technological devices to investigate the ruins of an archaeological site in the Mexican city of Mérida. The site turns out to be a modern replica of ancient Mayan buildings. The work challenges prejudices and clichés associated with the extinct indigenous people. ') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Jiwon Choi</strong> ({!!switchLang('Coreia do Sul', 'South Korea')!!}, 1991)<br>
                    <em>Parallel</em>, 2017, 29’55”
                </div>
                
                <div class="texto interno">
                {!! switchLang('Uma montagem frenética entremeia elementos da vida sul-coreana – K-Pop, exércitos em marcha, programas de auditório, a primeira presidenta, o líder supremo, Samsung, Gangnam style – e silêncios. O avô da artista conta sua fuga do Norte para o Sul, quando os exércitos cruzaram o paralelo que divide o território desde o fim da Segunda Guerra. Um retrato de conflitos entre realidades e ideologias.', 

                    'This frantic assembly combines elements of South Korean life—K-Pop, marching armies, talk shows, the first female president, the supreme leader, Samsung, Gangnam style—and silences. The artist’s grandfather narrates his escape from North to South, when the armies crossed the parallel that has divided the territory since the end of World War II. A portrait of conflicts between realities and ideologies.') !!}
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
