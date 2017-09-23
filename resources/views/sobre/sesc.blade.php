
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Enciclopédia para (re)ver o mundo - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Encyclopedia to (Re)View the World - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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

                    <div class="subTituloPag">Enciclopédia para (re)ver o mundo</div>

                    <p class="assinatura">
                        por Danilo Santos de Miranda<br>
                        Diretor Regional do Sesc São Paulo
                    </p>

                    <p>As transformações culturais e sociais advindas das novas configurações do mundo não só nos apresentam enormes desafios, mas também proporcionam e inspiram uma gama de possibilidades estéticas que interferem nos modos de compreender e repensar a contemporaneidade. Novas mídias e concepções imagéticas tornam-se onipresentes nas situações mais diversas e cotidianas, como se há muito fizessem parte delas, facilitando e, ao mesmo tempo, tornando dispersas e superficiais muitas de nossas experiências.</p>

                    <p>O diálogo da vanguarda com a tradição é um modo eficaz de pensar novos rumos em meio à miríade crescente de recursos que se sucedem e se tornam cada vez mais acessíveis. Em um tempo em que grande parte da informação circulante se estrutura e flui por meio de <em>hyperlinks</em>, o catálogo da 20ª edição do Festival retoma o conceito que os embasa: a enciclopédia – uma coleção organizada de saberes textuais e imagéticos –, apropriando-se da linguagem do campo científico para transformar artistas e obras em linhas-guias para examinar o mundo.</p>

                    <p>O presente catálogo entrelaça arte, cultura, astronomia, biologia, história e geografia, entre outras áreas do conhecimento, de modo a tornar mais evidente o rompimento das fronteiras entre arte e ciência. Mais que isso, integra cosmovisões ancestrais a um pensamento crítico sobre a conjuntura política global, tema presente em muitos dos trabalhos dos cinquenta artistas de mais de vinte países participantes do Festival.</p>

                    <p>A cada edição do Festival, o Sesc e a Associação Cultural Videobrasil promovem o engajamento de curadores, artistas e pesquisadores de diferentes territórios e culturas, identificados com a noção de Sul global, buscando fomentar a produção dessa região geopolítica em sintonia com as mais recentes inquietações no campo das artes visuais. Por meio da pesquisa, do fomento, de ações educativas, do engajamento e do pensamento crítico, ambas as instituições vêm atualizando questões endêmicas abaixo da linha do Equador, incorporando importantes discussões ao conteúdo sempre aberto das artes, em pleno diálogo com o mundo.</p>', 


                    '

                    <div class="subTituloPag">Encyclopedia to (Re)View the World</div>

                    <p class="assinatura">
                        by Danilo Santos de Miranda<br>
                        Regional Director, Sesc São Paulo
                    </p>

                    <p>The cultural and social changes stemming from new world configurations not only pose huge challenges but also provide and inspire a host of aesthetic possibilities that interfere with the ways of understanding and rethinking contemporaneity. New media and imaging concepts have become ubiquitous in the most diverse and mundane circumstances, as if long part of them, facilitating many of our experiences and, at the same time, rendering them more dispersed and superficial.</p>

                    <p>The dialogue between avant-garde and tradition is an effective way to reflect about new directions amidst the growing myriad of resources that succeed each other and become increasingly accessible. At a time when much of the information in circulation is structured and flows through <em>hyperlinks</em>, the catalog of the Festival’s 20th edition retrieves the concept behind them: the encyclopedia—an organized collection of knowledge in texts and images—appropriating scientific language to transform artists and works into guidelines to examine the world.</p>

                    <p>This catalog interweaves art, culture, astronomy, biology, history, and geography, among other fields of knowledge, to further evidence the blurring of boundaries between art and science. More than that, it combines ancestral worldviews with critical thinking on the global political conjuncture, a theme present in many of the works by the fifty artists from more than twenty countries taking part in the Festival.</p>

                    <p>In each edition of the Festival, Sesc and Associação Cultural Videobrasil promote the involvement of curators, artists, and researchers from different territories and cultures identified with the notion of global South, seeking to foster the production of this geopolitical region in line with the most recent concerns in the field of visual arts. Through research, development, educational action, involvement, and critical thinking both institutions have updated issues that are endemic below the equator and incorporated important debates into the ever-open content of the arts in full dialogue with the world.</p>') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
