
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Exposição - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Exhibition - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno" style="height: 500px;">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>           

            <div class="tituloTexto">

                <!-- Convivência -->
                <div class="tituloPag">
                 {!! switchLang('Exposição - Convivência', 'Exhibition - Convivência') !!}
                </div>

                
                <div class="fichaTecnica exposicao borderbox">
                    
                    <div class="fichaEsq borderbox">

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Alia Farid</strong> ({!! switchLang('Kuwait', '') !!}, 1985)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Hatillo</em>, da série Mezquitas de Puerto Rico, 2014<br>
                                        <em>Ponce</em>, da série Mezquitas de Puerto Rico, 2014<br>
                                        <em>Vega Alta</em>, da série Mezquitas de Puerto Rico, 2014<br>
                                        <em>Mezquita de Santo Domingo (República Dominicana)</em>, 2015<br>
                                        Tapeçarias', 

                                        '<em>Hatillo</em>, from the series Mezquitas de Puerto <br>Rico, 2014<br>
                                        <em>Ponce</em>, from the series Mezquitas de Puerto <br>Rico, 2014<br>
                                        <em>Vega Alta</em>, from the series Mezquitas de Puerto Rico, 2014<br>
                                        <em>Mezquita de Santo Domingo (República Dominicana)</em>, 2015<br>
                                        Tapestries') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Série de tapeçarias que resulta da parceria entre Alia Farid e Jesus ‘Bubu’ Negrón. Os artistas enviaram fotogra as de mesquitas de Porto Rico e da República Dominicana, na América Central, a tecelãs da cidade de Mass, no Irã, que transformaram as imagens em tapeçarias. As peças discutem as tensões do trânsito cultural e migratório contemporâneo, e seu papel na transmissão de signos, emblemas e costumes.', 
                                    'A series of tapestries jointly conceived by Alia Farid and Jesus “Bubu” Negrón. The artists sent photographs of mosques in Puerto Rico and the Dominican Republic, in Central America, to female weavers in the city of Mash, Iran, who turned the images into tapestries. The pieces discuss the strains of contemporary cultural and migratory movements and their role in conveying signs, emblems and customs.') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Ana Mazzei</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1979)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Speech about the Sun</em>, 2015<br>
                                        Instalação', 

                                        '<em>Speech about the Sun</em>, 2015<br>
                                        Installation') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Olhares para cima e para baixo não são meros movimentos. Prenhes de significado em diversas civilizações, estão na gênese do conhecimento e da arte, remetem à evolução da espécie e à passagem entre natureza e cultura. O trabalho propõe ao público uma relação entre seu corpo e objetos de alturas e escalas diversas, convidando-o a experimentar a importância e a densidade desses gestos.', 

                                    'Gazing up and down are not mere body movements. Replete with meaning in various civilizations, it is at the origin of knowledge and art, evoking the evolution of the species and the passage from nature to culture. The work proposes a comparison between viewers’ bodies and objects of different heights and scales, inviting them to experience the importance and density of those gestures.') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Ana Vaz</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1986)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Há terra!</em>, 2016<br>
                                        Vídeo', 

                                        '<em>Há terra!</em>, 2016<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Em meio ao sertão brasileiro, a câmera acompanha uma enigmática personagem que se esconde, caminha e rasteja em meio à vegetação local. Enquanto ela relata acontecimentos de sua vida, ouve-se, ao fundo, uma voz masculina que exclama: “Há terra! Há terra!”. Captado em 16 mm, revisita o cinema brasileiro de vanguarda em sua ânsia de desbravar o Brasil e produzir dele imagem potente e generosa. ', 

                                    'Deep in Brazilian northeastern arid country, the camera follows an enigmatic character as it hides, walks, and crawls through the local vegetation. While she relates events of her life, a male voice is heard exclaiming in the background: “Há terra! Há terra!” [“There is land! There is land!”] Shot in 16 mm, the footage evokes the eagerness of Brazilian avant-garde cinema to explore the country and produce a powerful and generous image of Brazil.') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Débora Mazloum</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1982)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Jardim de Aclimatação XXI</em>, 2015<br>
                                        Instalação', 

                                        '<em>Jardim de Aclimatação XXI</em>, 2015<br>
                                        Installation') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Seria o jardim a metáfora de uma utopia paradisíaca, um símbolo de nossa nostalgia de um Éden perdido? Partindo destas indagações, a obra apresenta o arquivo como fruto de um impulso humano de catalogação e conservação, indício do desejo de controlar e apreender que habita nossa espécie. ', 

                                    'Is the garden the metaphor of a paradisiacal utopia, a symbol of our nostalgia for a lost Eden? Starting out from such queries, the work shows archives as stemming from a human impulse for cataloging and conservation, a sign of the desire to control and apprehend that is inherent to our species. ') !!}
                                
                            </p>
                        </article>

                         <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Elizabeth Vásquez Arbulú</strong> ({!! switchLang('Peru', '') !!}, 1990)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Historia del Cosmos</em>, 2013<br>
                                        VideoInstalação', 

                                        '<em>Historia del Cosmos</em>, 2013<br>
                                        Video installation') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Baseada em álbuns de catecismo dos anos 1970 e 1980, a videoinstalação reconta em poucos minutos a história do universo, do big bang aos dias atuais. A narração em off relata os acontecimentos em tom didático, passando pela capacidade humana, adquirida no século 20, de se autodestruir completamente, deixando ao público a tarefa de confrontar a aparente gratuidade de tudo o que existe. ', 

                                    'Based on catechism picture books from the 1970s and ’80s, the video installation covers in a few minutes the entire history of the universe, from the big bang to the present. The voice-over narrates the events in didactic tone, referring to mankind’s capacity for total self-destruction acquired in the 20th century and leaving to viewers the task of confronting the apparent pointlessness of all existence. ') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Emo de Medeiros</strong> ({!! switchLang('França', 'France') !!}, 1979)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Kaleta/Kaleta</em>, 2013-2017<br>
                                        VideoInstalação / Performance<br>
                                        (aproximadamente 45’)<br>
                                        Dias 7 e 8.10, às 15h', 

                                        '<em>Kaleta/Kaleta</em>, 2013-2017<br>
                                        Video installation / Performance<br>
                                        (approximately 45’)<br>
                                        Oct 7–8, at 3:00 p.m.') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'No fim do ano, a juventude de Benin celebra a Kaleta, festividade com máscaras locais que parece uma mistura de Carnaval brasileiro e Halloween norte-americano. A tradição é atribuída a ex-escravos que foram levados para o Brasil e voltaram ao Benin após se sublevarem na Revolta dos Malês, ocorrida em 1835 em Salvador. Com elementos da festa, o artista cria um ambiente imersivo que convida o público a confrontar suas próprias personas. ', 

                                    'At the end of the year, Benin’s youth celebrate Kaleta, a festivity with local masks that resembles a mixture of Brazilian Carnival and American Halloween. The tradition is attributed to former slaves who were brought to Brazil and returned to Benin after taking part in the Bahia Muslim slave revolt in Salvador in 1835. Drawing on the festivity elements, the artist creates an immersive environment that invites the audience to confront their own personas. ') !!}
                                
                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Vodunaut #009 (Hyper elder), #010 (Hyperspacer), #011 (Hyperceiver)</em>, da série Vodunaut, 2016-2017<br>
                                        Objetos',
                                        '<em>Vodunaut #009 (Hyper elder), #010 (Hyperspacer), #011 (Hyperceiver)</em>, from the series Vodunaut, 2016-2017<br>
                                        Objects') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Na religião tradicional do Benin, os búzios simbolizam viagem. Aqui, capacetes de motociclistas cobertos de conchas e apoiados sobre pequenos monitores ensejam um cruzamento da mitologia e do saber ancestral do país com o imaginário futurista da ficção científica, um repertório dominado pela cultura ocidental dos países desenvolvidos. ', 

                                    'In the traditional religion of Benin, cowry shells symbolize travel. Here, motorcycle helmets covered with shells and supported on small monitors enable a cross between the country’s mythology and ancestral knowledge, and the futuristic imagery of science fiction, a repertoire dominated by the Western culture of developed countries. ') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Filipa César</strong> ({!! switchLang('Portugal', 'Portugal') !!}, 1975)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Transmission from the Liberated Zones</em>, 2015<br>
                                        Vídeo', 

                                        '<em>Transmission from the Liberated Zones</em>, 2015<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Durante a guerra de libertação da Guiné--Bissau, o Partido Africano da Independência da Guiné e Cabo Verde (PAIGC) denominava Zonas Liberadas os territórios controlados pela guerrilha. No vídeo, um rapaz dialoga, nos dias de hoje, com documentos referentes à visita de quatro personagens históricos aos domínios do Partido na época. ',

                                    'During the war of independence of Guinea-Bissau, the African Party for the Independence of Guinea and Cape Verde (PAIGC) named the territories controlled by the guerilla Liberated Zones. In the video, a young man interacts in the present day with documents concerning the visit of four historical figures to the Party’s domains at the time. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Hellen Ascoli</strong> ({!! switchLang('Guatemala', 'Guatemala') !!}, 1984)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Objetos Específicos 1 y 2</em>, 2016<br>
                                        Objetos', 

                                        '<em>Objetos Específicos 1 y 2</em>, 2016<br>
                                        Objects') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Com referências ao huipil, veste tradicional dos povos indígenas da América Central, as obras discutem a herança, na produção contemporânea, do minimalismo defendido pelo artista norte-americano Donald Judd. A partir da ideia de esculturas que se relacionam diretamente com a escala humana, questiona a suposta universalidade do corpo, sempre masculino no grupo minimalista. ',

                                    'Referencing the huipil, the traditional costume of the indigenous peoples of Central America, the works discuss the heritage in contemporary production of the minimalism championed by the American artist Donald Judd. Based on the idea of sculptures that relate directly to the human scale, they challenge the supposed universality of the body, which is always male in the minimalist group. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Jaime Lauriano</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1985)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Morte súbita</em>, 2014<br>
                                        Vídeo', 

                                        '<em>Morte súbita</em>, 2014<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'No futebol, o termo define o gol que decide uma partida empatada e levada à prorrogação. Aqui, aplica-se àqueles que são chamados de “marginais” e rendidos pela polícia, uma imagem tão habitual no universo midiático brasileiro quanto jogadores de futebol que formam uma barreira e esperam o chute adversário. A obra traz à tona a brutalidade estatal subjacente aos regimes supostamente democráticos. ',

                                    'In soccer, the expression means a goal that decides a tied match in extra time. Here it refers to so-called “delinquents” who are detained by the police, an image as common in Brazilian mainstream media as soccer players forming a defensive wall against a free kick. The work brings to light the State brutality that underlies supposedly democratic regimes. ') !!}

                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>O Brasil</em>, 2014<br>
                                        Vídeo', 

                                        '<em>O Brasil</em>, 2014<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Depois do golpe que afastou o presidente brasileiro João Goulart, em 1964, a ditadura militar instaurada passou a produzir slogans patrióticos, como o célebre “Brasil, ame-o ou deixe-o”, e a valorizar símbolos e efemérides da nação. O artista trabalha com os fundamentos desse marketing para evidenciar a fabricação do discurso e da imagem de um Brasil homogêneo e pacificado. ',

                                    'Following the coup that deposed the Brazilian president João Goulart in 1964, the newly installed military dictatorship started producing patriotic slogans, such as the famous “Brazil, love it or leave it,” and enhancing national symbols and dates. The artist works with the basic elements of this marketing strategy to evidence how the discourse and image of a homogenous and pacified country was fabricated.') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Köken Ergun</strong> ({!! switchLang('Turquia', 'Turkey') !!}, 1976)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Aşura</em>, 2012<br>
                                        VideoInstalação', 

                                        '<em>Aşura</em>, 2012<br>
                                        Video installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'O vídeo aborda a celebração anual da Ashura, quando os muçulmanos xiitas lembram o martírio de Hussein Ibn Ali, neto do profeta Maomé, na batalha de Karbala, no atual Iraque, em 2 de outubro de 680 d.C. Realizado em estreita colaboração com moradores do bairro de Zeynebiye, em Istambul, a obra documenta os preparativos da população para a festa, afastando-se, deliberadamente, de uma visão exótica do evento. ',

                                    'This video features the annual Ashura celebration, when Shiite Muslims recall the martyrdom of Hussein Ibn Ali, grandson of the Prophet Muhammad, at the Battle of Karbala in present-day Iraq on October 2, 680 AD. Produced in close cooperation with residents of the Zeynebiye district in Istanbul, the footage registers the population’s preparations for the festival, deliberately avoiding an exotic view of the event. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Louise Botkay</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1978)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Vai e vem</em>, 2017<br>
                                        VideoInstalação', 

                                        '<em>Vai e vem</em>, 2017<br>
                                        Video installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A videoinstalação promove uma visita ao universo íntimo do povo Hunikui (Kaxinawà), na fronteira amazônica entre Brasil e Peru. Afastando-se deliberadamente do exotismo, do didatismo e de um viés antropológico-artístico, as imagens de detalhes e planos fechados buscam sensações para partilhar e revelam modos de vida e saberes. ',

                                    'The video installation features a visit to the intimate universe of the Hunikui people (Kaxinawà), on the Amazonian border between Brazil and Peru. Deliberately avoiding exoticism, didacticism, and an anthropological-artistic bias, the detailed images and close shots seek sensations to share and reveal ways of life and knowledge. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Mariana Portela Echeverri</strong> ({!! switchLang('França', 'France') !!}, 1986)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Orgy Mathematics</em>, 2015-2016<br>
                                        Instalação', 

                                        '<em>Orgy Mathematics</em>, 2015-2016<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Instalação tentacular, composta por esculturas mecânicas e estáticas, fotografias e desenhos. Criando um ambiente fluido, no qual o onírico, o erótico e o universo infantil encontram uma racionalidade abjeta e utópica, a obra põe em tensão as ideias de produtividade e de anarquia. ',

                                    'A tentacled installation comprising mechanical and static sculptures, photographs, and drawings. By creating a fluid environment in which dream, eroticism, and childhood encounter an abject and utopian rationality, the work strains the ideas of productivity and anarchy. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Mariana Rodríguez</strong> ({!! switchLang('Argentina', 'Argentina') !!}, 1970)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>¿Por qué disparan?</em>, 2016<br>
                                        Vídeo', 

                                        '<em>¿Por qué disparan?</em>, 2016<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'No dia 26 de setembro de 2014, 43 estudantes que iam à Cidade do México participar de um protesto em memória do Massacre de Tlatelolco, em 1968 (quando dezenas de estudantes foram assassinados pelo exército e a polícia), desapareceram em Iguala. Imagens granuladas e descontínuas, achadas em celulares de sobreviventes, traduzem a perplexidade diante da falta de explicações para o acontecido. ',

                                    'On September 26, 2014, forty-three students travelling to Mexico City to take part in a demonstration in memory of the Tlatelolco Massacre in 1968 (when dozens of students were killed by the army and police) disappeared in Iguala. Grainy and intermittent images, found in survivors’ cell phones, translate the perplexity at the lack of an explanation of what happened. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Natasha Mendonca</strong> ({!! switchLang('Índia', 'India') !!}, 1978)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Trance</em>, 2016<br>
                                        Vídeo', 

                                        '<em>Trance</em>, 2016<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Uma mulher transexual é linchada na Jamaica. Uma câmera de celular registra o êxtase cruel da multidão. A essas imagens, somam-se encenações de outros momentos de violência contra a mesma mulher – que representa, aqui, todas as transexuais. Nas imagens encenadas, porém, vemos seu rosto e, nele, além de sofrimento, dignidade e resistência. ',

                                    'A transsexual woman is lynched in Jamaica. A cell phone camera records the crowd’s cruel ecstasy. To these images are added scenes of other moments of violence against the same woman, here representing all transsexuals. In the performed images, however, we see her face, which shows, besides suffering, also dignity and resistance. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Rafael Pagatini</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1985)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Bem-vindo, presidente!</em>, da série <em>Fissuras</em>, 2016<br>
                                        Instalação', 

                                        '<em>Bem-vindo, presidente!</em>, from the series <em>Fissuras</em>, 2016<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Instalação que parte da catalogação de anúncios de empresas publicados no jornal A Gazeta, de Vitória, entre as décadas de 1960 e 1980. Os recortes relacionam-se aos chamados Grandes Projetos, voltados para a exportação de commodities no Espírito Santo. Marcando o vínculo entre a ditadura militar brasileira e a iniciativa privada, lembram um projeto moderno soterrado pela desigualdade social e por desastres ambientais como a destruição do rio Doce, principal rio do estado, em 2016. ',

                                    'An installation based on a compilation of corporate ads published in A Gazeta newspaper from Vitória in 1960–1980. The cuttings relate to the so-called Great Projects that championed commodities exports in Espírito Santo State. Heralding the link between the Brazilian military dictatorship and the private sector, they are reminiscent of a modern project buried under social inequality and environmental disasters such as the destruction of the Doce River, the state’s main watercourse, in 2016. ') !!}

                            </p>

                            <p class="tituloObra">

                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>DOPS</em>, da série <em>Fissuras</em>, 2016<br>
                                        Instalação', 

                                        '<em>DOPS</em>, from the series <em>Fissuras</em>, 2016<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Nesta instalação, documentos oficiais do Departamento de Ordem Política e Social (DOPS) estão postos sobre canaletas de madeira, disponíveis para a manipulação do público. São imagens e textos extraídos de um relatório sobre o Concílio de Jovens, evento de esquerda organizado por movimentos sociais e pela Igreja Católica. A aleatoriedade da combinação causa um curto-circuito na pretensa objetividade de um dos principais órgãos repressores do Brasil no século 20. ',

                                    'In this installation, official documents of the Brazilian Departamento de Ordem Política e Social – DOPS [Department of Political and Social Order] are placed in wooden grooves and made available to be handled by visitors. They are images and extracts from a report on the Concílio de Jovens [Youth Council], a left-wing event organized by social movements and the Catholic Church. The random combination disrupts the alleged objectivity of one of Brazil’s main 20th-century repression agencies.') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Sammy Baloji</strong> ({!! switchLang('República Democrática do Congo', 'Democratic Republic of the Congo') !!}, 1978)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Pungulume</em>, 2016<br>
                                        VideoInstalação', 

                                        '<em>Pungulume</em>, 2016<br>
                                        Video installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A obra registra a história da cidade de Fungurume, na África Central, contada por seu conselho de anciãos. Erguida em meio a um dos maiores depósitos de cobre e cobalto do mundo, suas montanhas hoje pertencem a um consórcio internacional de mineração, cuja ação desloca o povo Sanga de suas casas e tradições. ',

                                    'The work records the history of the town of Fungurume in Central Africa, as told by its council of elders. Built amid one of the largest copper and cobalt deposits in the world, its mountains belong today to an international mining consortium whose activities displace the Sanga people from their homes and traditions. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Sasha Litvintseva</strong> ({!! switchLang('Rússia', 'Russia') !!}, 1989)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Exile Exotic</em>, 2015<br>
                                        Vídeo', 

                                        '<em>Exile Exotic</em>, 2015<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A artista narra a forma como se exilou com a mãe na Turquia, usando como cenário uma réplica do Kremlin construída em um hotel. Enquanto turistas aproveitam a piscina, suas lembranças nos levam ao entorno da fortaleza russa, símbolo de opressão estatal e de disputas pelo poder. O simulacro arquitetônico, que é também um simulacro histórico, abriga a viagem, seja de lazer, fuga ou banimento. ',

                                    'The artist narrates how she went into exile with her mother in Turkey, using a replica of the Kremlin built in a hotel as a setting. While tourists enjoy the pool, her memories take us to the surroundings of the Russian fortress, a symbol of State oppression and power struggles. The architectural simulacrum, which is also a historical simulacrum, shelters the journey, whether of leisure, flight, or banishment. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Thando Mama</strong> ({!! switchLang('África do Sul', 'South Africa') !!}, 1977)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Desolation I-V</em>, da série <em>Desolation</em>, 2015<br>
                                        VideoInstalação', 

                                        '<em>Desolation I-V</em>, from the series <em>Desolation</em>, 2015<br>
                                        Video installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Cinco vídeos resgatam imagens de violência policial em revoltas populares da história recente da África do Sul: o levante estudantil de Soweto, em 1976; a greve dos mineiros em Marikana, 2012; e os protestos da campanha #RhodesMustFall, em 2015. A distância cronológica entre os acontecimentos contrasta com a brutalidade contínua do Estado. A luta contra a opressão é o pano de fundo. ',

                                    'Five videos retrieve images of police violence in popular revolts in South Africa’s recent history: the student uprising in Soweto in 1976; the miners’ strike in Marikana, 2012; and the protests of the #RhodesMustFall campaign in 2015. The chronological distance between the events contrasts with the persistent brutality of the State. The struggle against oppression is the backdrop. ') !!}

                            </p>

                            <p class="tituloObra">
                                <strong>Thando Mama</strong> ({!! switchLang('África do Sul', 'South Africa') !!}, 1977)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Of Nationhood</em>, da série <em>Of Nationhood</em> (2015-)<br>
                                        Vídeo', 

                                        '<em>Of Nationhood</em>, from the series <em>Of Nationhood</em> (2015-)<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Um corpo humano vivo explora um monumento imponente e pretensioso, mas abandonado. Dos anos 1980, o Ntaba ka Ndoda celebra o passado heroico de Ciskei, país criado e dissolvido na tentativa de ajustar povos, territórios e tradições à configuração estatal atual da África do Sul. O vídeo tenta redimensionar a obra corroída e pensar no significado de uma paisagem usada como símbolo de posse. ',

                                    'A living human body explores a monument both imposing and pretentious, yet abandoned. Built in the 1980s, the Ntaba ka Ndoda celebrates the heroic past of Ciskei, a country created and dissolved in the attempt to adjust peoples, territories, and traditions to South Africa’s current political division. The video attempts to reassess the eroded construction and reflect on the meaning of a landscape used as a symbol of possession. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Von Calhau!</strong> ({!! switchLang('Portugal', 'Portugal') !!}, 2006)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>EULUSIONISMO ANTILUSIONISTU</em>, 2015<br>
                                        VideoInstalação', 

                                        '<em>EULUSIONISMO ANTILUSIONISTU</em>, 2015<br>
                                        Video installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Uma espécie de <em>snuff movie</em> ocultista, o filme granulado, rodado em 16 mm e transferido para vídeo HD, alterna corpos nus e vestidos, e figuras humanas feitas de carne ou talhadas em pedra, usando o preto e o branco como cores puras, complementares e distintas. Na instalação em que o vídeo é projetado, o toque repetido de um címbalo mergulha o espectador em algo como um ritual pagão feito de imagens e sons. ',

                                    'A kind of occult snuff movie, this granular film shot in 16 mm and transferred to HD video alternates naked and dressed bodies and human figures made of flesh or carved in stone, using black and white as pure colors, complementary and distinct. In the installation where the video is screened, the constant ringing of a cymbal immerses viewers into something akin to a pagan ritual made of images and sounds. ') !!}

                            </p>
                        </article>


                    </div>



                    <!-- // -->



                    <div class="fichaDir borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Ana Elisa Egreja</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1983)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Poça II / Sala de jantar</em>, da série Jacarezinho, 92, 2016<br>
                                        <em>Closet / Revoada</em>, da série Jacarezinho, 92, 2016<br>
                                        Pinturas', 

                                        '<em>Poça II / Sala de jantar</em>, from the series Jacarezinho, 92, 2016<br>
                                        <em>Closet / Revoada</em>, from the series Jacarezinho, 92, 2016<br>
                                        Paintings') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A artista reconstrói cômodos da casa onde os avós moraram, agora desabitada, incorporando a eles elementos da memória, da imaginação e do universo da história da arte, como animais e objetos de decoração. As cenas são fotografadas e servem de modelo às pinturas. As telas resultantes devolvem ao real sua dimensão original de estranheza. As pinturas integram a série Jacarezinho, 92, em que a artista revisita, recria e mapeia a casa dos avós.',

                                    'The artist recreates rooms in the now vacant house where her grandparents used to live, incorporating elements from memory, imagination, and the universe of art history, such as decorative animals and objects. The scenes are photographed and used as model for the painting. The resulting work restores to the real its original dimension of strangeness. The paintings are part of the series Jacarezinho, 92, in which the artist revisits, recreates, and charts her grandparents’ home.') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                
                            {!! switchLang('<strong>Bárbara Wagner</strong> (Brasil, 1980) e <strong>Benjamin de Burca</strong> (Alemanha, 1975)', '<strong>Bárbara Wagner</strong> (Brazil, 1980) and <strong>Benjamin de Burca</strong> (Germany, 1975)') !!}<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Faz que vai</em>, 2015<br>
                                        Vídeo', 

                                        '<em>Faz que vai</em>, 2015<br>
                                        Vídeo') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Em quatro atos, bailarinos misturam movimentos do frevo, dança tradicional do Carnaval pernambucano, a outros, típicos de ritmos contemporâneos, como funk, swingueira, electro e vogue. Ao pôr em xeque a pureza atribuída ao frevo pelos governos que o promovem como expressão originária de um povo, o trabalho cria tensão em categorias como folclore, cultura popular e cultura de massas, além de tocar em questões de raça, classe e gênero. ',

                                    'In four acts, dancers combine steps of frevo, a traditional Carnival dance of Pernambuco State, with others typical of contemporary rhythms like funk, swingueira, electro, and vogue. Challenging the purity ascribed to frevo by governments that promote it as a primitive popular expression, the work puts a strain on categories such as folklore, popular culture, and mass culture, besides addressing issues of race, class, and gender. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Cristiano Lenhardt</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1975)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Pau-Bonito</em>, 2015-2017<br>
                                        Instalação', 

                                        '<em>Pau-Bonito</em>, 2015-2017<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Situando-se entre desenho e escultura, o trabalho é composto por barras de madeira que se apresentam no espaço e questionam noções de presença e de ausência, assim como os aspectos temporais implicados nesses processos. Assim, convida o público a experimentar concepções distintas de existência. ',

                                    'Situated between design and sculpture, the work consists of wooden bars that occupy the space and challenge the notions of presence and absence, as well as the temporal aspects implied in those processes. It thus invites the audience to experience different notions of existence. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Elvis Almeida</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1985)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Sem título, Sem título</em>, 2016<br>
                                        Pinturas', 

                                        '<em>Sem título, Sem título</em>, 2016<br>
                                        Paintings') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'No primeiro trabalho, a aplicação de tinta acrílica sobre a madeira faz esmaecer áreas coloridas, revelando camadas pictóricas que movimentam a composição circular. No segundo, duas regiões de composição distintas criam, ao olhar do espectador, uma dobra visual na superfície plana. A desarmonia entre as duas partes rompe a perspectiva de totalidade. Em forte diálogo com as artes gráficas, as pinturas remetem a uma gramática visual popular, dos cartazes e meios de comunicação. ',

                                    'In the former work, the coating of acrylic paint applied to the wood fades the colored areas, revealing pictorial layers that drive the circular composition. In the latter, two regions of distinct composition give spectators the impression of a visual fold on the flat surface. The disharmony between both parts breaks the perception of wholeness. In a powerful dialogue with graphic arts, the paintings refer to a popular visual language used in posters and the media. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Felipe Esparza Pérez</strong> ({!! switchLang('Peru', 'Peru') !!}, 1985)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Cautivos</em>, da série Espacio Sagrado, 2015<br>
                                        Vídeo', 

                                        '<em>Cautivos</em>, from the series Espacio Sagrado, 2015<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Tudo parece se mover rumo à cidade peruana de Ayabaca, destino de peregrinos que caminham meses para pedir milagres. As águas, o vento e a lama integram a difícil jornada até os pés do Señor Cautivo. O vídeo ganha cores quando, terminada a penitência da ida, os fiéis se preparam para voltar. Integra a série Espacio Sagrado, que investiga diferentes manifestações da espiritualidade no país.', 

                                    'Everything seems to be moving towards the Peruvian city of Ayabaca, the destination of pilgrims who walk for months in search of miracles. Water, wind, and mud are part of the strenuous trek to the feet of the Señor Cautivo [Captive Lord]. The footage gains color once the penance of the outward journey is over and the faithful prepare to return home. The video is part of the series Espacio Sagrado, which investigates the country’s different manifestations of spirituality. ') !!}
                                
                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Pawqartampu</em>, da série Espacio Sagrado, 2015<br>
                                        Vídeo',
                                        '<em>Pawqartampu</em>, from the series Espacio Sagrado, 2015<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'O vídeo explora e conecta elementos do Culto da Virgem do Carmo, principal celebração de Paucartambo, no Peru. Plantas, animais domésticos, casas coloniais e máscaras rituais recriam o ambiente múltiplo em que se dá essa experiência do sagrado, durante a qual o canto humano se une ao canto dos pássaros. A obra integra a série Espacio Sagrado, que investiga diferentes manifestações da espiritualidade peruana. ', 

                                    'The video explores and links elements of the Virgin Carmen Cult, the main celebration of Paucartambo in Peru. Plants, domestic animals, colonial houses, and ritual masks recreate the diversified setting of this experience of the sacred, in which human and avian voices are joined in song. The work is part of the Espacio Sagrado series, which investigates different expressions of Peruvian spirituality. ') !!}
                                
                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Soga de Muerto</em>, da série Espacio Sagrado, 2014<br>
                                        Vídeo',
                                        '<em>Soga de Muerto</em>, from the series Espacio Sagrado, 2014<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Cantos xamânicos e cultos evangélicos integram-se ao cotidiano amazônico. A floresta é o fio que liga todos seus entes à morte e à vida, e a ayahuasca é o cipó usado pelos humanos para se locomover entre os diferentes planos. Ensaio poético sobre a cosmovisão amazônica, o vídeo faz parte da série Espacio Sagrado ', 

                                    'Shamanic chants and evangelical cults integrate into daily life in the Amazon region. The forest is the thread that binds all of its beings to death and life, and ayahuasca is the vine used by humans to move between different planes. A poetic essay on the Amazonian cosmovision, the video is part of the Espacio Sagrado series. ') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Graziela Kunsch</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1979)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Ensaio Ilú Obá De Min</em>, 2015<br>
                                        Vídeo', 

                                        '<em>Ensaio Ilú Obá De Min</em>, 2015<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'O grupo de percussão afro formado apenas por mulheres faz apresentações abertas que transformam temporariamente a face de espaços públicos de São Paulo, opondo-se à privatização e à gentrificação. A obra mostra esgares dessa mudança, ao expor a dança de um grupo de pessoas que vive sob um viaduto: ao som dos tambores, seus corpos criam um lugar de festa e dignidade. O vídeo integra o projeto A.N.T.I. cinema. ', 

                                    'The all-women Afro percussion group holds open performances that temporarily transform the look of public spaces in São Paulo, denouncing privatization and gentrification. The work reveals grimaces of such change by showing the dance of a group of homeless people living under a viaduct: to the sound of the drums, their bodies create a place of celebration and dignity. The video is part of the A.N.T.I. cinema project. ') !!}
                                
                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Escolas</em>, 2016<br>
                                        Vídeo',
                                        '<em>Escolas</em>, 2016<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Em 2015, um levante estudantil ocupou mais de duzentas escolas estaduais de São Paulo para protestar contra a decisão do governo paulista de fechar diversas instituições de ensino. O vídeo é composto por uma sequência de fotografias das ocupações e protestos, que transformaram prédios negligenciados pelo estado em espaços vivos e potentes. Como um trabalho escolar, a apresentação (em slides e sem som) insinua o que podemos aprender com a revolta secundarista. ', 

                                    'In 2015, a student uprising occupied over two hundred state schools in São Paulo to protest the state government’s decision to close down several educational institutions. The video features a sequence of photographs of the occupations and protests, which turned state-neglected buildings into spaces of dynamic and powerful interaction. Like a school assignment, the presentation (slides without sound) hints at what we can learn from the revolt by secondary students. ') !!}
                                
                            </p>

                            
                        </article>

                         <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Karo Akpokiere</strong> ({!! switchLang('Nigéria', 'Nigéria') !!}, 1981)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Zwischen Lagos und Berlin</em>, 2015<br>
                                        Desenhos', 

                                        '<em>Zwischen Lagos und Berlin</em>, 2015<br>
                                        Drawings') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A obra propõe um passeio pelas duas cidades do título e pelas experiências sociais, políticas e pessoais que elas oferecem. Servindo-se de desenhos, pinturas e textos – que fazem referência ao universo do design gráfico em sentido amplo, da tipografia desenhada à mão aos objetos cotidianos –, faz emergir histórias que mesclam acontecimentos reais e ficcionais. ',

                                    'The work proposes a tour of the two cities in the title and the social, political, and personal experiences they offer. Making use of drawings, paintings, and texts—which refer to graphic design in a broad sense, from hand-drawn typography to everyday objects—it brings forth stories that blend real and fictional events. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Mabe Bethônico</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1966)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Histórias minerais extraordinárias</em>, 2017<br>
                                        Instalação<br><br>
                                        Narrativa performada<br>
                                        (aproximadamente 50’)<br>
                                        Dia 6.10, às 20h30<br>
                                        Dia 4.11, às 15h', 

                                        '<em>Histórias minerais extraordinárias</em>, 2017<br>
                                        Installation<br><br>
                                        Narrative performance<br>
                                        (approximately 50’)<br>
                                        Oct 6, at 8:30 p.m.<br>
                                        Nov 4, at 3:00 p.m') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Partindo de três personagens da história da Suíça – o geógrafo Aubert de la Rüe, o ufólogo Billy Meier e Pierre Versins, fundador do museu de ficção científica Maison d’Ailleurs –, o trabalho sobrepõe fronteiras entre geografia, ufologia e ficção, e toma a forma de um programa de palestras e debates.',

                                    'Drawing on three characters in Swiss history—the geographer Aubert de la Rüe, the ufologist Billy Meier, and Pierre Versins, founder of the science fiction museum Maison d’Ailleurs—the work overlays boundaries between geography, ufology, and fiction, and takes on the format of a lecture and debate event.') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Manuela de Laborde</strong> ({!! switchLang('México', 'Mexico') !!}, 1989)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>As Without so Within</em>, 2016<br>
                                        Filme', 

                                        '<em>As Without so Within</em>, 2016<br>
                                        Film') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Ao criar espaços virtuais e figuras mutantes, o filme convida o espectador a um olhar contemplativo, capaz de atentar para as mudanças mais sutis. Valendo-se de alterações de luz, sobreposições de imagens e recursos de edição, entre outros artifícios, abre campo para um mundo informe, em constante transformação. ',

                                    'Creating virtual spaces and mutant figures, the video invites viewers to adopt a contemplative gaze capable of identifying the subtlest changes. Using lighting variation, overlaid images, and editing resources, among other devices, it makes way for a shapeless world in constant transformation ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Miguel Penha</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1961)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Cipó</em>, 2016<br>
                                        <em>Cipó azul</em>, 2014<br>
                                        Pinturas', 

                                        '<em>Cipó</em>, 2016<br>
                                        <em>Cipó azul</em>, 2014<br>
                                        Paintings') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Na primeira pintura, um cipó vermelho, enrolado a uma árvore, destaca-se das cores frias do fundo, cortando a paisagem em duas, ao mesmo tempo em que se integra perfeitamente à vegetação. A segunda retrata uma mata rica em detalhes, que se fundem, e individualidades, que se atravessam. Ambas integram a série Cipós, fruto da busca do artista por suas origens indígenas e de uma imersão no Centro-Oeste brasileiro. ',

                                    'In the first painting, a red vine, wrapped around a tree, stands out from the cold background colors, cutting the landscape in half while blending in perfectly with the vegetation. The second portrays a forest rich in details that merge and individualities that traverse each other. Both are part of the Cipós series, stemming from the artist’s search for his indigenous origins and an immersion in the Brazilian Mid-Western region. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Monira Al Qadiri</strong> ({!! switchLang('Senegal', 'Senegal') !!}, 1983)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>OR-BIT 1</em>, 2016<br>
                                        Objeto', 

                                        '<em>OR-BIT 1</em>, 2016<br>
                                        Object') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Uma escultura espiralada, impressa em 3-D, flutua sobre um fundo roxo. A obra deriva da investigação do impacto da descoberta e da exploração do petróleo, na primeira metade do século 20, sobre o cenário ambiental e geopolítico do Golfo Árabe. Antes de o combustível fóssil passar a definir o futuro da região, as pérolas eram seu principal produto. Por coincidência, as cores das pérolas e do petróleo ocupam polos opostos do mesmo espectro.',

                                    'A spiral-shaped, 3-D printed sculpture floats on a purple background. The work stems from the investigation of the impact of the discovery and exploitation of oil, in the first half of the 20th century, on the environmental and geopolitical landscape of the Arabian Gulf. Before the fossil fuel arrived to define the region’s future, its main product was pearls. Coincidentally, pearls and oil occupy opposite poles of the same color spectrum. ') !!}

                            </p>

                            <p class="tituloObra">
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Spectrum 1</em>, 2016<br>
                                        Objetos', 

                                        '<em>Spectrum 1</em>, 2016<br>
                                        Objects') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Brocas de perfuração de poços petrolíferos, esculpidas em plástico, emergem de uma parede roxa na direção do público, como se ele fosse o combustível extraído. A obra faz parte de uma investigação sobre as mudanças que a descoberta e a exploração do petróleo trouxeram ao cenário ambiental e geopolítico do Golfo Árabe na primeira metade do século 20. ',

                                    'Oil rig drill bits, sculpted in plastic, emerge from a purple wall toward the audience, as if it were the extracted fuel. The work is part of an investigation on the changes brought about by the discovery and exploration of oil in the environmental and geopolitical landscape of the Arabian Gulf in the first half of the 20th century. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Pakui Hardware</strong> ({!! switchLang('Lituânia', 'Lithuania') !!})<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Lost Heritage</em>, 2015<br>
                                        Instalação', 

                                        '<em>Lost Heritage</em>, 2015<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Um jardim-laboratório combina silicone, grama, painéis de madeira e lâmpadas de LED. Explorando as relações entre materialidade, tecnologia, biologia sintética e natureza, a instalação desestabiliza o suposto equilíbrio natural ideal e investiga como a tecnologia transforma nossa realidade física. ',

                                    'A garden-laboratory combines silicone, grass, wooden panels, and LED lamps. Exploring the relationships between materiality, technology, synthetic biology, and nature, the installation undermines the so-called ideal natural balance and investigates how technology transforms our physical reality. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Pedro Barateiro</strong> ({!! switchLang('Portugal', 'Portugal') !!}, 1979)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>The Current Situation</em>, 2015<br>
                                        Instalação', 

                                        '<em>The Current Situation</em>, 2015<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Na instalação, dois sons simultâneos chegam pela janela: a derrubada de uma palmeira atingida por uma praga e um protesto contra medidas de austeridade. A palmeira pertence a uma espécie trazida das ex-colônias portuguesas na África; as medidas são uma exigência da União Europeia aos países do Sul europeu, considerados responsáveis pela crise econômica. Os acontecimentos relacionam-se e conectam o natural e o social. ',

                                    'In the installation, two sounds come in through the window simultaneously: the felling of a palm tree infected by a disease and a protest against austerity measures. The palm tree is of a species imported from Portugal’s former African colonies; the austerity measures are demanded by the European Union from southern European countries, considered responsible for the economic crisis. The events relate to each other, linking the natural and the social. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Rodrigo Hernández</strong> ({!! switchLang('México', 'Mexico') !!}, 1983)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Shikantaza</em>, 2017<br>
                                        Instalação', 

                                        '<em>Shikantaza</em>, 2017<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Ilustrações do artista mexicano Miguel Covarrubias no livro El Arte Indígena de México e Centroamérica, aspectos estilísticos do futurismo italiano e a teoria das cores do pintor japonês de vanguarda Sanzo Wada são referências que compõem a instalação. Criando paradoxos com formas ameríndias e a velocidade da vanguarda europeia, a obra oscila entre abstração e formalismo, homenagem e paródia. ',

                                    'Illustrations by the Mexican artist Miguel Covarrubias in the book El Arte Indígena de México e Centroamérica, stylistic aspects of Italian futurism, and the color theory of the Japanese avant-garde painter Sanzo Wada are reference points that make up the installation. Creating paradoxes with Amerindian forms and the speed of European avant-garde, the work wavers between abstraction and formalism, homage and parody. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Tatewaki Nio</strong> ({!! switchLang('Japão', 'Japan') !!}, 1971)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Neo-andina #52, #59, #64, #97, #102, #208</em>, da série <em>Neo-andina</em>, 2016<br>Fotografia', 

                                        '<em>Neo-andina #52, #59, #64, #97, #102, #208</em>, from the series <em>Neo-andina</em>, 2016<br>Photograph') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A série fotográfica tem como objeto um novo fenômeno na arquitetura boliviana: os cholets, construções suntuosas e coloridas que se espalham por El Alto, na periferia de La Paz. Moda entre a população Aymara, que ascendeu economicamente na última década, as casas celebram a identidade chola, tornando-se símbolo das mudanças políticas e culturais pelas quais o país andino vem passando e, portanto, de uma nova identidade étnica. ',

                                    'A photographic series whose subject is a new phenomenon in Bolivian architecture: the cholets, sumptuous and colorful buildings spread throughout El Alto, on the outskirts of La Paz. Fashionable among the Aymara population that rose economically in the last decade, the houses celebrate the chola identity and have become a symbol of the political and cultural changes the Andean country is undergoing and, therefore, of a new ethnic identity. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Thiago Martins de Melo</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1981)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>bárbara balaclava</em>, 2016<br>
                                        Vídeo', 

                                        '<em>bárbara balaclava</em>, 2016<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'União de duas encarnações martirizadas pela cobiça dos poderosos, bárbara balaclava percorre o país com seu jaguar e sua sede de justiça, aniquilando os usurpadores da terra, herdeiros daqueles que a assassinaram em vidas passadas. Mais de 4 mil pinturas e desenhos compõem a animação, narrativa anarco-xamânica da luta anticolonialista. ',

                                    'A union of two incarnations martyred by the greed of the powerful, bárbara balaclava roams the country with her jaguar and thirst for justice, crushing the usurpers of the land, the heirs of those who murdered her in past lives. Over four thousand paintings and drawings compose this animation, an anarchic and shamanic narrative of anticolonialist struggle. ') !!}

                            </p>
                        </article>


                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Viktorija Rybakova</strong> ({!! switchLang('Lituânia', 'Lithuania') !!}, 1989)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Swivel Doors</em>, 2014<br>
                                        Objeto', 

                                        '<em>Swivel Doors</em>, 2014<br>
                                        Object') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Aquilo que é deixado para trás projeta-se no futuro. Caminhando entre sombras, o espectador vivencia a incapacidade dos sentidos de abarcar a totalidade do espaço. A obra produz a experiência de um não lugar, ao mesmo tempo em que abre espaço para a imaginação criadora e adensa a vivência do tempo. ',

                                    'That which is left behind projects itself into the future. Walking through shadows, spectators experience the inability of the senses to embrace the totality of the space. The work produces the experience of a non-place, while making room for creative imagination and intensifying the experience of time. ') !!}

                            </p>
                        </article>

                        </article>


                        <article class="obraExpo">
                            <strong>Ximena Garrido-Lecca</strong> ({!! switchLang('Peru', 'Peru') !!}, 1980)<br>
                            <p class="tituloObra">
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Contornos</em>, 2014<br>
                                        Objeto', 

                                        '<em>Contornos</em>, 2014<br>
                                        Object') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'A voz off de Alcibiades Cristobal nos guia por Huayllay, floresta de pedras perto de Cerro de Pasco, no Peru. A cidade, do século 16, está sendo tragada pela maior mina do país. Enquanto ele descreve a geologia e a cultura do lugar onde nasceu, vemos os efeitos devastadores da mineração. O buraco quilométrico une tragicamente a voz afetuosa e a desolação das imagens. ',

                                    'The voice-over by Cristobal Alcibiades guides us through Huayllay, a stone forest near Cerro de Pasco in Peru. The 16th-century city is being swallowed up by the country’s largest mine. While he describes the geology and culture of his birthplace, we witness the devastating effects of mining. The kilometer-wide hole tragically links the affectionate voice and the desolating images. ') !!}

                            </p>

                            <p class="tituloObra">
                                
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>La Trama</em>, 2013<br>
                                        Objeto', 

                                        '<em>La Trama</em>, 2013<br>
                                        Object') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Com uma técnica antiga, a artista tece um tapete; em vez de palha, usa tiras de cobre. O produto guarda uma relação estranha com a tradição: aparenta domesticidade e conforto, mas é duro e frio. Remete à mineração predatória, que abre crateras no futuro, e à habilidade humana de conhecer e respeitar a Terra. Um dos primeiros metais trabalhados pela humanidade, o cobre serve como condutor entre memória e porvir. ',

                                    'The artist weaves a carpet with an ancient technique, using copper threads rather than straw. The product bears a strange relationship with tradition: it expresses domesticity and comfort, but is actually hard and cold. It evokes predatory mining, which opens craters in the future, and human capacity to know and respect the Earth. One of the earliest metals worked by mankind, copper serves here as a link between memory and the future.') !!}

                            </p>

                            
                        </article>


                    </div>



                </div>


                <div class="clear"></div>

                <!-- Hall -->
                

                <div class="tituloPag">
                 {!! switchLang('Exposição - Hall do teatro', 'Exhibition - Theater hall') !!}
                </div>


                <div class="fichaTecnica borderbox">
                    
                    <div class="fichaEsq borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Ana Mazzei</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1979)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>A barra de ballet está livre</em>, 2016<br>
                                        Instalação', 

                                        '<em>A barra de ballet está livre</em>, 2016<br>
                                        Installation') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Nesta instalação site specific, barras típicas de salas de aula e ensaio de dança ganham autonomia e circulam pelo espaço a partir de movimentos do balé clássico. O público é convidado a projetar seu corpo, de forma imaginária, na cena, e, dessa forma, questionar fronteiras estanques entre sujeito e objeto, observador e observado. ', 

                                    'In this site-specific installation, ballet barres typically found in dance studios become autonomous and circulate throughout the space rehearsing classical ballet steps. Audience members are invited to project their body imaginarily into the scene, challenging the inflexible boundaries between subject and object, observer and observed. ') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Cristiano Lenhardt</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1975)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Jornais</em>, 2017<br>
                                        Pintura', 

                                        '<em>Jornais</em>, 2017<br>
                                        Painting') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Ao derramar tinta branca sobre três folhas de jornal, o artista faz desaparecer toda carga de informação e verdade contida no periódico, permitindo que outras possibilidades de sentido emerjam da materialidade do papel, antes reduzido ao lugar de veículo. Questiona o lugar de funcionalidade que atribuímos cotidianamente aos objetos que nos circundam. ',

                                    'By pouring white paint over three sheets of newspaper, the artist wipes out the entire load of information and truth contained in the periodical, allowing other potential meanings to emerge from the materiality of the paper, previously reduced to the function of a media outlet. The work questions the functionality we daily ascribe to the objects surrounding us. ') !!}

                            </p>
                        </article>


                    </div>


                    <!-- // -->


                    <div class="fichaDir borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Engel Leonardo</strong> ({!! switchLang('República Dominicana', 'Dominican Republic') !!}, 1977)<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Pisos</em>, 2017<br>
                                        Instalação', 

                                        '<em>Pisos</em>, 2017<br>
                                        Installation') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Entre 1930 e 1931, a República Dominicana realizou um concurso para selecionar o projeto do Farol de Colombo, monumento que celebraria um espírito de pan-americanismo moderno. Entre os candidatos preteridos estava Flávio de Carvalho. Pisos revisita sua proposta, em oposição ao projeto escolhido, que, diferentemente do pretendido, remete a colonização, evangelização e salvação. ',

                                    'Between 1930 and 1931, the Dominican Republic held a contest to select the Columbus Lighthouse project, a monument to celebrate the spirit of modern Pan-Americanism. Among the rejected candidates was Flávio de Carvalho. Pisos revisits his proposal, opposing it to the chosen project which, contrary to what was originally intended, refers to colonization, evangelization, and salvation. ') !!}

                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>La Decanatura</strong> ({!! switchLang('Colômbia', 'Colombia') !!})<br>
                                <section class="listaObras">
                                    
                                    {!! switchLang(
                                        '<em>Centro Espacial Satelital de Colombia</em>, 2015<br>
                                        Vídeo', 

                                        '<em>Centro Espacial Satelital de Colombia</em>, 2015<br>
                                        Video') !!}
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Símbolo da modernização e dos avanços científicos e tecnológicos colombianos, as antenas e laboratórios do centro de comunicações espaciais do país caíram no esquecimento e quase foram engolidos pela paisagem. O vídeo registra uma homenagem musical prestada à base pela jovem banda sinfônica do município, cujos integrantes nem sequer poderiam ter lembrança da glória passada que celebram. ',

                                    'A symbol of Colombian modernization, and scientific and technological progress, the antennas and laboratories of the country’s space communications center have been neglected and almost swallowed by the landscape. The video documents a musical tribute to the base by the young local symphonic band, whose members could hardly recall the past glory they celebrate. ') !!}

                            </p>
                        </article>


                    </div>



                </div>


                <div class="clear"></div>

                <!-- Rua central -->
                

                <div class="tituloPag">
                 {!! switchLang('Exposição - Rua central', 'Exhibition - Central street') !!}
                </div>


                <div class="fichaTecnica borderbox">
                    
                    <div class="fichaEsq borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Alyona larionova</strong> ({!! switchLang('Rússia', 'Russia') !!}, 1988)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Across Lips</em>, 2016<br>
                                        Vídeo', 

                                        '<em>Across Lips</em>, 2016<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'O vídeo se dispõe a encontrar uma imagem capaz, se não de representar, de dar conta da complexidade do momento atual de globalização total e revolução digital. A presença hegemônica dos sistemas de guarda, organização e troca de informação na vida social e subjetiva encontra uma metáfora na improvisação característica do jazz. ', 

                                    'The video sets out in search of an image capable of, if not representing, at least interpreting the current complexity of total globalization and digital revolution. The overpowering presence of storage, organization, and information exchange systems in people’s social and subjective life finds a metaphor in the typical improvisation of jazz. ') !!}
                                
                            </p>
                        </article>

                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Daniel Monroy Cuevas</strong> ({!! switchLang('México', 'Mexico') !!}, 1980)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>New Frontier</em>, 2015<br>
                                        Vídeo', 

                                        '<em>New Frontier</em>, 2015<br>
                                        Video') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Filmado em um drive-in abandonado no San Louis Valley, no estado norte-americano do Colorado, apresenta cinco obstruções encontradas em uma vasta extensão agrícola na fronteira EUA/México. Entre o romantismo do cinema e a impossibilidade de fixação de um sistema de referência permanente, o trabalho contrapõe duas ficções: aquela que se projeta na tela e aquela que cria fronteiras entre países. ', 

                                    'Shot in an abandoned drive-in in San Louis Valley, in the US state of Colorado, the work features five obstructions found in a vast agricultural expanse along the US/Mexico border. Between the romanticism of cinema and the impossibility of establishing a permanent reference system, the work contrasts two fictions: that which is shown on movie screens and that which creates borders between countries. ') !!}
                                
                            </p>
                        </article>

                        


                    </div>


                    <!-- // -->


                    <div class="fichaDir borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Roy Dib</strong> ({!! switchLang('Líbano', 'Lebanon') !!}, 1983)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Here and There – São Paulo Edition</em>, 2017<br>
                                        Instalação<br><br>
                                        Performance (três ações)<br>
                                        Dia 3.10, às 20h;<br>
                                        Dia 4.10, das 16h às 19h;<br>
                                        Dia 5.10, das 16h às 19h', 

                                        '<em>Here and There – São Paulo Edition</em>, 2017<br>
                                        Installation<br><br>
                                        Performance (three actions)<br>
                                        Oct 3, at 8:00 p.m.;<br>
                                        Oct 4, from 4:00 p.m. to 7:00 p.m.;<br>
                                        Oct 5, from 4:00 p.m. to 7:00 p.m.') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Em Alepo, uma das cidades sírias mais atingidas pela guerra, quem não tem refúgio usa cortinas e tapetes costurados para se proteger – se não das balas, pelo menos da visão dos atiradores. Os corredores coloridos de paredes de pano são uma imagem contundente das atrocidades da guerra. Na performance, uma parede-cortina semelhante é erguida no espaço do Festival por uma atriz que cose retalhos de tecidos orientais com uma agulha de tapeçaria, enquanto fala um texto. ', 

                                    'In Aleppo, one of the most war-torn cities in Syria, those who have no shelter protect themselves behind curtains and carpets stitched together—if not from the bullets, at least from the sight of snipers. The colorful corridors of cloth walls are a powerful image of the atrocities of war. In the performance, a similar curtain-wall is set up in the Festival space by an actress who sews a patchwork of Eastern fabrics with a tapestry needle while reciting a text. ') !!}
                                
                            </p>
                        </article>

                        


                    </div>



                </div>

                <div class="clear"></div>

                <!-- Oficinas de criatividade -->
                

                <div class="tituloPag">
                 {!! switchLang('Exposição - Oficinas de criatividade', 'Exhibition - Oficinas de criatividade') !!}
                </div>


                <div class="fichaTecnica borderbox">
                    
                    <div class="fichaEsq borderbox">
                        
                        <article class="obraExpo">
                            <p class="tituloObra">
                                <strong>Ícaro Lira</strong> ({!! switchLang('Brasil', 'Brazil') !!}, 1986)<br>
                                <section class="listaObras">
                                    {!! switchLang(
                                        '<em>Museu do Estrangeiro</em>, 2015-2017<br>
                                        Instalação', 

                                        '<em>Museu do Estrangeiro</em>, 2015-2017<br>
                                        Installation') !!}
                                    
                                </section>
                            </p>
    
                            <p>
                                {!! switchLang(
                                    'Um acervo móvel em mutação, propõe arranjos de materiais diversos que tratam de fluxos de imigrantes, migrantes, refugiados e exilados em São Paulo. Kuta Ndumbu (Angola), Shambuyi Wetu (Congo), Isam Ahmad Issa (Palestina), Sara Ajlyakin (Síria) e Louides Charles (Haiti) colaboram com o artista na versão apresentada no Festival. ', 

                                    'This mobile and mutating art collection proposes layouts for various materials dealing with flows of immigrants, migrants, refugees, and exiles in São Paulo. Kuta Ndumbu (Angola), Shambuyi Wetu (Congo), Isam Ahmad Issa (Palestine), Sara Ajlyakin (Syria), and Louides Charles (Haiti) collaborate with the artist in the version exhibited at the Festival.') !!}
                                
                            </p>
                        </article>

                        


                    </div>


                    <!-- // -->


                    <div class="fichaDir borderbox">
                        
                        &nbsp;


                    </div>



                </div>
                
                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
