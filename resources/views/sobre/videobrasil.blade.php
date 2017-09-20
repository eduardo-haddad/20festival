
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Sul em Toda Parte - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'South Everywhere - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Sul em Toda Parte', 
                                'South Everywhere') !!}
                </div>
                
                <div class="texto">

                    <div class="imgSobre">
                        {!! Html::image('img/sobre/solange.jpg') !!}
                    </div>

                    {!! switchLang('

                    <div class="subTituloPag">Sul em Toda Parte</div>

                    <p class="assinatura">por Solange O. Farkas<br>
                        Curadora-geral do 20º Festival de Arte Contemporânea Sesc_Videobrasil</p>

                    <p>Uma breve mirada para o cenário internacional da arte não deixa dúvidas: o Sul está por toda parte. O reconhecimento desta presença e, portanto, da importância desta perspectiva em qualquer espécie de concerto global de vozes torna evidente o acerto da aposta na produção dos países da região, alinhavada há mais de duas décadas e expressa sobretudo no Festival de Arte Contemporânea Sesc_Videobrasil. Se desde sua criação, em 1983, o Festival vem buscando alimentar articulações entre a produção brasileira e seus interlocutores de outros países do Sul, colocando em contato as narrativas e inquietações que emergem da pesquisa desenvolvida por seus artistas, o protagonismo recente dessa produção em grandes exposições internacionais é apenas um dos indícios de que o mundo da arte do “Norte” reconhece a necessidade de tomar parte de e amplificar o diálogo em torno ou a partir Sul.</p>

                    <p>Não por acaso, e pela primeira vez, todos os esforços de organização e produção do 20º Festival estão concentrados nos Panoramas do Sul, que ocupam espaços múltiplos do Sesc Pompeia, em São Paulo, e se desdobram em exposição, programa de vídeo e performances, além de uma série de ações de ativação, boa parte delas envolvendo os próprios artistas. Composto a partir de propostas e portfólios enviados por artistas das diversas regiões do Sul em resposta a uma convocatória aberta, o conteúdo do 20º Festival reafirma a importância estratégica de um mecanismo que permite, em larga medida, perscrutar zonas não mapeadas da produção artística destas regiões, revelando pesquisas que ainda não foram reconhecidas, absorvidas ou chanceladas pelo sistema da arte. Se envolve risco e esforço – a cada edição do Festival, registra-se um aumento exponencial de inscrições –, o processo de seleção baseado em convocatória ainda é a forma mais democrática de compor um conjunto à altura da potência e da diversidade do que se produz neste eixo simbólico, a despeito do aval sempre limitador do mercado.</p>

                    <p>Não é surpresa que uma produção desde sempre pautada pela ideia de resistência e pela vocação política floresça e se refine em um momento de crise instalada, retrocesso, perda de conquistas e incerteza absoluta. Na medida em que nos aprofundamos em um ciclo de posições extremistas que pode nos levar para qualquer lugar, o desejo de elaborar uma narrativa simbólica à altura das questões deixadas como herança pelo nosso passado torna-se mais e mais premente – assim como o de rever ideias de futuro que faliram, para, por que não, desenhar uma perspectiva menos tenebrosa que a que temos à frente. É neste contexto que o recurso ao vídeo, identificado, pela própria natureza, ao registro do real, volta a se fortalecer. A necessidade de contar histórias ditas menores, que foram obscurecidas pelo discurso sempre mais volumoso e onipresente do capital, dá ao vídeo um fôlego narrativo que antes era privilégio do cinema.</p>

                    <p class="bold">Macro, micro</p>

                    <p>A emergência de novas narrativas, que reivindicam espaço e lugares de escuta, e o movimento intenso de reconfiguração sociopolítica são características destes tempos, marcados pela iminência de crise em todos os âmbitos. Diante deles, o conjunto de artistas selecionados para o 20º Festival expressa a vontade de expandir nossa forma de olhar para o mundo, por meio de práticas que atravessam as fronteiras postas entre arte e ciência e se movem na direção de curiosidades primordiais: a origem do homem e da vida, a evolução das dinâmicas sociais que nos definiram através dos tempos, nossas formas de fazer política. Sugerem comovisões que, sem perder o foco no que é próximo, palpável e urgente, consideram a poesia do universo e do tempo.</p>

                    <p>Olhando sob outro ângulo, podemos dizer que as obras selecionadas reafirmam a ideia de resistência como um dos paradigmas mais importantes da consciência humana – capaz de fazer de nós quem realmente somos, quem queremos ser, e nos devolver um senso de humanidade (em detrimento do senso de poder). Essa ideia de resistência, que ajudou a nortear o pensamento curatorial desta edição, não se configura necessariamente como aventura ou ato de bravura, mas como um modelo de troca em torno da experiência da sobrevivência; os artistas usam seu vocabulário visual para articulá-la como movimento, como momento, em constelações onde se somam o fato lembrado ou imaginado e o próprio ato da reinvenção.</p>

                    <p>A opção declarada pela pesquisa que produz experiências potentes de resistência, não binárias e desconformes, voltadas a iluminar cantos obscuros, reverter lógicas simplistas – e olhar de novo para onde estamos, para as origens do que somos e para a maneira como categorizamos nossos saberes –, traduz nosso desejo, como instituição, de caminhar na direção contrária ao que percebemos como um esvaziamento progressivo dos discursos que circulam e moldam o campo da arte. Nosso contexto cultural impõe sucessivas derrotas à ambição da arte de proporcionar experiências simbólicas relevantes ou até mesmo desejáveis, em benefício de outros campos, mais palatáveis, da cultura. Na contramão da irrelevância progressiva, e de formas muito diversas, a produção reunida nos Panoramas do Sul se opõe ao esmagamento progressivo de nossos horizontes, para preservar, ainda que penosamente, alguma perspectiva de futuro.</p>

                    <p class="bold">Solange Oliveira Farkas (Brasil)</p>

                    <p>É curadora e diretora da Associação Cultural Videobrasil. Criou o Festival de Arte Contemporânea Sesc_Videobrasil em 1983 e foi diretora e curadora-chefe do Museu de Arte Moderna da Bahia entre 2007 e 2010. Participou como curadora convidada da 10ª Bienal de Charjah (Emirados Árabes Unidos, 2011), 16ª Bienal de Cerveira (Portugal, 2011), 5ª Videozone – International Video Art Biennial (Israel, 2010), FUSO – Mostra Anual de Videoarte (Portugal, 2011-2014 e 2017) e 6º Festival Internacional de Vídeo de Jacarta (Indonésia, 2013). Integra o Comitê de Premiação do Prince Claus Fund Award 2017 e o conselho consultivo do espaço de arte Pivô, em São Paulo. Em 2017, foi contemplada com o Montblanc Arts Patronage Award, prêmio da fundação suíça destinado a profissionais cuja história e experiência se destacam no apoio ao desenvolvimento das diversas expressões artísticas e culturais.</p>
', 


                    '

                    <div class="subTituloPag">South Everywhere</div>

                    <p class="assinatura">by Solange O. Farkas<br>
                        Chief curator, 20th Contemporaray Art Festival Sesc_Videobrasil</p>

                    <p>A quick glance at the international art scene leaves no doubt: the South is everywhere. The acknowledgment of this presence and, therefore, of the importance of this viewpoint in any global ensemble of voices confirms the sound strategy of betting on production from countries in the region, outlined over two decades ago and expressed above all in the Contemporary Art Festival Sesc_Videobrasil. Since its founding in 1983, the Festival has sought to foster interaction between Brazilian production and its interlocutors from other countries in the South, connecting the narratives and concerns that emerge from research developed by its artists. The key role recently played by such production in large international exhibitions is just one sign that the art world of the “North” has recognized the need to take part of and enhance dialogue related to or stemming from the South.</p>

                        <p>No wonder that, for the first time, the organization and production efforts of the 20th Festival are entirely focused on Southern Panoramas, which occupy multiple spaces of Sesc Pompeia in São Paulo, branched out into exhibition, video program, and performances, besides a series of activation initiatives, many of them involving the artists themselves. Comprising proposals and portfolios submitted by artists from various southern regions in response to an open call, the content of the 20th Festival reaffirms the strategic importance of a mechanism that enables widespread scrutiny of uncharted areas of artistic production in other regions, unveiling research that has not yet been acknowledged, absorbed, or endorsed by the art system. If it involves risk and effort—submissions have increased exponentially with each new edition of the Festival—the selection process based on open call remains the most democratic form of assembling a set of artwork that lives up to the power and diversity of what is produced in this symbolic axis, despite the ever-limiting endorsement from the market.</p>

                        <p>It comes as no surprise to see a production historically grounded on resistance and political vocation flourishing and refining itself in times of self-inflicted crisis, regression, loss of rights, and absolute uncertainty. As we plunge deeper into a cycle of radical positions that may lead us anywhere, the desire to elaborate a symbolic narrative that lives up to the issues inherited from our past becomes increasingly pressing—as well as reviewing ideas about the future that have failed and, why not, sketching a less gloomy outlook than the one presently facing us. It is in this context that the use of video, identified by its very nature with the documentation of reality, has been revived. The need to tell so-called minor stories, which have been obscured by the increasingly bulky and ubiquitous discourse of big business, affords video a narrative scope that was once the privilege of film.</p>


                    <p class="bold">Macro, micro</p>

                    <p>The emergence of new narratives, which demand space and venues to be heard, and the intense movement of socio-political reconfiguration are characteristic of these times, marked by the imminence of crisis at all levels. In the face of them, the group of artists selected for the 20th Festival expresses the desire to expand our way of looking at the world through practices that traverse the boundaries between art and science and move towards primordial curiosities: the origin of man and life, the evolution of the social dynamics that have defined us down the ages, our ways of doing politics. They suggest worldviews which, without losing focus of what is close, palpable and urgent, consider the poetry of the universe and of time.</p>

                    <p>From a different viewpoint, one could say that the selected works reaffirm the idea of resistance as one of the most important paradigms of human consciousness, capable of making us who we really are, who we want to be, and of retrieving our sense of humanity (to the detriment of the sense of power). This idea of resistance, which helped guide the curatorial thought of this edition, is not necessarily an adventure or an act of daring, but a model of exchange centered on the experience of survival; the artists use their visual vocabulary to construct it as movement, as momentum, in constellations where recalled or imagined facts are combined with the very act of reinvention.</p>

                    <p>The manifest option for research that produces powerful, nonbinary, and dissenting experiences of resistance, aimed at illuminating obscure recesses, reversing simplistic logics—and returning the gaze to where we are, to the origins of who we are, and to how we categorize our knowledge—translates our desire as an institution to move away from what we consider a progressive deflation of the discourses that circulate and shape the field of art. Our cultural context inflicts successive defeats on art’s ambition to provide relevant or even desirable symbolic experiences, thus benefiting other more palatable fields of culture. In opposition to the increasing irrelevance, and in many different ways, the production gathered in Southern Panoramas stands up to the progressive crushing of our horizons in order to preserve, albeit arduously, some prospect of a future.</p>

                    <p><strong>Solange Oliveira Farkas</strong> (Brazil) is a curator and director of Associação Cultural Videobrasil. She created the Contemporary Art Festival Sesc_Videobrasil in 1983 and was director and chief curator of the Museu de Arte Moderna da Bahia from 2007 to 2010. She took part as guest curator of the 10th Sharjah Biennial (United Arab Emirates, 2011), 16th Cerveira Biennial (Portugal, 2011), 5th Videozone – International Video Art Biennial (Israel, 2010), FUSO – Videoarte Annual Exhibition (Portugal, 2011–2014 and 2017), and 6th Jakarta International Video Festival (Indonesia, 2013). She is a member of the Prince Claus Fund Award Committee 2017 and of the advisory board of the Pivô art venue in São Paulo. In 2017 she received the Montblanc Arts Patronage Award, a prize awarded by the Swiss foundation to professionals with outstanding background and experience in supporting the development of diverse artistic and cultural expressions.</p>
') !!}

                    

                </div>
            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
