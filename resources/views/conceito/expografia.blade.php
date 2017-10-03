
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Expografia - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Exhibition design - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Expografia', 
                                'Exhibition design') !!}
                </div>
                
                <div class="texto">

                    {{-- <div class="imgSobre" class="dv">
                        {!! Html::image('img/identidade-visual_low.jpg') !!}
                    </div> --}}

                    {!! switchLang('

                    <div class="subTituloPag">Atravessamentos</div>

                    <p class="assinatura">
                        por André Vainer
                    </p>

                    <p>O projeto expositivo do 20º Festival de Arte Contemporânea Sesc_Videobrasil faz parte de uma nova concepção de uso do espaço expositivo, que remonta ao 19ª Festival, de 2015.</p>

                    <p>Nessas duas edições, procuramos uma grande integração do espaço da exposição com a Área de Convivência, local mais importante do Sesc Pompeia, frequentado por todo o público. Tentamos estabelecer uma relação íntima entre as obras e as pessoas, despertando a curiosidade e propiciando a fruição. Assim, a obra de arte não fica restrita ao espaço museológico, mas passa a fazer parte de um cotidiano de experimentação.</p>

                    <p>Há pessoas que vão até o Sesc Pompeia para ver o Festival, mas há principalmente aquelas que o frequentam no dia a dia como um lugar de convívio social. Ali, o Festival é o oposto de um palco: é um local em que a obra vai até as pessoas, que podem estar sozinhas ou acompanhadas, mas que serão atravessadas pela presença artística.</p>

                    <p>O Festival se estende ainda pelo Hall do Teatro, pela Rua Central e pelas Oficinas de Criação, intervindo, portanto, nos espaços já conhecidos dos frequentadores, introduzindo novos elementos em seu cotidiano.</p>', 


                    '<div class="subTituloPag">Traversals</div>

                    <p class="assinatura">
                        by André Vainer
                    </p>

                    <p>The exhibition design for the 20th Contemporary Art Festival Sesc_Videobrasil is part of a new concept of using exhibition spaces, first explored in the 19th Festival, in 2015.</p>

                    <p>In these two editions, we aimed to comprehensively integrate the exhibition space with the Convivência area, the most important place in Sesc Pompeia, frequented by all spectators. We tried to establish an intimate relationship between artworks and people, triggering curiosity and enjoyment. Thus, the work of art is not restricted to the museum space, but is part of a daily routine of experimentation.</p>

                    <p>Some people visit Sesc Pompeia to see the Festival, but others frequent it habitually as a place of social interaction. In this sense, the Festival is the opposite of a stage: a place where the work of art comes to people, who, whether alone or accompanied, are traversed by the artistic presence.</p>

                    <p>The Festival also spans the Theater Hall, the Main Street and the Oficinas de Criação, thus intervening in spaces already familiar to regular visitors, introducing new elements in their daily life.</p>') !!}

                    

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
