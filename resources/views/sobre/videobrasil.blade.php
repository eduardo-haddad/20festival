
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Videobrasil - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Videobrasil - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Interação, Acesso, Encontro', 
                                'Interaction, Access, Encounter') !!}
                </div>
                
                <div class="texto">

                    {{-- <div class="imgSobre">
                        {!! Html::image('img/sobre/solange.jpg') !!}
                    </div> --}}

                    {!! switchLang('<p>Por mais de trinta anos, o Videobrasil vem acompanhando as transformações da arte contemporânea e suas relações com as novas tecnologias de produção de imagem.</p>

                    <p>Também acompanhamos de perto as movimentações sociais e estéticas dos países do Sul global, e nosso posicionamento diante das possibilidades abertas por essas relações é diretamente afetado pelas práticas não hegemônicas provenientes dessa região.</p>

                    <p>Tais práticas se mesclam ao nosso próprio modo de organização e, consequentemente, à ativação de obras que compõem o Acervo Histórico Videobrasil, um dos maiores acervos de videoarte da América Latina, disponível permanentemente para consulta na nossa sede, o Galpão VB.</p>

                    <p>A mesma lógica de amplo acesso que estrutura a Videoteca do Galpão VB está por trás do <strong>Guia Digital</strong> do 20º Festival de Arte Contemporânea Sesc_Videobrasil. Disponível nos terminais de pesquisa e consulta presentes nos espaços expositivos do Sesc Pompeia, o Guia dá acesso aos trabalhos exibidos e a informações completas sobre os artistas selecionados, incluindo participações em edições anteriores. Seu conteúdo será alimentado continuamente com registros de todas as ações que acontecem no evento: performances, depoimentos, ativações da exposição. Todo esse universo pode ser localizado nos mapas da interface, dando ao público maior autonomia para traçar percursos nos espaços ocupados pelo Festival no Sesc Pompeia. Os programas de vídeo também podem ser assistidos no Guia após a semana de abertura.</p>

                    <p>Já a <a href="http://plataforma.videobrasil.org.br/" target="_blank" style="text-decoration: underline; font-weight: bold;">Plataforma:VB</a>, uma ferramenta on-line de pesquisa coletiva desenvolvida pela Associação Cultural Videobrasil, oferece um amplo cardápio de depoimentos, imagens, links, ensaios e outros conteúdos referenciais sobre os artistas e obras do 20º Festival e das edições anteriores.</p>

                    <p>Essa interação entre espaços físicos e virtuais reflete o desejo da <a href="http://www.videobrasil.org.br/" target="_blank" style="text-decoration: underline; font-weight: bold;">Associação Cultural Videobrasil</a> de continuamente atravessar fronteiras. Com essas premissas, o Festival chega à sua vigésima edição consolidado como um panorama acessível e instigante da produção artística contemporânea e dos diferentes modos de pensar e existir que circulam pelo Sul global.</p>', 


                    '<p>For over thirty years, Videobrasil has been alert to the transformations of contemporary art and its relations with the new technologies of image production.</p>

                    <p>We have also followed closely the social and aesthetic movements of the countries of the global South, and our positioning towards the possibilities afforded by these relationships is directly affected by non-hegemonic practices stemming from the countries of that region.</p>
                    <p>Such practices blend with our particular modes of organization and, consequently, with the activation of works that compose the Videobrasil Historical Archive, one of the largest video art collections in Latin America, permanently available for research at our headquarters, VB Galpão.</p>

                    <p>The same logic of broad access which structures the Video Library at Galpão VB supports the <strong>Digital Guide</strong> of the 20th Contemporary Art Festival Sesc_Videobrasil. Available in the information search terminals at the Sesc Pompeia exhibition spaces, the Guide affords access to the artworks on display and full information on the selected artists, including participation in previous editions. The content will be continuously fed with reports from all actions taking place in the event: performances, statements, activations. All this information can be located in the interface maps, giving the audience greater autonomy to plan visiting routes throughout the Festival’s venues at Sesc Pompeia. The video programs can also be viewed on the Guide after the opening week.</p>

                    <p><a href="http://plataforma.videobrasil.org.br/" target="_blank" style="text-decoration: underline; font-weight: bold;">Platform: VB</a>, a collective online research tool developed by Associação Cultural Videobrasil, offers in turn a wide menu of statements, images, links, essays and other referential content on the artists and artworks of the 20th Festival and other editions.</p>

                    <p>This interaction between physical and virtual spaces reflects the desire of <a href="http://www.videobrasil.org.br/en" target="_blank" style="text-decoration: underline; font-weight: bold;">Associação Cultural Videobrasil</a> to continuously cross borders. Based on these premises, the Festival reaches its twentieth edition established as an accessible and instigating panorama of contemporary artistic production and of the different ways of thinking and existing in circulation throughout the global South.</p>
') !!}

                    

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
