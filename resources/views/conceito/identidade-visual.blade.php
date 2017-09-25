
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Identidade visual - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Visual identity - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Identidade visual', 
                                'Visual identity') !!}
                </div>
                
                <div class="texto">

                    <div class="imgSobre" class="dv">
                        {!! Html::image('img/identidade-visual_low.jpg') !!}
                    </div>

                    {!! switchLang('

                    <div class="subTituloPag">Tópicos sobre a linguagem visual do 20º Festival de Arte Contemporânea Sesc_Videobrasil</div>

                    <p class="assinatura">
                        Vitor Cesar & Felipe Kaizer
                    </p>

                    <p>Em questão, o Sul do mundo. Destaca-se o “Sul” dos “Panoramas” em detrimento dos outros elementos que compõem o título da exposição. O Sul supera em importância tudo o mais. “Sul” é um dos nomes do Festival e remete aos debates sobre <em>descolonização </em>e <em>pós-colonianismo</em>. Assim se expressa a direção geral da curadoria nos últimos anos. A diferença dessa vez está na <em>desierarquização</em> dos nomes, em desacordo com a lógica oriunda do Norte.</p>

                    <p>O Sul também é tema no Norte. Mais uma vez, o Norte se interessa pelo Sul. As razões de hoje se encontram nos limites da sociedade afluente, que rapidamente se torna insustentável. Busca-se no Sul outros modos de viver, novos campos a ocupar. Nos seus termos, o Norte fala de um “estado mental” ainda destacado do corpo. Mas no Sul o problema não se coloca da mesma forma.</p>

                    <p><strong>Antropoceno</strong></p>

                    <p>Vivemos em uma era geológica produzida também artificialmente. A partir de agora o humano é um fator do clima do planeta. O <em>antropoceno</em> implica, entre outras coisas, a superação da diferença entre <em>o natural</em> e o<em> artificial</em>. O humano é resultado das condições climáticas e as condições climáticas são resultado da ação humana. O plástico está na composição das novas pedras vulcânicas. Os <em>plastiglomerados </em>se acumulam nos mares e nas praias. Em breve, estarão nas ruas e nos apartamentos.</p>

                    <p>Edifícios sobre calçadas sobre pedras, em camadas, dão lugar a uma grande confusão. O <em>urbano</em> está, a partir de agora, irremediavelmente no centro das nossas preocupações. Desse ponto não há retorno. Tudo gira em torno das suas quantidades, suas escalas, suas densidades. As cidades se expandem, se multiplicam, se obstruem.</p>

                    <p><strong>Identidades visuais</strong></p>

                    <p>Toda identidade visual <em>identifica</em> e <em>comunica</em>. Toda identidade busca repetição e coerência. Para tanto, mantêm-se o <em>controle </em>sobre suas manifestações. Tal controle se adquire por meio de <em>sistemas</em> e <em>programas</em>. Assim reza a cartilha da identidade corporativa, que se consolida internacionalmente depois de 1950.</p>

                    <p>O projeto do Festival Sesc_Videobrasil procura passar ao largo desses imperativos. Trata-se de uma exposição de arte contemporânea sem problemas de continuidade. Permanece, contudo, a exigência de <em>distinção</em>. É em nome dela que se corre o risco do <em>estranhamento</em> diante do padrão de projeto para a arte.</p>

                    <p>Também são consideradas as condições dos novos meios de comunicação. O ambiente digital promove a dissociação entre a forma visual e a estrutura da informação. Agora, toda informação textual toma emprestada a forma dos meios onde circula. A pressão por distinção então recai totalmente sobre a <em>imagem</em>. Isso tem consequências para todo comunicador visual que se acostumou ao jogo previsível de texto e imagem.</p>

                    <p><strong>Modos de fazer</strong></p>

                    <p>A linguagem visual do 20º Festival de Arte Contemporânea Sesc_Videobrasil é uma resposta à série de questionamentos levantados. Melhor dizendo, na medida em que as questões continuam sem resposta, o projeto gráfico se constitui, ele mesmo, como pergunta. O que se vê é uma forma de perguntar.</p>

                    <p>Esse processo parte de reflexões curatoriais. Decisões sobre conceitos, mas também sobre artistas. Identifica-se um universo particular na produção escolhida. A partir daí se define um “vocabulário” possível para esse universo. Mas, nesse processo, experimenta-se a antítese da sistematização: catálogo, sinalização, anúncios são desenhados <em>caso a caso</em>. Essa atitude não impede que o projeto como um todo encontre, afinal, uma forma singular, considerando o modo como cada manifestação da linguagem herda características da anterior e incorpora novos elementos.</p>', 


                    '') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
