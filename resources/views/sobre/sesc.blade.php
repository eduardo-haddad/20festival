
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Palavra do Sesc - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Word from Sesc - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Palavra do Sesc', 
                                'Word from Sesc') !!}
                </div>
                
                <div class="texto">

                    <div class="imgSobre" class="dv">
                        {!! Html::image('img/sobre/danilo.jpg') !!}
                    </div>

                    {!! switchLang('

                    <div class="subTituloPag">Outros Nós a Partir do Sul</div>

                    <p class="assinatura">
                        por Danilo Santos de Miranda<br>
                        Diretor Regional do Sesc São Paulo
                    </p>

                    <p>No cenário global contemporâneo, as fronteiras que dividem os Estados-nação e indicam suas posições no mapa-múndi são relativizadas pelas dinâmicas transnacionais de mercado. Nesse contexto, a ideia de geopolítica adquire centralidade. Ao conjugar aspectos geográficos e políticos, essa noção reflete a interdependência entre fatores territoriais, demográficos e econômicos num dado país ou região, cuja governança depende de decisões baseadas em variáveis internas e externas.</p>

                    <p>No âmbito cultural, a intensificação das relações entre os países proporciona um cosmopolitismo ambivalente. Por um lado, atualizam-se as formas de colonização do relações, tendo por base a razão imperialista forjada e difundida pelas grandes potências. Esse mesmo processo abre, por outro lado, uma surpreendente contraface não hegemônica, através da qual outras formas de produzir conhecimento vêm à tona, reivindicando a descolonização do saber ao passo que postulam modos alternativos de lidar com a história e as contradições do presente.</p>

                    <p>O reconhecimento da importância da produção simbólica emergida das margens do sistema mundial capitalista beneficia-se do conceito de Sul global, caro</p>

                    <p>às premissas do <strong>20º Festival de Arte Contemporânea Sesc_Videobrasil</strong>. Apresentando propostas de artistas provenientes de diferentes nações do Sul geopolítico – relativo aos países em desenvolvimento –, o Festival aposta na ampliação das concepções de mundo, alavancada por investigações artísticas imbuídas de problemáticas que se revelam, dialeticamente, locais e globais.</p>

                    <p>Situando-se nessa encruzilhada onde o específico e o geral se encontram, o Sesc realiza uma ação cultural afeita a experiências dedicadas a desfazer as amarras herdadas do passado colonial e contraídas de uma condição geopolítica periférica. Iniciada nos anos 1990, a parceria entre o Sesc e a Associação Cultural Videobrasil vem possibilitando que esses cruzamentos entre as linhas de força locais e internacionais resultem na invenção de outros nós a partir do Sul.</p>
', 


                    '

                    <div class="subTituloPag">Other Nodes from the South</div>

                    <p class="assinatura">
                        by Danilo Santos de Miranda<br>
                        Regional Director, Sesc São Paulo
                    </p>

                    <p>In the contemporary global setting, the boundaries that divide nation-states and mark their positions on the world map are relativized by transnational market dynamics. In this context, the idea of geopolitics acquires centrality. By combining geographic and political aspects, this notion reflects the interdependence between territorial, demographic and economic factors in a given country or region, whose governance depends on decisions based on internal and external variables.</p>

                    <p>In the cultural sphere, intensified relationships between countries give rise to ambivalent cosmopolitanism. On the one hand, the means of colonizing minds are updated, based on imperialist reason forged and spread by the great powers. This same process, on the other hand, paves the way for a surprising non-hegemonic flip side, through which other forms of producing knowledge come to the fore, demanding the decolonization of knowledge while postulating alternative ways of addressing history and the contradictions of present times.</p>

                    <p>Acknowledgment of the importance of the symbolic production emerging from the fringes of the capitalist world system benefits from the concept of Global South, dear to the premises of the <strong>20th Contemporary Art Festival Sesc_Videobrasil</strong>. Presenting proposals by artists from different nations of the geopolitical South—related to the developing countries—the festival targets the expansion of worldviews, leveraged by artistic investigations imbued with issues that prove to be, dialectically, local and global.</p>

                    <p>Lying at this crossroads where the specific meets the general, Sesc presents a cultural action akin to experiences bent on casting off shackles inherited from the colonial past and imposed by a peripheral geopolitical condition. Initiated in the 1990s, the partnership between Sesc and Associação Cultural Videobrasil has enabled such intersections between local and international forces to create other nodes originating in the South.</p>
') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
