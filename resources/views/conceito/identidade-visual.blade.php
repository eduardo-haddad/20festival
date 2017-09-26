
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

                    <p><strong>Sul e Norte</strong></p>

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


                    '<div class="subTituloPag">Topics on the visual language of the 20th Contemporary Art Festival Sesc_Videobrasil</div>

                    <p class="assinatura">
                        Vitor Cesar & Felipe Kaizer
                    </p>

                    <p><strong>South and North</strong></p>

                    <p>The South of the world is in focus. The word “Sul” (South) is emphasized over the other elements that make up the exhibition’s title. The South surpasses in importance everything else. “South” is one of the Festival’s names, alluding to the debates on <em>decolonization</em> and <em>post-colonialism</em>. That is how the curatorship’s overarching trend has been expressed in recent years. The difference this time is the break with the hierarchization of names, running counter to the logic stemming from the North.</p>

                    <p>The South is also a subject in the North. Once again, the North takes an interest in the South. Current reasons lie in the limitations of affluent society, which is quickly becoming unsustainable. The South seeks different ways of life, new fields to occupy. In its own terms, the North speaks of a “state of mind” still detached from the body. But in the South the problem is not approached in the same way.</p>

                    <p><strong>Anthropocene</strong></p>

                    <p>We live in a geological age which is also artificially produced. From now on, human beings are a factor of the planet’s climate. The <em>Anthropocene</em> implies, among other things, overcoming the difference between natural and artificial. Human beings result from climatic conditions and climatic conditions result from human action. Plastic is a component of new volcanic rock. <em>Plastiglomerates</em> accumulate in seas and shores. Soon they will be found in streets and apartments.</p>

                    <p>Buildings over sidewalks over stones, in layers, give rise to great confusion. The <em>urban</em> is, from now on, irremediably at the core of our concerns. It is a point of no return. Everything revolves around its quantities, its scales, its densities. Cities expand, multiply, obstruct each other.</p>

                    <p><strong>Visual identities</strong></p>

                    <p>Every visual identity <em>identifies</em> and <em>communicates</em>. Every identity seeks repetition and coherence. To this end, <em>control</em> is kept over its manifestations. Such control is acquired through <em>systems</em> and <em>programs</em>. Thus reads the corporate identity textbook, internationally consolidated post-1950.</p>

                    <p>The Sesc_Videobrasil Festival project seeks to steer clear of such imperatives. It is a contemporary art exhibition with no problems of continuity. There remains, however, the demand for <em>distinction</em>, in whose name one runs the risk of <em>strangeness</em> in face of the standard project for art.</p>

                    <p>Also considered are the conditions of new means of communication. The digital environment promotes the dissociation between visual form and information structure. Nowadays, all textual information borrows the media vehicles in which it circulates. The pressure for distinction then falls entirely on the <em>image</em>. That has consequences for all visual communicators who have become accustomed to the predictable interaction between text and image.</p>

                    <p><strong>Ways of doing</strong></p>

                    <p>The visual language of the 20th Contemporary Art Festival Sesc_Videobrasil is a response to the series of questions raised. Or rather, to the extent that the questions remain unanswered, graphic design configures itself as a question. What one sees is a way of questioning.</p>

                    <p>This process starts out from curatorial reflections. Decisions on concepts, but also on artists. A particular universe is identified in the chosen production. Then, a possible “vocabulary” is defined for that universe. However, the antithesis of systematization is attempted in this process: catalog, signage, advertisements are drawn <em>case by case</em>. Such an attitude does not prevent the project as a whole from eventually finding an individual form, considering how each manifestation of language inherits traits from the former and incorporates new elements.</p>') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
