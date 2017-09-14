
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

            

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Programa de vídeo — Auditório', '') !!}
                </div>

                <div class="texto interno">
                {!! switchLang('<h1>PROGRAMA I</h1>&nbsp;&nbsp;Duracão 1h15’50”<br>
                    Dia 4.10 às 13h, 15h, 17h, 19h e 21h; dia 8.10, às 10h<br>
                    A partir do dia 10.10: de terça a sábado, às 12h; domingos, às 10h', 

                    '') !!}
                    
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

            </div>
    
            <div id="mainMenu">
                @include('elements.mainMenu')
            </div>

        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
