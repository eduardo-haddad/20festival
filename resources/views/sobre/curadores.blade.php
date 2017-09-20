
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Por uma  Explicação Necessária - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'For a Necessary Explanation - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno">

            <div id="mainMenu">
                @include('elements.mainMenu')
            </div>

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Por uma  Explicação Necessária', 
                                'For a Necessary Explanation') !!}
                </div>
                
                <div class="texto">

                    {{-- <div class="imgSobre">
                        {!! Html::image('img/sobre/danilo.jpg') !!}
                    </div> --}}

                    {!! switchLang('

                    <!-- <div class="subTituloPag">Por uma  Explicação Necessária</div> -->

                    <p class="assinatura" style="margin-bottom: 20px;">por Ana Pato, Beatriz Lemos, Diego Matos e João Laia<br>
                        Curadores convidados</p>

                    <div class="trecho">
                        <section>
                            <p class="bold">Sobre o Rigor na Ciência</p>
                            <p><em>…Naquele império, a Arte da Cartografia alcançou tal Perfeição que o mapa de uma única Província ocupava toda uma cidade, e o mapa do Império toda uma Província. Com o tempo, estes Mapas Desmedidos não foram satisfatórios e os Colégios de Cartógrafos levantaram um Mapa do Império que tinha o tamanho do Império e coincidia pontualmente com ele. Menos Afeitas ao Estudo da Cartografia, as Gerações Seguintes entenderam que esse dilatado Mapa era Inútil e não sem Impiedade o entregaram às Inclemências do sol e dos Invernos. Nos Desertos do Oeste perduram despedaçadas Ruínas do Mapa habitadas por Animais e por Mendigos; em todo o País não há outra relíquia das Disciplinas Geográficas.<br><br>
                            Suárez Miranda: Viajes de Varones Prudentes, libro cuarto, capítulo XIV, Lérida, 1658*.<br>
                            * Borges, Jorge Luis. O fazedor (1960). São Paulo: Companhia das Letras, 2008.</em>
                            </p>
                        </section>
                    </div>

                    <p>No momento em que disputas narrativas se acirram, sob o fantasma permanente de crise – econômica, ecológica ou cultural –, e os reordenamentos sociopolíticos locais e globais tornam-se constantes, a exposição Panoramas do Sul e os artistas representados nela trazem à tona o desejo da arte de ampliar e subverter nossas concepções de mundo.</p>

<p>Nestes tempos instáveis, práticas artísticas borram fronteiras entre as ciências e nos levam em uma viagem à origem da história, das sociedades e da Terra. Reverbera-se, assim, o estudo da vida, da evolução do universo, das dinâmicas dos grupos sociais ao longo da história, bem como da invenção de novas formas de fazer política.</p>

<p>Nesse sentido, o espectro de observação do artista ganha alterações diversas de escala diante do mundo que o cerca, dos micro-organismos – fungos, modelos atômicos e celulares – até o âmbito do cosmos; das construções mais simples do cotidiano aos grandes reordenamentos urbanos e arquitetônicos; das ações no campo da micropolítica às mobilizações em massa. Vozes simbolicamente vindas de lugares que antes estavam à margem agora procuram qualificar uma nova ordem, diversa do paradigma moderno e das grandes narrativas totalizadoras, de progresso e desenvolvimento, que deixaram um legado histórico traumático, e do cientificismo de outra hora, que nos fez crer na onipotência do homem e de sua tecnologia.</p>

<p>As obras reunidas no contexto da exposição permitem fazer uma leitura integrada de arte, cultura, astronomia, biologia, história, geografia etc. Esse desejo de investigar as áreas do conhecimento e seus limites, proposto pelos artistas, traduz a ideia de que somente uma ampliação de nossas concepções de mundo será capaz de restituir liberdade à imaginação humana e expandir os saberes, fortemente atados aos modelos ocidentais de produção e legitimação.</p>

<p>Chamamos o partido curatorial que regeu nossas escolhas de <em>Teoria das constelações</em>, numa proposta que se contrapõe, de início, à ideia de precisão do campo científico, expondo as relações entre o particular e o geral, o mínimo e o todo, a certeza e a imprecisão, a arte e a ciência. Em resposta aos trabalhos selecionados, teceram-se agrupamentos que, por sua permeabilidade às contaminações e ausência de hierarquias, conformam melhor o conceito de constelação. Sua estrutura aproxima-se, em última instância, da organização de palavras e conceitos na nuvem de um vocabulário reconhecível e integrado, como será visto logo adiante.</p>

<p>Esta publicação nasce do processo curatorial, que compreendeu a seleção de cinquenta artistas a partir de um universo de quase 2 mil inscritos. Motivados por ele, procuramos esboçar no livro uma teoria fictícia dos saberes revelados pelos artistas selecionados, tendo os trabalhos escolhidos para a exposição como campo de experimentação. Para compor este catálogo enciclopédico, construímos uma narrativa em forma de constelações, a partir de artistas, obras e conceitos que delas derivam.</p>

<p>Em meio ao processo de investigação curatorial, distinguimos seis conjuntos principais de temas, que dão nome às constelações (diagrama 1). Para determinar as áreas de conhecimento abrangidas por nossa hipótese curatorial, tomamos como referencial o Vocabulário Controlado do Sistema Integrado de Bibliotecas da Universidade de São Paulo (SIBiUSP)<sup>[1]</sup>, e adotamos, como método, uma livre adaptação – conceitual e gráfica – da macroestrutura que define as relações lógico-semânticas entre as áreas e terminologias dos saberes científicos em seus diferentes níveis (diagramas 2, 3 e 4).</p>

<p>Rompendo com o formato clássico de catálogo de exposição, este catálogo enciclopédico é composto por duas centenas de verbetes, contemplando todas as obras e artistas que integram a mostra, assim como seus países de origem e os conceitos e campos do conhecimento que sustentam o pensamento da curadoria. Ao fim de cada verbete, uma lista de remissões aponta para conexões que podem expandir seu conteúdo, relacionando artistas, países de origem, obras, palavras-chave e imagens das obras. Essas conexões dão vida às constelações.</p>

<p>Os verbetes relativos a obras e artistas foram editados a partir do material submetido pelos próprios artistas em reposta à convocatória do 20º Festival de Arte Contemporânea Sesc_Videobrasil, junto com seu portfólio. Já os verbetes sobre países e palavras-chave foram extraídos (integralmente ou em versão editada) de fontes variadas, entre compêndios, dicionários e enciclopédias impressos e on-line; todas estão listadas no apêndice <em>Fontes</em>.</p>

<p>Apesar de utilizarmos uma variedade de fontes de informação para chegar às definições aqui propostas, fica patente não só sua necessária incompletude, mas também a impossibilidade de sistematizar um conhecimento universal democrático, acessível e inclusivo.</p>

<p>Esta obra é destinada a todos aqueles que estejam dispostos e interessados em repensar criticamente as disciplinas e as categorias que vêm normalizando nossas formas de experimentar o mundo. Nossa intenção é produzir, com este formato enciclopédico de catálogo, uma leitura reversa e aberta, em que a forma classificatória, ao ser aplicada a tudo e a todos, faz saltar aos olhos o próprio paradigma que estrutura nossa realidade e nossos saberes.</p>

<div class="nota">
<sup>[1]</sup> O Sistema Integrado de Bibliotecas da Universidade de São Paulo (SIBiUSP) é o “órgão responsável por alinhar a gestão da informação, da produção intelectual e das bibliotecas institucionais aos objetivos da Universidade” (http://www.sibi.usp.br/). É dele a responsabilidade de gerir, de maneira informacional, os acervos e bibliotecas dessa instituição, promovendo a organização e o acesso a seu legado científico local, nacional e internacional, e contribuindo para a formação de público aqui e alhures. A USP, maior instituição universitária brasileira, encontra-se entre as principais universidades do mundo, tendo papel fundamental em sua região, a América Latina. A escolha de seu sistema de informação como base para a estruturação do catálogo enciclopédico perpassa a ideia de legitimação do conhecimento no âmbito de um sistema de poder estruturado. Portanto, a intenção foi valer-nos de uma base comum de estruturação da ciência e de seus mecanismos produtivos.
</div>

', 


                    '

                    <!-- <div class="subTituloPag">Por uma  Explicação Necessária</div> -->

                    <p class="assinatura" style="margin-bottom: 20px;">by Ana Pato, Beatriz Lemos, Diego Matos, and João Laia<br>
                        Guest Curators</p>

                    <div class="trecho">
                        <section>
                            <p class="bold">On Rigor in Science</p>
                            <p><em>...In that empire, the Art of Cartography reached such Perfection that the map of a single Province occupied an entire city, and the map of the Empire, a whole Province. Over time, these Incommensurable Maps became unsatisfactory and the Societies of Cartographers drew up an Empire Map that was the size of the Empire and coincided exactly with it. Less Accustomed to the Study of Cartography, the Following Generations deemed Useless this distended Map and not without Impiety delivered it to the Inclemency of the Sun and the Winters. In the Western Deserts survive shattered Ruins of the Map, inhabited by Animals and Vagrants; in the whole Country there is no other relic of the Geographical Disciplines.<br><br>
                            Suárez Miranda: Viajes de Varones Prudentes, libro cuarto, capítulo XIV, Lérida, 1658*.<br>
                            * Jorge Luis Borges, O fazedor (1960) (São Paulo: Companhia das Letras, 2008).</em>
                            </p>
                        </section>
                    </div>

                    <p>As narrative disputes escalate driven by the permanent specter of crisis—whether economic, ecological, or cultural—and local and global, social and political rearrangements abound, the exhibition Southern Panoramas and the artists there represented bring out art’s desire to expand and subvert our worldviews.</p>

<p>In these unstable times, artistic practices blur the boundaries between sciences and take us on a journey to the origin of history, of societies, and of Earth. What resonates, therefore, is the study of life, of the evolution of the universe, of the dynamics of social groups throughout history, and of the invention of new ways of doing politics.</p>

<p>In this sense, the artist’s spectrum of observation of the surrounding world varies widely in scale, from microorganisms—fungi, atomic, and cellular models—to the realm of the cosmos; from the simplest constructions of daily life to great urban and architectural rearrangements; from actions in the field of micropolitics to mass mobilizations. Voices symbolically hailing from places previously relegated to the fringes now seek to qualify a new order, distinct from the modern paradigm and the overwhelming narratives of progress and development that bequeathed a traumatic historical legacy, and from the scientism of other times that made us believe in the omnipotence of man and his technology.</p>

<p>The works brought together in this exhibition afford an integrated interpretation of art, culture, astronomy, biology, history, geography, etc. In this desire to investigate fields of knowledge and their limits, proposed by the artists, lies the idea that only by broadening our world conceptions can we restore freedom to human imagination and expand knowledge, strongly bound to Western models of production and legitimacy.</p>

<p>We named the curatorial concept that governed our choices <em>Theory of Constellations</em>, in a proposal that primarily opposes the idea of scientific precision, exposing the relations between particular and general, minimum and whole, certainty and imprecision, art and science. The selected works inspired the weaving of clusters which, thanks to their permeability to contamination and absence of hierarchies, better configure the concept of constellation. Their structure ultimately evokes the organization of words and concepts in the cloud of a recognizable and integrated vocabulary, as will be seen below.</p>

<p>This volume stems from the curatorial process, whereby fifty artists were selected from a total of almost two thousand submissions.&nbsp; It motivated us to sketch in the book a fictitious theory of the knowledge revealed by the selected artists, experimentally exploring the works chosen for the exhibition. To compose this encyclopedic catalog, we built up a narrative in the form of constellations, based on artists, works, and concepts deriving from them.</p>

<p>Over the course of our curatorial investigation, we identified six main sets of themes, which designate the constellations (diagram 1). To determine the fields of knowledge covered by our curatorial hypothesis, we used as reference source the <em>Vocabulário Controlado do Sistema Integrado de Bibliotecas da Universidade de São Paulo</em> (Controlled Vocabulary of the University of São Paulo Integrated Library System) (SIBiUSP),<sup>2</sup> and adopted as method a free adaptation—conceptual and graphic—of the macrostructure that defines the logico-semantic relations between the fields and terminologies of scientific knowledge at different levels (diagrams 2, 3, and 4).</p>

<p>Breaking with the classic format of the exhibition catalog, the encyclopedic catalog comprises two hundred entries, addressing all the works and artists taking part in the exhibition, as well as their countries of origin and the concepts and fields of knowledge that support the curators’ line of thought. At the end of each entry, a list of cross-references points to connections that can expand its content, relating artists, countries of origin, works, keywords, and images of the works. These connections lend life to the constellations.</p>

<p>The entries on works and artists were edited from the material sent in by the artists themselves in response to the call for submission of the 20th Contemporary Art Festival Sesc_Videobrasil, along with their portfolios. The entries on countries and keywords, in turn, were taken (either in full or edited) from a variety of sources, including textbooks, dictionaries, and encyclopedias, printed and online, all of which are listed in the <em>Sources</em> appendix.</p>

<p>Although we used a variety of sources of information to compose the definitions proposed here, their necessary incompleteness is obvious, as is the impossibility of systematizing democratic, accessible, and inclusive universal knowledge.</p>

<p>This work is intended for all those who are willing and interested in critically rethinking the disciplines and categories that have standardized our ways of experiencing the world. Our intention with this encyclopedic catalog is to produce a reverse and open reading in which the classification format, by being applied to everything and everyone, blatantly reveals the very paradigm that structures our reality and our knowledge.</p>


<div class="nota">
<sup>[1]</sup> The University of São Paulo Integrated Library System (SIBiUSP) is the “body responsible for aligning the management of information, intellectual production, and institutional libraries with the university’s objectives” (http://www.sibi.usp.br/, in Portuguese). It is in charge of managing, in an informative way, the collections and libraries of that institution, furthering the organization of and access to its local, national, and international scientific legacy, and contributing to educating the public in Brazil and elsewhere. USP, the largest institution of higher education in Brazil, is among the leading universities worldwide and plays a key role in its region, Latin America. The choice of using its information system as a framework for the encyclopedic catalog relates to the idea of ​​legitimizing knowledge within the scope of a structured power system. Therefore, the intention was to take advantage of a common foundation for structuring science and its productive mechanisms.
</div>
') !!}

                    

                </div>
            </div>
    
            

        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
