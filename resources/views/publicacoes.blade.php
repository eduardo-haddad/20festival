
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Publicações - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Publications - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Publicações', 
                                'Publications') !!}
                </div>
                
                <div class="texto">

                    <div class="imgSobre" class="dv">
                        {!! Html::image('img/capa_catalogo_low.jpg') !!}
                    </div>

                    {!! switchLang('

                    <p>Com um projeto gráfico que recria elementos tradicionais das enciclopédias, servindo-se não só de textos, mas também de imagens, ilustrações, mapas e gráficos, o <strong>Catálogo Enciclopédico</strong> do 20º Festival de Arte Contemporânea Sesc_Videobrasil amplia o contato do público com o contexto e os conceitos articulados pelas obras selecionadas, convidando o espectador a repensar criticamente as disciplinas e as categorias que vêm normalizando as formas de experimentar e compreender o mundo.</p>

                    <p>Integrando arte, cultura, astronomia, biologia, história e geografia de modo a tornar ainda mais evidente o rompimento das fronteiras entre arte e ciência, o catálogo lista, em ordem alfabética, os artistas e suas obras, intercalando-os com outros tipos de verbetes – palavras-chave, países e regiões –que conceituam o Sul global e sua produção artística.</p>

                    <p>Além do catálogo, será lançado em 2018 o livro <strong>Leituras</strong>. Organizado pelo curador João Laia, o volume reúne ensaios e artigos que desdobram e aprofundam os temas que permeiam o Festival, buscando repensar o mundo a partir de cosmologias não ocidentais.</p>', 


                    '<p>Featuring a graphic design that recreates traditional elements of encyclopedias, drawing not only texts, but also images, illustrations, maps and charts, the <strong>Encyclopedic Catalog</strong> of the 20th Contemporary Art Festival expands the audience’s contact with the context and concepts interconnected by the selected works, inviting spectators to critically rethink the disciplines and categories that have regulated our ways of experiencing and understanding the world.</p>

                    <p>Combining art, culture, astronomy, biology, history and geography to further evidence the blurring of boundaries between art and science, the catalog lists, in alphabetical order, the artists and their works, interspersed with other kinds of entries – keywords, countries and regions – that conceptualize the global South and its artistic production.</p>


                    <p>Also to be published, besides the catalog, is book <strong>Leituras, </strong>in 2018<strong>.</strong> Edited by the curator João Laia, it compiles essays and articles that develop and probe deeper into the themes that permeate the Festival, aiming to rethink the world from the viewpoint of non-Western cosmologies.</p>') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
