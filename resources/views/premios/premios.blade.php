
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Prêmios - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Awards - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Prêmios', 'Awards') !!}
                </div>

               
                {!! switchLang('

                <div class="texto interno">
                   
                    <p>O conjunto de prêmios oferecido pelo 20º Festival de Arte Contemporânea Sesc_Videobrasil visa contemplar e estimular o desenvolvimento de artistas com uma produção instigante, independentemente de linguagens e meios. Eles incluem prêmios em dinheiro, parte correspondendo à aquisição de obras, e prêmios de residência artística, que obedecem a uma estratégia consolidada de promover experiências de troca e deslocamento como forma de estimular a criação e enriquecer trajetórias. Todos os prêmios serão atribuídos pelo júri de premiação do Festival, composto por curadores convidados e representantes dos programas de residência.</p>

                    <p><strong>Prêmios Especiais</strong></p>

                    <p>Serão oferecidos quatro prêmios em dinheiro.<br />
                    O Sesc São Paulo, realizador do Festival, oferece três&nbsp;<strong>Prêmios de Aquisição Acervo Sesc de Arte</strong>, no valor de R$ 25 mil cada um, a obras em vídeo. Os trabalhos contemplados passarão a integrar o acervo de arte contemporânea da instituição. A fundação Ostrovsky Family Fund, que atua nos Estados Unidos, Israel e Brasil apoiando iniciativas na área cultural, oferece o <strong>Prêmio O.F.F.</strong>, no valor de R$ 25 mil, a uma obra em vídeo.</p>

                    <p><strong>Prêmios de Residência Artística</strong></p>

                    <p>O Festival oferece prêmios de residência artística de forma sistemática desde o começo dos anos 2000, em colaboração com uma rede dinâmica de instituições e programas de intercâmbio parceiros no mundo todo. A interdisciplinaridade e o foco no diálogo Sul-Sul são características importantes para boa parte destas organizações, embora ofereçam, no conjunto, uma diversidade de experiências, e linhas de reflexão e trabalho. Os prêmios de residência serão atribuídos pelo júri do Festival, levando em conta afinidades entre a pesquisa de cada artista premiado e as diretrizes de cada programa. Os intercâmbios serão realizados entre 2018 e 2019, e os prêmios incluem passagem aérea, acomodação e <em>per diem</em>. Nesta edição, são oferecidos os seguintes prêmios de residência:</p>

                </div>

                 <div class="textoPrincipal">

                    <p><strong>Prêmio de Residência Centre For Contemporary Art Ujazdowski Castle</strong><br />
                    <em>CCA Ujazdowski Castle<br />
                    Varsóvia, Polônia</em></p>              
                
                </div>

                <div class="texto interno">
                    <p>O primeiro centro indisciplinar de arte da Polônia e um dos centros de arte mais relevantes e ativos do Leste Europeu. Promove cerca de quatrocentos eventos anuais, que envolvem não só profissionais, artistas e estudantes, mas também públicos que não convivem cotidianamente com arte. As residências para artistas, curadores, designers e pesquisadores constituem uma parte importante do programa. Desde 2002, já foram recebidos cerca de duzentos residentes do mundo inteiro, que puderam colaborar com importantes instituições, galerias e festivais de arte internacionais. Os curadores do U–jazdowski – Ika Sienkiewicz-Nowacka (diretora), Marianna Dobkowska, Anna Ptak, Agnieszka Sosnowska e Aleksandra Biedka (gerentes) –, criam, para cada residente, a partir de sua prática individual, uma rede de cooperação com artistas, ativistas, pesquisadores e instituições.</p>
                </div>

                <div class="textoPrincipal">

                    <p><strong>Prêmio de Residência Goethe-Institut </strong><br />
                    <em>Residência Vila Sul<br />
                    Salvador, Brasil</em></p>

                </div>

                <div class="texto interno">

                    <p>O primeiro programa de residência da instituição no Sul tem como sede uma cidade que é central nos diálogos Sul-Sul. Situada no Atlântico negro, Salvador foi a primeira capital brasileira e tem formação afro-brasileira. O traço essencial do programa é o intercâmbio entre os artistas residentes e a população local, tendo como focos temáticos a conexão entre América do Sul e África, e o conceito de Sul Global. O Instituto dispõe de teatro-estúdio, galerias, pátio e biblioteca, e oferece condições ideais para encontros em diversos formatos, voltados a promover reflexões e impulsionar a produção cultural.</p>
                </div>

                <div class="textoPrincipal">
                    <p><strong>Prêmio de Residência Kyoto Art Center</strong><br />
                    <em>Kyoto Art Center<br />
                    Kyoto, Japão</em></p>
                </div>

                <div class="texto interno">

                    <p>O Kyoto Art Center é um centro cultural dedicado a promover o intercâmbio entre Kyoto e a cena artística global. Seu programa de residências oferece apoio a artistas e pesquisadores emergentes interessados em exercer atividades criativas na cidade. Concebido como um lugar onde as várias linguagens artísticas se encontram e para a criação de novas manifestações culturais, por meio da revitalização das tradições da cidade, relacionadas à tecnologia, à indústria e à vida cotidiana de seus cidadãos.</p>

                </div>

                <div class="textoPrincipal">

                    <p><strong>Prêmio de Residência Pro Helvetia | Programa América do Sul </strong></p>

                </div>

                <div class="texto interno">

                    <p>O Prêmio de Residência Pro Helvetia | Programa América do Sul é oferecido pela Fundação Suíça para a Cultura Pro Helvetia em parceria com o 20º Festival de Arte Contemporânea Sesc_Videobrasil, dentro do contexto de seu programa de intercâmbio na América do Sul 2017-2020. O programa pretende fomentar o intercâmbio cultural e nutrir novas parcerias entre a Suíça e os países da América do Sul. Um artista baseado na América do Sul receberá uma residência de três meses em um dos programas parceiros da Pro Helvetia, na Suíça. A época e o local da residência serão definidos com o artista, de acordo com suas demandas e interesses de pesquisa específicos.</p>

                </div>

                <div class="textoPrincipal">

                    <p><strong>Prêmio de Residência Wexner Center for the Arts </strong><br />
                    <em>Wexner Center for the Arts<br />
                    Columbus, EUA</em></p>

                </div>

                <div class="texto interno">

                    <p>Os artistas contemplados com o Prêmio de Residência Artística Wexner Center for the Arts constituem uma categoria à parte entre os muitos que recebem apoio da instituição anualmente. Todos os anos, um grupo de artistas de todas as disciplinas criativas é escolhido pelos diretores e curadores do Centro para receber o prêmio. Comemorando seu 22º aniversário nesta temporada, o Programa de Residência Artística do Wexner oferece um suporte mais substancial: recursos financeiros consideráveis, além de apoio técnico, intelectual, profissional e moral para desenvolver novos trabalhos.</p>

                </div>', 



                '<div class="texto interno">
                   
                    <p>The awards offered by the 20th Contemporary Art Festival Sesc_Videobrasil aim to acknowledge and encourage the development of artists producing compelling work, regardless of languages and media. They include prize money awards, partly related to the acquisition of artworks, and artist residency awards, in line with an established strategy of fostering experiences of exchange and movement as a means to stimulate creation and enhance trajectories. All awards will be granted by the Festival jury, composed of guest curators and representatives of the residency programs.</p>

                    <p><strong>Special awards</strong></p>

                    <p>Four money awards will be offered. Sesc São Paulo, the Festival’s presenter, offers three <strong>Sesc Art Collection Acquisition Awards</strong>, worth R$25,000 each, for video works. The winning productions will be included in the institution’s contemporary art collection. The Ostrovsky Family Fund, which supports several cultural initiatives in the United States, Israel, and Brazil, offers the <strong>O.F.F Award</strong>, worth R$25,000, for a video work.</p>

                    <p><strong>Artist residency awards</strong></p>

                    <p>The Festival has consistently offered artist residency awards since the early 2000s, in cooperation with a dynamic network of partner institutions and exchange programs worldwide. Interdisciplinarity and focus on the South-South dialogue are important characteristics for many of these organizations, although they offer, on the whole, a diversity of experiences and lines of thought and work. The residency awards will be granted by the Festival’s jury, taking into consideration the affinities between the research of each winning artist and the guidelines of each program. The residencies will take place between 2018 and 2019 and the awards include airfare, accommodation and <em>per diem</em>. This edition offers the following residency awards:</p>

                </div>

                 <div class="textoPrincipal">

                    <p><strong>Centre For Contemporary Art Ujazdowski Castle Residency Prize</strong><br />
                    <em>CCA Ujazdowski Castle<br />
                    Warsaw, Poland</em></p>              
                
                </div>

                <div class="texto interno">
                    <p>Ujazdowski Castle Centre for Contemporary Art is the premiere interdisciplinary art center in Poland and one of the most vibrant art centers in Central and Eastern Europe. About four hundred events take place yearly at the <em>U-jazdowski</em> that involve audience consisted of professionals, artists, students but also people not acquainted with art on an everyday basis. The residencies for artists, curators, designers, and researchers constitute an important part of the Ujazdowski CCC Art&nbsp; programme since 2002. They have accommodated almost two hundred residents from the whole world, allowing them to cooperate with important foreign institutions, galleries, and art festivals. For each foreign artist visiting Warsaw U-jazdowski, the team of curators Ika Sienkiewicz-Nowacka (head), Marianna Dobkowska, Anna Ptak, Agnieszka Sosnowska, and Aleksandra Biedka (office manager), create a unique network of cooperators, artists, activists, researchers, and institutions, regarding his or her individual practice.</p>
                </div>

                <div class="textoPrincipal">

                    <p><strong>Goethe-Institut Residency Prize</strong><br />
                    <em>Vila Sul Residency<br />
                    Salvador, Brazil</em></p>

                </div>

                <div class="texto interno">

                    <p>The institution’s first residency program in the Southern Hemisphere is based in a city that is key to South-South cooperation. Situated in the Black Atlantic, it was the first Brazilian capital and boasts an African-Brazilian background. Exchanges between resident artists and between artists and locals are essential to the program, especially those focusing the connections between Africa and South America and the concept of the Global South. The institute houses a studio-theater, galleries, a patio, and a library. It offers ideal conditions for encounters of different formats, aimed at fostering reflection and stimulating cultural production.</p>
                </div>

                <div class="textoPrincipal">
                    <p><strong>Kyoto Art Center Residency Prize</strong><br />
                    <em>Kyoto Art Center<br />
                    Kyoto, Japan</em></p>
                </div>

                <div class="texto interno">

                    <p>The Kyoto Art Center is a cultural center dedicated to promoting exchanges between the global art scene and Kyoto. Its residency program offers support for emerging artists and researchers who wish to pursue creative activities in the city. The Kyoto Art Center was conceived as a meeting place for various genres of art as well as for creating new cultures through the revitalization of the city’s tradition, which is connected with technology, industry, and everyday life of its citizens.</p>

                </div>

                <div class="textoPrincipal">

                    <p><strong>Pro Helvetia Residency Prize | South America Programme </strong></p>

                </div>

                <div class="texto interno">

                    <p>The Pro Helvetia Residency Prize | South America Programmeis grantedbythe Swiss Arts Council Pro Helvetia in partnership with the20th Contemporary ArtFestival Sesc_Videobrasilwithin the framework of the South America exchangeprogramme2017-2020. Theprogrammeaims to foster cultural exchanges and give rise to new partnerships between Switzerlandand South American countries. One artist based in South America willreceive a threemonth residency with one of Pro Helvetia partner residencies in Switzerland. The time and place of the residency will be defined together with the artist in response to his or her specific demands and research interests.</p>

                </div>

                <div class="textoPrincipal">

                    <p><strong>Wexner Center for the Arts Residency Prize</strong><br />
                    <em>Wexner Center for the Arts<br />
                    Columbus, USA</em></p>

                </div>

                <div class="texto interno">

                    <p>Among the diverse artists who receive production assistance from the Wexner Center each year, recipients of theWexner Center Artist Residency Awardconstitute a special category. A handful of artists spanning all creative disciplines are selected annually by the center’s director and curators to receive this distinction. Celebrating its 22nd anniversary this season, the Artist Residency Award program offers the most substantial support: considerable financial resources, along with technical, intellectual, professional, and moral support to develop new work.</p>

                </div>') !!}

                
                
                

                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
