
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Aulas abertas - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Open lectures - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Aulas abertas', 'Open lectures') !!}
                </div>

                <div class="texto interno">
                    {!! switchLang('Os curadores convidados do 20º Festival conduzem visitas à exposição, acompanhados por especialistas em áreas relacionadas a seus principais núcleos temáticos. As visitas, que terminam em aulas abertas, aprofundam a ideia da busca de novas visões de mundo pelo atravessamento das fronteiras entre arte e ciência, recorrente entre as obras do 20º Festival.',
                     'The guest curators of the 20th Festival conduct guided tours of the exhibition, accompanied by specialists in areas related to its core themes. The tours, which end in open lectures, expand the notion of the search for new worldviews by crossing the boundaries between art and science, recurrent among the works of the 20th Festival.') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 14.10, sábado, às 15h / Auditório<br><br>
                    <strong>Reinvenção e resistência</strong><br>
                    Com Ana Pato e Márcio Seligmann-Silva', 

                    'Saturday, Oct 14, at 3:00 p.m. / Auditorium<br><br>
                    <strong>Reinvention and resistance</strong><br>
                    With Ana Pato and Márcio Seligmann-Silva')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Tendo como propósito problematizar a arte contemporânea como espaço de escuta e reconhecimento da experiência histórica traumática, o encontro irá abordar os processos de perpetuação da violência, a produção de um contradiscurso às narrativas históricas “oficiais”, a questão da representação e o desejo de criar memória a partir da reintegração, no presente, de histórias obliteradas.
                        <br><br>
                        <strong>Ana Pato</strong> (Brasil) é curadora e pesquisadora. Doutora pela Faculdade de Arquitetura e Urbanismo (USP), foi curadora-chefe da 3ª Bienal da Bahia (2014) e diretora da Associação Cultural Videobrasil. Publicou o livro <em>Literatura expandida: arquivo e citação na obra de Dominique Gonzalez-Foerster</em> (Edições Sesc/Associação Cultural Videobrasil, 2012).
                        <br><br>
                        <strong>Márcio Seligmann-Silva</strong> (Brasil) é doutor pela Universidade Livre de Berlim, pós-doutor por Yale e professor titular de teoria literária na Unicamp. É autor de <em>O local da diferença </em>(Editora 34, 2005) e <em>A atualidade de Walter Benjamin e de Theodor W. Adorno</em> (Editora Civilização Brasileira, 2009). Foi professor visitante em universidades na Argentina, Alemanha e México.', 

                    'With the purpose of problematizing contemporary art as a space for listening and acknowledging traumatic historical experiences, the meeting will address processes of perpetuation of violence, the production of a counter-discourse to “official” historical narratives, the issue of representation, and the desire to create memory by restoring, in the present, exterminated histories.
                        <br><br>
                        <strong>Ana Pato</strong> (Brazil) is a curator and researcher with a doctorate from the Universidade de São Paulo’s School of Architecture and Urbanism. She was chief curator of the 3rd Bienal da Bahia (2014) and director of Associação Cultural Videobrasil. She is the author of the book <em>Literatura expandida: arquivo e citação na obra de Dominique Gonzalez-Foerster</em> (Edições Sesc/ Associação Cultural Videobrasil, 2012).
                        <br><br>
                        <strong>Márcio Seligmann-Silva</strong> (Brazil) has a doctorate from the Free University of Berlin and is a postdoctoral fellow at Yale and a full professor of literary theory at Unicamp. He is the author of <em>O local da diferença</em> (Editora 34, 2005) and <em>A atualidade de Walter Benjamin e de Theodor W. Adorno</em> (Editora Civilização Brasileira, 2009). He has been a visiting professor at universities in Argentina, Germany, and Mexico.') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 11.11, sábado, às 15h / Auditório<br><br>
                    <strong>Da arte de hoje ao espaço construído: outras formas e práticas para além do moderno</strong><br>
                    Com Diego Matos e Guilherme Wisnik', 

                    'Saturday, Nov 11, at 3:00 p.m. / Auditorium<br><br>
                    <strong>From current art to constructed space: other formats and practices beyond the modern</strong><br>
                    With Diego Matos and Guilherme Wisnik')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Por meio da arte contemporânea, o encontro discute como o espaço construído se renova e se comporta sob condicionantes diversas daquelas verificáveis em ambientes que repercutiram fielmente o paradigma moderno. Mais que pontuar uma modernidade periférica, trata-se de perceber espaços que se concebem por apropriações, resistências e invenções distintas do projeto estético e social hegemônico do Ocidente.
                        <br><br>
                        <strong>Diego Matos</strong> (Brasil) é pesquisador e curador. É mestre e doutor pela FAU USP. Foi assistente de curadoria da 29ª Bienal de São Paulo (2010), membro do Núcleo de Pesquisa e Curadoria do Instituto Tomie Ohtake, curador-assistente do 18º Festival de Arte Contemporânea Sesc_Videobrasil (2013) e coordenador de Acervo e Pesquisa da Associação Cultural Videobrasil.
                        <br><br>
                        <strong>Guilherme Wisnik</strong> (Brasil) é professor na Faculdade de Arquitetura e Urbanismo da Universidade de São Paulo (FAU USP). É autor de livros como <em>Lucio Costa</em> (Cosac Naify, 2001) e <em>Estado crítico: à deriva nas cidades</em> (Publifolha, 2009). Foi curador do projeto de arte pública <em>Margem</em> (Itaú Cultural, 2008-10) e curador-geral da 10ª Bienal de Arquitetura de São Paulo (2013).', 

                    'Through contemporary art, the meeting discusses how constructed space is renewed and behaves under constraints other than those verifiable in environments that faithfully echoed the modern paradigm. More than stressing a peripheral modernity, it is about perceiving spaces conceived through appropriations, resistances, and inventions distinct from the Western hegemonic aesthetic and social project.
                        <br><br>
                        <strong>Diego Matos</strong> (Brazil) is a researcher and curator with a master’s degree and doctorate from FAU USP. He was assistant curator of the 29th Bienal de São Paulo (2010), member of the Research and Curatorship Center of Instituto Tomie Ohtake, assistant curator of the 18th Contemporary Art Festival Sesc_Videobrasil (2013), and Archive and Research coordinator at Associação Cultural Videobrasil.
                        <br><br>
                        <strong>Guilherme Wisnik</strong> (Brazil) is a professor at Universidade de São Paulo’s School of Architecture and Urbanism (FAU USP). He is the author of books such as <em>Lucio Costa</em> (Cosac Naify, 2001) and <em>Estado crítico: à deriva nas cidades</em> (Publifolha, 2009). He was curator of the <em>Margem</em> public art project (Itaú Cultural, 2008–2010) and chief curator of the 10th Bienal de Arquitetura de São Paulo (2013).') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 13.1.18, sábado, às 15h / Auditório<br><br>
                    <strong>Cosmovisões</strong><br>
                    Com Beatriz Lemos e Wilbert Villca López', 

                     'Saturday, Jan 13, 2018, at 3:00 p.m. / Auditorium<br><br>
                    <strong>Cosmovisions</strong><br>
                    With Beatriz Lemos and Wilbert Villca López')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('A partir da hipótese de que cultura é o modo como povos se manifestam no mundo, a conversa traça paralelos entre percepções subjetivas e comunitárias nas relações entre humano, natureza e espiritualidade nas tradições ameríndias na América Latina, e olha para obras que dialogam com discursos não hegemônicos sobre os papéis dos indivíduos em sociedade.
                        <br><br>
                        <strong>Beatriz Lemos</strong> (Brasil) é curadora e pesquisadora. Mestra em história social da cultura, é idealizadora da plataforma de pesquisa Lastro – intercâmbios livres em arte. Coordenou o projeto de catalogação dos documentos e da obra de Márcia X (1959-2005). De 2015 a 2016, integrou o programa Curador Visitante, da Escola de Artes Visuais do Parque Lage.
                        <br><br>
                        <strong>Wilbert Villca López</strong> (Bolívia) é sociólogo de origem quéchua, formou lideranças jovens e comandou políticas agrárias de distribuição da terra na Bolívia. Pesquisa as racionalidades e sabedorias andinas. Coordena o Grupo de Estudos da Língua Quéchua na USP. Mestre pela USP, é doutorando na Université Sorbonne Paris 3, França.', 

                    'Through contemporary art, the meeting discusses how constructed space is renewed and behaves under constraints other than those verifiable in environments that faithfully echoed the modern paradigm. More than stressing a peripheral modernity, it is about perceiving spaces conceived through appropriations, resistances, and inventions distinct from the Western hegemonic aesthetic and social project.
                        <br><br>
                        <strong>Beatriz Lemos</strong> (Brazil) is a curator and researcher. She holds a master’s degree in social history of culture and is the creator of the Lastro – intercâmbios livres em arte research platform. She coordinated the project to catalog the documents and oeuvre of Márcia X (1959–2005). From 2015 to 2016, she took part in the Visiting Curator program of the Parque Lage School of Visual Arts.
                        <br><br>
                        <strong>Wilbert Villca López</strong> (Bolivia) is a sociologist of Quechua origin who has trained young leaders and led agrarian land distribution policies in Bolivia. He researches Andean rationalities and wisdom and coordinates the Quechua Language Study Group at USP. He holds a master’s degree from USP and is currently pursuing a doctorate at Université Sorbonne Paris 3, France.') !!}
                </div>

                

                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
