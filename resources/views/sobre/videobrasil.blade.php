
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
                                '') !!}
                </div>
                
                <div class="texto">

                    {{-- <div class="imgSobre">
                        {!! Html::image('img/sobre/solange.jpg') !!}
                    </div> --}}

                    {!! switchLang('<p>Por mais de trinta anos, o Videobrasil vem acompanhando as transformações da arte contemporânea e suas relações com as novas tecnologias de produção de imagem.</p>

                    <p>Também acompanhamos de perto as movimentações sociais e estéticas dos países do Sul global, e nosso posicionamento perante as possibilidades abertas por essas relações é diretamente afetado pelas práticas não hegemônicas provenientes dos países dessa região.</p>

                    <p>Tais práticas se mesclam ao nosso próprio modo de organização e, consequentemente, à ativação de obras que compõem o Acervo Histórico Videobrasil, um dos maiores acervos de videoarte da América Latina, disponível permanentemente para consulta na nossa sede, o Galpão VB.</p>

                    <p>A mesma lógica de amplo acesso que estrutura a Videoteca do Galpão VB está presente no <strong>Guia Digital</strong> do 20º Festival de Arte Contemporânea Sesc_Videobrasil. Disponível nos terminais de pesquisa e consulta presentes nos espaços expositivos do Sesc Pompeia, o Guia dá acesso aos trabalhos exibidos e a informações completas sobre os artistas selecionados, incluindo participações em edições anteriores. Seu conteúdo será alimentado continuamente com registros de todas as ações que acontecem no evento: performances, depoimentos, ativações da exposição. Todo esse universo pode ser localizado nos mapas da interface, dando ao público maior autonomia para traçar percursos nos espaços ocupados pelo Festival no Sesc Pompeia. Os programas de vídeo também podem ser assistidos no Guia após a semana de abertura.</p>

                    <p>Já a <a href="http://plataforma.videobrasil.org.br/" target="_blank">Plataforma:VB</a>, uma ferramenta on-line de pesquisa coletiva desenvolvida pela Associação Cultural Videobrasil, oferece um amplo cardápio de depoimentos, imagens, links, ensaios e outros conteúdos referenciais sobre os artistas e obras do 20º Festival e outras edições.</p>

                    <p>Essa interação entre espaços físicos e virtuais reflete o desejo da <a href="http://www.videobrasil.org.br/" target="_blank">Associação Cultural Videobrasil</a> de continuamente atravessar fronteiras. Com essas premissas, o Festival chega à sua vigésima edição consolidado como um panorama acessível e instigante da produção artística contemporânea e dos diferentes modos de pensar e existir que circulam pelo Sul global.</p>', 


                    '') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
