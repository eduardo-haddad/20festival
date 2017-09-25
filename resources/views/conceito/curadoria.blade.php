
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Curadoria - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Curatorship - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Curadoria', 
                                'Curatorship') !!}
                </div>
                
                <div class="texto">

                    {!! switchLang('

                    <div class="subTituloPag">Visões Alargadas do Mundo</div>

                    <p class="assinatura">
                        Solange O. Farkas<br>
                        Curadora-geral do 20º Festival de Arte Contemporânea Sesc_Videobrasil<br><br>
                        Ana Pato, Beatriz Lemos, Diego Matos, João Laia<br>
                        Curadores convidados
                    </p>

                    <p>Em momentos como o atual, de crises, impasses, catástrofes, disputas narrativas acirradas e constantes reordenamentos sociopolíticos locais e globais, a exposição <strong>Panoramas do Sul</strong> e os artistas representados nela trazem à tona o desejo da arte de ampliar e subverter nossas concepções de mundo. Pautada pela vocação política desde sempre, a produção do Sul ganha protagonismo e se refina em um cenário de retrocesso e incerteza, ressoando com potência crescente à medida que se legitima e institucionaliza. A ampliação de sua presença no mundo da arte e o reconhecimento da importância das perspectivas do Sul em qualquer concerto global de vozes tornam evidente o acerto da aposta nesta região simbólica, alinhavada há mais de vinte anos pelo <strong>Festival de Arte Contemporânea Sesc_Videobrasil</strong>.</p>

                    <p>O impulso de investigar as áreas de produção do conhecimento e seus limites – que se revelou de forma patente na apreciação do total dos trabalhos inscritos – marca as práticas artísticas reunidas nesta vigésima edição, num conjunto de mais de setenta obras de cinquenta artistas. Borrando fronteiras entre arte e ciência, elas nos levam em uma viagem à origem da história, das sociedades e da Terra. Reverberam o estudo da vida, da evolução do universo, das dinâmicas sociais ao longo da história, da invenção de novas formas de fazer política. Ao permitir uma leitura integrada de arte, cultura, astronomia, biologia, história e geografia, o corpo dessas investigações artísticas traduz a ideia de que somente um alargamento de nossas concepções será capaz de restituir liberdade à imaginação humana e expandir saberes atados aos modelos e mecanismos ocidentais de produção e legitimação da verdade.</p>

                    <p>Ocupando espaços múltiplos do Sesc Pompeia, em forma de exposição, programa de vídeo e performances, os trabalhos inspiram um partido curatorial aberto, do qual deriva o que chamamos de Teoria das Constelações – um pensamento que se contrapõe à ideia de precisão do campo científico e expõe as relações entre o particular e o geral, o mínimo e o todo, a certeza e a imprecisão, a arte e a ciência. As obras organizam-se em torno de seis constelações ou eixos conceituais: Cosmovisões, Ecologias, Reinvenção da Cultura, Políticas de Resistência, Histórias Invisíveis e Outros Modernismos.</p>

                    <p>Visitas, aulas abertas, encontros e ativações acabam de compor a plataforma criativa, prática e discursiva do Festival. Como as obras, estas ações reafirmam as ideias de resistência, alteridade e dissenso, em sua capacidade transformadora, como os paradigmas mais importantes da consciência humana.</p>

                    <p>No amplo espectro político para o qual a arte contribui, a opção declarada pela pesquisa que produz experiências potentes de resistência, pluralidade e transformação traduz nosso intuito de caminhar na direção contrária ao esvaziamento progressivo dos discursos hegemônicos que circulam e moldam o campo da arte. As práticas representadas nos <strong>Panoramas do Sul</strong> opõem-se ao esmagamento progressivo de nossos horizontes, assim como ao obscurantismo e o conservadorismo que transpiram na vida pública mundo afora e, em especial, no Brasil. Assim, oferecem sua contribuição para preservar, ainda que penosamente, alguma perspectiva de futuro.</p>

', 


                    '

                    <div class="subTituloPag">Broader Views of the World</div>

                    <p class="assinatura">
                        Solange O. Farkas<br>
                        Chief curator of the 20th Contemporary Art Festival Sesc_Videobrasil<br><br>
                        Ana Pato, Beatriz Lemos, Diego Matos, João Laia<br>
                        Guest curators
                    </p>

                    <p>At times like the present, of crises, impasses, catastrophes, fierce narrative disputes, and constant local and global sociopolitical rearrangements, the <strong>Southern Panoramas</strong> exhibition and the artists there represented bring out art’s desire to expand and subvert our worldviews. Historically driven by political vocation, the production of the South gains prominence and refines itself in a context of regression and uncertainty, reverberating with increasing power as it becomes legitimized and institutionalized. Its growing presence in the art world—and the recognition of the importance of southern views in any global concert of voices—is evidence of the sound decision to invest in this symbolic region taken by the <strong>Contemporary Art Festival Sesc_Videobrasil</strong> almost twenty years ago.</p>

                    <p>The urge to investigate the areas of production of knowledge and their limits—which was clearly revealed in the assessment of all submissions—marks the artistic practices gathered in this 20th edition, in a set of over seventy works by fifty artists. Blurring boundaries between art and science, they take us on a journey to the origin of history, of societies, and of the Earth. They resonate the study of life, of the evolution of the universe, of social dynamics throughout history, of the invention of new ways of doing politics. Enabling a comprehensive interpretation of art, culture, astronomy, biology, history, and geography, the body of these artistic investigations conveys the idea that only by broadening our worldviews can we restore freedom to human imagination and expand knowledge that is bound to Western models and mechanisms of production and legitimation of truths.</p>

                    <p>Occupying multiple venues at Sesc Pompeia as exhibition, video program, and performance, the works inspire a curatorial concept from which derives what we call Theory of Constellations—a notion that opposes the idea of scientific precision and discloses the relations between particular and general, minimum and whole, certainty and imprecision, art and science. The works are organized around six constellations, or conceptual cores: Cosmovisions, Ecologies, Reinvention of Culture, Politics of Resistance, Invisible Stories, and Other Modernisms.</p>

                    <p>Guided tours, open lectures, meetings, and activations complete the Festival’s creative, practical, and discursive platform. Like the artworks, these actions reaffirm the ideas of resistance, alterity, and dissent, in their potential for transformation, as the most important paradigms of human consciousness.</p>

                    <p>In the broad political spectrum to which art contributes, the manifest option for research that produces powerful experiences of resistance, plurality, and transformation translates our resolve to move away from the progressive deflation of the hegemonic discourses that circulate and shape the field of art. The practices represented in <strong>Southern Panoramas</strong> go against the progressive crushing of our horizons, as well as the obscurantism and conservatism that transpire in public life worldwide, and especially in Brazil. Thus, they offer their contribution to preserve, albeit arduously, some perspective of a future.</p>') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
