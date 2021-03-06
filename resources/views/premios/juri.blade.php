
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Júri - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Jury - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Júri', 'Jury') !!}
                </div>

                <div class="texto interno">

                    <div class="imgSobre" class="dv">
                        {!! Html::image('img/juri.jpg') !!}
                    </div>

                </div>

               
                {!! switchLang('
                
                <div class="textoPrincipal"><strong>Ika Sienkiewicz-Nowacka</strong> (Polônia)</div>

                <div class="texto interno">Gestora cultural e curadora, chefia o programa de residências artísticas do Ujazdowski Castle Centre for Contemporary Art. Integra a diretoria do ResArtis. Foi curadora de projetos de artistas internacionais e gerente e cocuradora de exposições relacionadas às residências artísticas do CCCA, como <em>Rooted Design for Routed Living; RE-tooling RESIDENCIES</em> e <em>Re-directing EAST.</em></div>

                <div class="textoPrincipal"><strong>Jennifer Lange</strong> (EUA)</div>

                <div class="texto interno">É curadora do estúdio de cinema e vídeo do Wexner Center for the Arts (Columbus, Ohio, EUA). Organizou no Wexner exposições como <em>Cruzamentos: Contemporary Art in Brazil </em>(2014), <em>Shimon Attie: MetroPAL.IS </em>(2013) e&nbsp;<em>Sadie Benning: Suspended Animation</em> (2007), além de programas mensais no The Box, espaço de exibição de vídeo do Centro.</div>

                <div class="textoPrincipal"><strong>Katharina von Ruckteschell-Katte</strong> (Alemanha)</div>

                <div class="texto interno">Estudou literatura comparada, história da arte e letras. Foi docente do Goethe-Institut de Frankfurt e Bonn, chefiou o departamento de língua em Moscou e dirigiu o instituto em Bangcoc. Em 2008, assumiu a direção regional do Goethe-Institut para a região subsaariana da África, com base em Johannesburgo. Desde 2013, é diretora-executiva do Goethe-Institut São Paulo e na América do Sul.</div>

                <div class="textoPrincipal"><strong>Lisette Lagnado</strong> (Congo/Brasil)</div>

                <div class="texto interno">É crítica de arte e curadora independente. Formada em jornalismo, mestre em comunicação e semiótica, e doutora em filosofia, foi curadora da 27ª Bienal de São Paulo (2006) e do 33º Panorama do Museu de Arte Moderna de São Paulo (2013), entre outras exposições. De 2014 a 2017, dirigiu a Escola de Artes Visuais do Parque Lage, no Rio de Janeiro, onde hoje é curadora de ensino e programas públicos.</div>

                <div class="textoPrincipal"><strong>Mami Katsuya </strong>(Japão)</div>

                <div class="texto interno">Diretora de programação do Kyoto Art Center, também é responsável pelo programa de residências do centro. Foi curadora da Yuuhisai Koudoukan Foundation e de exposições como <em>The Nature on Our Palm – Kyokashi and Rimpa</em> (Yuuhisai Koudoukan, 2014) e <em>Oliver Herring: Emi, Nabe, Kohei, Asako, Yoshitaka, Yohei, Yuma, Hiroki</em> (Kyoto Art Center, 2012).</div>

                <div class="textoPrincipal"><strong>Maria Catarina Duncan</strong> (Brasil)</div>

                <div class="texto interno">É assistente de coordenação do programa COINCIDÊNCIA - Intercâmbios Culturais Suíça América do Sul, da Fundação Suíça para Cultura Pro Helvetia. Colaborou com o projeto de arte e educação no Solar dos Abacaxis, no Rio de Janeiro, e&nbsp;na manutenção constelar do projeto <em>Terreyro Coreográfico</em>, em São Paulo. Foi assistente curatorial na 32ª Bienal de São Paulo, <em>Incerteza Viva</em>.&nbsp;Integrou a equipe curatorial do Pivô Arte e Pesquisa, e foi assistente de curadoria para as exposições T<em>erra Comunal - Marina Abramovic</em>, no Sesc Pompeia; <em>Alter-Heróis</em>, no MAC – USP Ibirapuera; e <em>Still Being</em>, do artista Antony Gormley, no Centro Cultural Banco do Brasil.</div>

                <div class="textoPrincipal"><strong>Marina Fokidis</strong> (Grécia)</div>

                <div class="texto interno">É curadora e escritora. Foi membro da equipe curadora da documenta 14 (2017), e desde 2014 chefia o escritório artístico da exposição em Atenas. É fundadora e editora-chefe da revista South as a State of Mind, e foi fundadora e diretora artística do. Foi também fundadora e diretora artística da Kunsthalle Athena (2010-2014). Foi cocuradora da 3ª Bienal de Thessaloniki (2011), curadora do Pavilhão Grego na 51ª Bienal de Veneza (2003) e esteve entre os curadores da 1ª Bienal de Tirana (2001).</div>

                <div class="textoPrincipal"><strong>Pablo León de la Barra </strong>(México)</div>

                <div class="texto interno">É curador de arte latino-americana do Salomon R. Guggenheim Museum, Nova York, e curador--adjunto do MASP, São Paulo. Dirigiu a Casa França-Brasil, Rio de Janeiro (2015-2016).&nbsp;Criou a Bienal Tropical de San Juan, Porto Rico (2011) e foi curador do pavilhão do México na 57ª Bienal de Veneza (2017). Organizou exposições no Museo Tamayo, Cidade do México, e MAM-RJ, entre outras instituições.</div>

                <div class="textoPrincipal"><strong>Salah M. Hassan</strong> (Sudão/EUA)</div>

                <div class="texto interno">É historiador da arte, crítico e curador. É o Goldwin Smith Professor de história da arte africana e da diáspora e de estudos visuais da Universidade Cornell, Londres. Organizou exposições como <em>Authentic/Ex-Centric</em>, na 49ª Bienal de Veneza (2001), e <em>3x3: Three Artists/Three: David Hammons, Maria Magdalena Campos-Pons, Pamela Z</em>, na Dak’Art (2004). Recebeu a bolsa J. Paul Getty Postdoctoral Fellowship.</div>', 



                '<div class="textoPrincipal">


                <p><strong>Ika Sienkiewicz-Nowacka </strong>(Poland) is a culture manager, curator, she is the head of the artistic residencies department at Ujazdowski Castle Centre for Contemporary Art. She is a ResArtis board member. She curated projects by international artists and acted as manager and cocurator of exhibitions relating to the artistic residencies at UCCCA, such as <em>Rooted Design for Routed Living</em> and<em> RE-tooling RESIDENCIES</em>.</p>


                <p><strong>Jennifer Lange</strong> (US) is curator of the Film/Video Studio at the Wexner Center for the Arts (Columbus, Ohio, USA). She has curated exhibitions at Wexner, such as <em>Cruzamentos: Contemporary Art in Brazil </em>(2014), <em>Shimon Attie: Metro</em>PAL.IS. (2013), and <em>Sadie Benning: Suspended Animation</em> (2007), as well as monthly programs in <em>The Box</em>, the Wex’s dedicated video exhibition space.</p>


                <p><strong>Katharina von Ruckteschell-Katte</strong> (Germany) studied comparative literature, art history, and languages. She lectured at the Goethe-Institut Frankfurt and Goethe-Institut Bonn, was head of the Language Department in Moscow, and director of the institute in Bangkok. In 2008, she became regional director of the Goethe-Institut for the sub-Saharan Africa region, based in Johannesburg. Since 2013, she has been executive director of the Goethe-Institut São Paulo and for South America.</p>


                <p><strong>Lisette Lagnado</strong> (Congo/Brazil) is an art critic and independent curator with a bachelor’s degree in journalism, a master’s degree in communication and semiotics, and a doctorate in philosophy. She curated the 27th Bienal de São Paulo (2006), and the 33rd Panorama do Museu de Arte Moderna de São Paulo (2013), among other exhibtions. She has directed the Parque Lage School of Visual Arts, Rio de Janeiro (2014 to 2017), where she is currently curator of education and public programs.</p>


                <p><strong>Mami Katsuya</strong> (Japan) is Kyoto Art Center Program Director as well as its artist-in-residence coordinator. She has been a curator of Yuuhisai Koudoukan Foundation. She has organized exhibitions such as <em>The Nature on our palm – Kyokashi and Rimpa</em> (Yuuhisai Koudoukan, 2014), and <em>Oliver Herring: Emi, Nabe, Kohei, Asako, Yoshitaka, Yohei, Yuma, Hiroki…</em> (Kyoto Art Center, 2012).</p>

                <p><strong>Maria Catarina Duncan</strong> (Brazil) is assistant coordinator of COINCIDENCIA – Swiss &amp; South American Cultural Exchanges, a program of the Swiss Cultural Foundation Pro Helvetia. She collaborated on the art and education project at Solar dos Abacaxis, in Rio de Janeiro, and the <em>Terreyro Coreográfico</em> project in São Paulo. She was assistant curator at the 32nd São Paulo Biennial, <em>Incerteza Viva</em>. She was a member of the curatorial team of Pivô Arte e Pesquisa and assistant curator at the exhibitions <em>Terra Comunal - Marina Abramovic</em>, at Sesc Pompeia; <em>Alter-Heroes</em>, at MAC - USP Ibirapuera; and <em>Still Being</em>, by the artist Antony Gormley, at Centro Cultural Banco do Brasil</p>


                <p><strong>Marina Fokidis</strong> (Greece) is a curator and writer. She was a member of the curatorial team of documenta 14 (2017), where she also served as head of artistic office in Athens, since 2014. She is the founder and editorial director of the journal South as a State of Mind, and was the founder and artistic director of Kunsthalle Athena (2010-2014). She was cocurator of the 3rd Thessaloniki Biennial (2011), commissioner and curator of the Greek Pavilion at the 51st Venice Biennale (2003), and one of the curators of the 1st Tirana Biennial (2001).</p>


                <p><strong>Pablo León de la Barra </strong>(Mexico) is the Guggenheim curator at large, Latin America, at the Salomon R. Guggenheim Museum, New York, and associate curator at Museu de Arte de São Paulo. He has served as director of the Casa França-Brasil in Rio de Janeiro (2015–16).&nbsp;He has founded the Bienal Tropical, Puerto Rico (2011), and curated the Mexican Pavilion at the 2017 Venice Biennale. He has organized exhibitions at Museo Tamayo, Mexico, and Museu de Arte Moderna, Rio de Janeiro, among other institutions.</p>


                <p><strong>Salah M. Hassan</strong> (Sudan) is an art historian, art critic, and curator. He is the Goldwin Smith Professor of African and African Diaspora Art History and Visual Culture in Africana Studies and Research Center, and Department of History of Art and Visual Studies, Cornell University. He has founded and edited <em>Nka: Journal of Contemporary African Art</em>&nbsp;(Duke University Press) and served as consulting editor for&nbsp;<em>African Arts</em>. He has curated international exhibitions such as&nbsp;<em>Authentic/Ex-Centric&nbsp;</em>(49th Venice Biennale, 2001),&nbsp;and <em>3x3: Three Artists/Three: David Hammons, Maria Magdalena Campos-Pons, Pamela Z</em>&nbsp;(Dak’Art, 2004). He has received the J. Paul Getty Postdoctoral Fellowship, as well as major grants from the Sharjah Art Foundation, Ford, Rockefeller, and Prince Claus Fund foundations.</p>

            </div>
') !!}

                
                
                

                

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
