
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Programa de vídeo - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Video program - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno" style="height: 500px;">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>           

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Programa de vídeo — Auditório', '') !!}
                </div>

                <!-- Programa 1 -->
                <a name="programa1"></a>
                <div class="texto interno">
                {!! switchLang('<h1>PROGRAMA 1</h1>&nbsp;&nbsp;Duração 1h15’50”<br>
                    Dia 4.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 10h<br>
                    A partir do dia 10.10: de terça a sábado, às 12h; domingos, às 10h', 

                    '<h1>PROGRAM 1</h1>&nbsp;&nbsp;Running time 1h15’50”<br>
                    Oct 4, at 1:00 p.m., 3:00 p.m., 5:00 p.m., 7:00 p.m.,<br>and 9:00 p.m.; Oct 8, at 10:00 a.m.<br>
                    As of Oct 10: Tuesdays through Saturdays, at 12:00 p.m.;<br>
                    Sundays, at 10:00 a.m.') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Seydou Cissé</strong> (Mali, 1981)<br>
                    <em>Faraw ka taama</em>, 2012, 11’
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Movidas pelo chicote de um menino, pedras se amontoam na ponte de Markala, erguida com trabalho forçado e ao custo de muitas vidas, durante o jugo colonial francês no Mali. Utilizando técnicas de animação para dar visualidade ao animismo, o filme entrelaça lenda e história, e presta homenagem às vítimas do empreendimento. O passado mágico malinês ressurge como postura digna diante da tragédia e como força criadora, capaz de mover minérios.', 

                    'Commanded by a boy’s whip, stones pile up on Markala Bridge, erected with forced labor and at the cost of many lives during French colonial rule in Mali. Using animation techniques to portray animism, the film blends legend and history and pays homage to the victims of the enterprise. Mali’s magical past reemerges as a dignified stance in the face of the tragedy and as a creative force capable of moving minerals. ') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Quy Minh Truong</strong> ({!!switchLang('Vietnã', 'Vietnam')!!}, 1990)<br>
                    <em>Vuon Bau Xanh Tuoi</em>, 2016, 15’
                </div>
                
                <div class="texto interno">
                {!! switchLang('Tran Xuan Ve é um velho agricultor que trabalha com a esposa em uma plantação cheia de borboletas. Sentado em sua agradável casa rural, ele se lembra da carnificina que testemunhou quando era jovem e lutou na Guerra Cambojana-Vietnamita: uma vala comum de um quilômetro de comprimento com corpos indistintos sendo devorados por bichos do pântano. O verde frescor dos frutos que vemos se mistura à podridão viscosa dos cadáveres da memória narrada.', 

                    'Tran Xuan Ve is an old farmer who works with his wife on a plantation full of butterflies. Sitting in his pleasant country house, he recalls the carnage he witnessed as a young soldier in the Cambodian-Vietnamese War: a common one-kilometer-long ditch with indistinct bodies being devoured by swamp vermin. The green freshness of the fruit we see is blended with the viscous rot of the corpses in the narrated memory.') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang('<strong>Mona Vatamanu</strong> (Romênia, 1968) e <strong>Florin Tudor</strong> (Suíça, 1974)', 
                                  ' <strong>Mona Vatamanu</strong> (Romania, 1968) and <strong>Florin Tudor</strong> (Switzerland, 1974)')!!}

                    <br>
                    <em>Copacul lui Gagarin</em>, 2016, 22’50”
                </div>
                
                <div class="texto interno">
                {!! switchLang('O filósofo romeno Ovidiu Tichindeleanu visita o que restou do Centro Juvenil Gagarin, na Moldávia. Encontra ruínas de futuros que não aconteceram: promessas de viagens espaciais mescladas à utopia socialista e colonizadas pelo pensamento liberal pós-comunista e pelo tempo, que quebra vidraças, corrói paredes, deixa crescer plantas nas frestas.', 

                    'The Romanian philosopher Ovidiu Tichindeleanu visits what is left of the Gagarin Youth Center in Moldova. He encounters ruins of unrealized futures: promises of space travel blended with socialist utopia and colonized by liberal postcommunist thought and by time, which breaks glass, corrodes walls, allows plants to grow in cracks.') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Sasha Litvintseva</strong> ({!!switchLang('Rússia', 'Russia')!!}, 1989)<br>
                    <em>Evergreen</em>, 2014, 27’
                </div>
                
                <div class="texto interno">
                {!! switchLang('Registros fílmicos de um mundo perdido (o nosso) são o pano de fundo para a voz da narradora, uma viajante imortal. Nesse espaço e tempo indefinidos, prédios, pessoas e plantas parecem escombros de uma história desconhecida. Na busca do aperfeiçoamento civilizatório, herança, espetáculo e natureza se confundem, perpassados pela incontornável reprodutibilidade técnica da imagem.', 

                    'Footage of a lost world (ours) is the backdrop to the voice-over by an immortal traveler. In undefined space and time, buildings, people, and plants resemble the debris of an unknown history. In the pursuit of civilizational enhancement, heritage, spectacle, and nature are blurred, permeated by the unavoidable technical reproducibility of the image. ') !!}
                </div>

                <!-- Programa 2 -->
                <a name="programa2"></a>
                <div class="texto interno programa">
                {!! switchLang('<h1>PROGRAMA 2</h1>&nbsp;&nbsp;Duração 1h06’20”<br>
                    Dia 5.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 12h<br>
                    A partir do dia 10.10: de terça a sábado, às 14h; domingos, às 12h', 

                    '<h1>PROGRAM 2</h1>&nbsp;&nbsp;Running time 1h06’20”<br>
                    Oct 5, at 1:00 p.m., 3:00 p.m., 5:00 p.m., 7:00 p.m.,<br>and 9:00 p.m.; Oct 8, at 12:00 p.m.<br>
                    As of Oct 10: Tuesdays through Saturdays, at 2:00 p.m.;<br>
                    Sundays, at 12:00 p.m.') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Kavich Neang</strong> (Camboja, 1987)<br>
                    <em>Kong Bei</em>, 2015, 20’20”
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Uma costureira e um motorista de mototáxi levam uma vida a dois, comum e previsível, há quarenta anos. Certa noite, ao levar uma passageira, ele se lembra de uma dançarina que amou e de quem se perdeu quando o Khmer Vermelho chegou ao poder, em 1975. O encontro revela as realidades mudas que entrelaçam a vida das pessoas e a história política.', 

                    'A seamstress and a motorcycle taxi driver have shared an ordinary and predictable life for forty years. One night, when driving a female passenger, he recalls a dancer he once loved and lost when the Khmer Rouge came to power in 1975. The encounter reveals the mute realities that intertwine people’s lives and political history.') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Haig Aivazian</strong> ({!!switchLang('Líbano', 'Lebanon')!!}, 1980)<br>
                    <em>Not Every Day Is Spring</em>, 2016, 46’
                </div>
                
                <div class="texto interno">
                {!! switchLang('Apresentações musicais em Istambul pontuam o filme, como uma melodia que atravessa as histórias fragmentadas da Turquia. A vida e a música de Udi Hrant Kenkulian tornam-se símbolo das violências cometidas contra a população armênia, como o estabelecimento da rádio estatal, central na formação da nacionalidade turca moderna, em prédio erguido com as pedras de um cemitério armênio.', 

                    'Musical shows in Istanbul punctuate the film like a melody that runs through the fragmented stories of Turkey. The life and music of Udi Hrant Kenkulian have become a symbol of the violence committed against the Armenian population, such as the decision to set up the state radio station, a key element in the formation of modern Turkish nationality, in a building erected with stones from an Armenian cemetery.') !!}
                </div>

                <!-- Programa 3 -->
                <a name="programa3"></a>
                <div class="texto interno programa">
                {!! switchLang('<h1>PROGRAMA 3</h1>&nbsp;&nbsp;Duração 1h02’41”<br>
                    Dia 6.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 14h<br>
                    A partir do dia 10.10: de terça a sábado, às 16h; domingos, às 14h', 

                    '<h1>PROGRAM 3</h1>&nbsp;&nbsp;Running time 1h02’41”<br>
                    Oct 6, at 1:00 p.m., 3:00 p.m., 5:00 p.m., 7:00 p.m.,<br>and 9:00 p.m.; Oct 8, at 2:00 p.m.<br>
                    As of Oct 10: Tuesdays through Saturdays, at 4:00 p.m.;<br>
                    Sundays, at 2:00 p.m.') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Ana Vaz</strong> ({!!switchLang('Brasil', 'Brazil')!!}, 1986)<br>
                    <em>Amérika: Bahía de las Flechas</em>, 2016, 8’46” 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('O vídeo revisita o lago Enriquillo, na atual República Dominicana, onde Cristóvão Colombo aportou, em 1492, e confrontou o povo autóctone Taino para estabelecer o primeiro assentamento europeu na América. Usando a câmera como extensão do próprio corpo, a artista evoca a mudança cultural e ecológica sofrida pelo território, para fazer a história emergir do próprio cenário.', 

                    'This video revisits Lake Enriquillo in present-day Dominican Republic, where Christopher Columbus landed in 1492 and confronted the native Taíno people to establish the first European settlement in America. Using the camera as an extension of her own body, the artist evokes the cultural and ecological changes undergone by the land to make history emerge from the actual setting.') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Andrés Padilla Domene</strong> ({!!switchLang('México', 'Mexico')!!}, 1986)<br>
                    <em>Ciudad Maya</em>, 2016, 24’
                </div>
                
                <div class="texto interno">
                {!! switchLang('No limite entre ficção científica e documentário, o vídeo mostra jovens exploradores que manipulam estranhos aparatos tecnológicos para investigar um sítio arqueológico em ruínas na cidade mexicana de Mérida. O sítio revela-se uma réplica moderna de antigas construções maias. A obra questiona preconceitos e clichês associados ao povo indígena desaparecido. ', 

                    'Exploring the limits between science fiction and documentary, the video features young explorers manipulating strange technological devices to investigate the ruins of an archaeological site in the Mexican city of Mérida. The site turns out to be a modern replica of ancient Mayan buildings. The work challenges prejudices and clichés associated with the extinct indigenous people. ') !!}
                </div>

                <div class="textoPrincipal">
                    <strong>Jiwon Choi</strong> ({!!switchLang('Coreia do Sul', 'South Korea')!!}, 1991)<br>
                    <em>Parallel</em>, 2017, 29’55”
                </div>
                
                <div class="texto interno">
                {!! switchLang('Uma montagem frenética entremeia elementos da vida sul-coreana – K-Pop, exércitos em marcha, programas de auditório, a primeira presidenta, o líder supremo, Samsung, Gangnam style – e silêncios. O avô da artista conta sua fuga do Norte para o Sul, quando os exércitos cruzaram o paralelo que divide o território desde o fim da Segunda Guerra. Um retrato de conflitos entre realidades e ideologias.', 

                    'This frantic assembly combines elements of South Korean life—K-Pop, marching armies, talk shows, the first female president, the supreme leader, Samsung, Gangnam style—and silences. The artist’s grandfather narrates his escape from North to South, when the armies crossed the parallel that has divided the territory since the end of World War II. A portrait of conflicts between realities and ideologies.') !!}
                </div>

                <!-- Programa 4 -->
                <a name="programa4"></a>
                <div class="texto interno programa">
                {!! switchLang('<h1>PROGRAMA 4</h1>&nbsp;&nbsp;Duração 1h15’<br>
                    Dia 7.10 às 12h e 16h - apresentação dos artistas às 16h e 18h;<br>
                    dia 8.10, às 16h<br>
                    A partir do dia 10.10: de terça a sábado, às 18h; domingos, às 16h', 

                    '<h1>PROGRAM 4</h1>&nbsp;&nbsp;Running time 1h15’<br>
                    Oct 7, at 12:00 p.m. and 4:00 p.m.; Oct 8, at 4:00 p.m.<br>
                    As of Oct 10: Tuesdays through Saturdays, at 6:00 p.m.;<br>
                    Sundays, at 4:00 p.m.') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Roy Dib</strong> ({!!switchLang('Líbano', 'Lebanon')!!}, 1983)<br>
                    <em>Beit El Baher</em>, 2016, 75’ 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Em uma casa projetada por um conhecido arquiteto iraquiano dos anos 1960, um jantar reúne quatro pessoas em torno de temas e relações complicados. O conforto financeiro contrasta com o desconforto existencial, enquanto a tentativa arquitetônica de mesclar modernismo e tradições islâmicas reflete questões intelectuais e emocionais de uma geração de árabes ilhada entre ruínas de ideologias, medos e desejos.', 

                    'In a house designed by a renowned Iraqi architect from the 1960s, a dinner party brings together four people confronting complicated themes and relationships. Financial comfort contrasts with existential discomfort, while the architectural attempt to blend modernism and Islamic traditions reflects the intellectual and emotional issues of a generation of Arabs trapped between ideological ruins, fears, and desires.') !!}
                </div>

                <!-- Programa 5 -->
                <a name="programa5"></a>
                <div class="texto interno programa">
                {!! switchLang('<h1>PROGRAMA 5</h1>&nbsp;&nbsp;Duração 1h15’<br>
                    Dia 7.10 às 14h e 18h; dia 8.10, às 18h<br>
                    A partir do dia 10.10: de terça a sábado, às 20h; domingos, às 18h', 

                    '<h1>PROGRAM 5</h1>&nbsp;&nbsp;Running time 1h15’<br>
                    Oct 7, at 2:00 p.m. and 6:00 p.m.; Oct 8, at 6:00 p.m.<br>
                    As of Oct 10: Tuesdays through Saturdays, at 8:00 p.m.;<br>
                    Sundays, at 6:00 p.m.') !!}
                    
                </div>

                <div class="textoPrincipal">
                    <strong>Natasha Mendonca</strong> ({!!switchLang('Índia', 'India')!!}, 1978)<br>
                    <em>Ajeeb Aashiq</em>, 2016, 75’ 
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Na Índia, o cotidiano de uma mulher cis e de um homem trans é atravessado pelas relações de gênero. Ambos buscam amor e liberdade em uma cultura de violência e misoginia. Alternando drama e poesia, o filme cria um manifesto transfeminista, um comentário sobre a geopolítica e a cultura de Mumbai, um exercício de imaginação sobre novas formas de vida.', 

                    'In India, the daily life of a cis woman and a trans man is traversed by gender relations. Both seek love and freedom in a culture of violence and misogyny. Alternating drama and poetry, the film creates a transfeminist manifesto, a commentary on the geopolitics and culture of Mumbai, an imaginative exercise on new ways of life.') !!}
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
