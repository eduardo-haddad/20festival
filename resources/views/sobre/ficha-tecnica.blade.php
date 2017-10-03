
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Ficha técnica - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Staff - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Ficha técnica', 
                                'Staff') !!}
                </div>

                <div class="fichaTecnica borderbox">

                    {{-- <h1>
                        {!! switchLang('20º FESTIVAL DE ARTE CONTEMPORÂNEA SESC_VIDEOBRASIL',
                                       '20TH CONTEMPORARY ART FESTIVAL SESC_VIDEOBRASIL') !!}
                    </h1> --}}

                    <div class="fichaEsq borderbox">

                        <p><span>{!! switchLang('direção e curadoria geral', 
                        'director and chief curator') !!}</span><br />
                        Solange O. Farkas</p>

                        <p><span>{!! switchLang('curadores convidados', 'guest curators') !!}</span><br />
                        Ana Pato, Beatriz Lemos, Diego Matos, João Laia</p>

                        <h1 class="interno">{!! switchLang('Premiação', 'Awards') !!}</h1>

                        <p><span>{!! switchLang('júri', 'jury') !!}</span><br />
                        Ika Sienkiewicz-Nowacka, Jennifer Lange, Katharina von Ruckteschell-Katte, Lisette Lagnado, Mami Katsuya, Maria Catarina Duncan, Marina Fokidis, Pablo León de la Barra, Salah M. Hassan</p>

                        <p><span>{!! switchLang('troféu', 'trophy') !!}</span><br />
                        Flavia Ribeiro</p>

                        <p><span>{!! switchLang('prêmios de aquisição', 'acquisition awards') !!}</span><br />
                        {!! switchLang('Acervo Sesc de Arte', 'Sesc Art Collection') !!}</p>


                        <p><span>{!! switchLang('prêmio especial', 'special award') !!}</span><br />
                        {!! switchLang('Prêmio O.F.F', 'O.F.F Award') !!} (Ostrovsky Family Fund)</p>

                        <p><span>{!! switchLang('prêmios de residência', 'residency awards') !!}</span><br />
                        {!! switchLang('Prêmio de Residência Goethe-Institut – Residência Vila Sul (Salvador, Brasil)<br /><br />
                        Prêmio de Residência Kyoto Art Center – Kyoto Art Center (Kyoto, Japão)<br /><br />
                        Prêmio de Residência Pro Helvetia – Programa América do Sul (Suíça)<br /><br />
                        Prêmio de Residência Ujazdowski Castle Centre for Contemporary Art – CCA Ujazdowski Castle (Varsóvia, Polônia)<br /><br />
                        Prêmio de Residência Wexner Center for the Arts – Wexner Center for the Arts (Columbus, EUA)', 

                        'Goethe-Institut Residency Prize – Vila Sul Residency (Salvador, Brazil)<br /><br />
                        Kyoto Art Center Residency Prize – Kyoto Art Center (Kyoto, Japan)<br /><br />
                        Pro Helvetia Residency Prize – South America Programme (Switzerland)<br /><br />
                        Centre For Contemporary Art Ujazdowski Castle Residency Prize – CCA Ujazdowski Castle (Warsaw, Poland)<br /><br />
                        Wexner Center for the Arts Residency Prize – Wexner Center for the Arts (Columbus, USA)') !!}
                        </p>

                        <h1 class="interno">{!! switchLang('Equipe', 'Staff') !!}</h1>

                        <p><span>{!! switchLang('produção executiva', 'executive producer') !!}</span><br />
                        Rafael Moretti</p>

                        <p><span>{!! switchLang('coordenação de conteúdo', 'content coordinator') !!}</span><br />
                        Cassia Rossini</p>

                        <p><span>{!! switchLang('coordenação da exposição', 'exhibition coordinators') !!}</span><br />
                        Cassia Rossini, Marcos Farinha</p>

                        <p><span>{!! switchLang('curador adjunto', 'deputy curator') !!}</span><br />
                        Gabriel Bogossian</p>

                        <p><span>{!! switchLang('produtoras', 'producers') !!}</span><br />
                        Alita Mariah, Carolina Câmara, Márcia Vaz</p>

                        <p><span>{!! switchLang('assistente de direção', 'assistant to the director') !!}</span><br />
                        Daniel Escorel</p>

                        <p><span>{!! switchLang('assistentes de produção', 'assistant producers') !!}</span><br />
                        Clarissa Ximenes, Elton de Almeida, Marcela Ignácio</p>

                        <p><span>{!! switchLang('auxiliares de produção', 'production support') !!}</span><br />
                        Denise Giglio, Leandro Muniz</p>

                        <p><span>{!! switchLang('logística', 'logistics') !!}</span><br />
                        Janaina Fainer</p>

                        <p><span>{!! switchLang('assistente de logística', 'logistics assistant') !!}</span><br />
                        Mônica Oliveira</p>

                        <p><span>{!! switchLang('receptivo', 'reception team') !!}</span><br />
                        Ana Luiza Ponciano, Fernanda Nahas Cecilio, Gabriela Munin, Lohana Schalken, Rick Levy</p>

                        <p><span>{!! switchLang('identidade visual, direção de arte e sinalização', 'visual identity, art direction, and wall panels') !!}</span><br />
                        {!! switchLang('Vitor Cesar e Felipe Kaizer, com Guilherme Pardini e Marcelo Venzon', 'Vitor Cesar and Felipe Kaizer, with Guilherme Pardini and Marcelo Venzon') !!}</p>

                        <p><span>{!! switchLang('coordenação editorial', 'editorial coordinator') !!}</span><br />
                        Teté Martinho</p>

                        <p><span>{!! switchLang('produção editorial', 'editorial producer') !!}</span><br />
                        Deborah Moreira</p>

                        <p><span>{!! switchLang('versão em inglês', 'English version') !!}</span><br />
                        Anthony Cleaver</p>

                        <p><span>{!! switchLang('revisão', 'copy proofreading') !!}</span><br />
                        Regina Stocklen</p>

                        <p><span>{!! switchLang('coordenação do Acervo Histórico', 'historical archive coordinator') !!}</span><br />
                        Ruy Luduvice</p>

                        <p><span>{!! switchLang('pesquisadores', 'researchers') !!}</span><br />
                        Juliana Costa, Régis Alves</p>

                        <p><span>{!! switchLang('videoteca', 'video library') !!}</span><br />
                        Andrei Thomaz</p>

                        <p><span>{!! switchLang('técnico em conservação audiovisual', 'audiovisual conservation technician') !!}</span><br />
                        Jorge Figueiredo</p>

                        <p><span>{!! switchLang('registro fotográfico', 'photographers') !!}</span><br />
                        Everton Ballardin, Pedro Napolitano Prata</p>

                        <p><span>{!! switchLang('registro em vídeo', 'video') !!}</span><br />
                        Mão Direita</p>

                        <p><span>{!! switchLang('consultor técnico', 'technical consultant') !!}</span><br />
                        Marcos Santos</p>

                        <p><span>{!! switchLang('produtor técnico', 'technical producer') !!}</span><br />
                        Anderson Araújo</p>

                                                

                    </div>

                    <div class="clear mv small"></div>

                    <div class="fichaDir borderbox">
                        
                        <p><span>{!! switchLang('ação educativa', 'educational action') !!}</span><br />
                        Vera Barros</p>
                        
                        <p><span>{!! switchLang('coordenação de comunicação', 'communications coordinators') !!}</span><br />
                        Cecília do Val, Marcele Rocha</p>
                        

                        <p><span>{!! switchLang('redação', 'staff writer') !!}</span><br />
                        Marcos Visnadi</p>

                        <p><span>{!! switchLang('produção de mídia', 'media producer') !!}</span><br />
                        Isolda Libório</p>

                        <p><span>{!! switchLang('desenvolvimento web', 'web development') !!}</span><br />
                        Eduardo Haddad</p>

                        <p><span>{!! switchLang('mídias sociais', 'social media') !!}</span><br />
                        Teté Martinho</p>

                        <p><span>{!! switchLang('design', '') !!}</span><br />
                        Lila Botter</p>

                        <p><span>{!! switchLang('assessoria de imprensa', 'press relations') !!}</span><br />
                        A4 Comunicação</p>

                        <p><span>{!! switchLang('projeto expográfico', 'expography') !!}</span><br />
                        André Vainer Arquitetos / Fernanda Jozsef, Tiago Wright</p>

                        <p><span>{!! switchLang('projeto de iluminação', 'lighting design') !!}</span><br />
                        Fernanda Carvalho / Design da Luz Estúdio</p>

                        <p><span>{!! switchLang('assistente', 'assistant') !!}</span><br />
                        Charly Ho</p>

                        <p><span>{!! switchLang('projeto de elétrica', 'electrical design') !!}</span><br />
                        Murilo Jarreta / Jarreta Projetos</p>

                        <p><span>{!! switchLang('projeto de estrutura', 'structure design') !!}</span><br />
                        Arquimedes Costa Engenharia Estrutural</p>

                        <p><span>{!! switchLang('projeto de segurança', 'security design') !!}</span><br />
                        David Berg</p>

                        <p><span>{!! switchLang('cenotecnia', 'set construction') !!}</span><br />
                        Maxxy Stands</p>

                        <p><span>{!! switchLang('áudio e vídeo', 'audio and video') !!}</span><br />
                        Paralax Media Technology</p>

                        <p><span>{!! switchLang('iluminação', 'lighting') !!}</span><br />
                        LPL Lighting</p>

                        <p><span>{!! switchLang('sinalização', 'signage') !!}</span><br />
                        Arte Viva Serigrafia</p>

                        <p><span>{!! switchLang('transporte internacional de obras', 'international art transportation') !!}</span><br />
                        AL Consultancy<br />
                        Millenium Transportes</p>

                        <p><span>{!! switchLang('transporte nacional de obras', 'national art transportation') !!}</span><br />
                        Mudanças Transporte São Miguel</p>

                        <p><span>{!! switchLang('museologia e conservação', 'museology and conservation') !!}</span><br />
                        RYS Conservação de Obra de Arte</p>

                        <p><span>{!! switchLang('montagem de obras', 'installation of artworks') !!}</span><br />
                        Skulltural Montagem Fina</p>

                        <p><span>{!! switchLang('coordenação financeira', 'financial coordinator') !!}</span><br />
                        Van Fresnot</p>

                        <p><span>{!! switchLang('assistente administrativa', 'management assistant') !!}</span><br />
                        Divy Cristina</p>

                        <p><span>{!! switchLang('assistente financeira', 'financial assistant') !!}</span><br />
                        Laura Calasans</p>

                        <p><span>{!! switchLang('auxiliar administrativa', 'management support') !!}</span><br />
                        Aline Nascimento Santos</p>

                        <p><span>{!! switchLang('assessoria jurídica', 'legal advisor') !!}</span><br />
                        Olivieri Associados</p>

                        <p><span>{!! switchLang('agradecimentos', 'acknowledgements') !!}</span><br />
                        Alice Wolfenson<br />
                        Ana Paula Vargas<br />
                        Barbara Dal Canale Meneses<br />
                        Benjamin Seroussi<br />
                        Centro de Referência e Atendimento<br>para Imigrantes (CRAI)<br />
                        Cibelle Galvão<br />
                        Clarisse Rivera<br />
                        Consulado do Cabo Verde em São Paulo<br />
                        Daniela Avelar<br />
                        Diana Borkovskyté<br />
                        Ebrahim Amerian<br />
                        Embaixada da República da Guiné-Bissau<br>no Brasil<br />
                        Galeria Mezanino<br />
                        Hasan Zarif<br />
                        Icarabe Brasil<br />
                        Imana Feres<br />
                        Irene Vida Gala<br />
                        Isadora Malta<br />
                        Jasper Walgrave<br />
                        Karen Cunha<br />
                        Laila Abou Mahmoud<br />
                        Laura Tupe<br />
                        Leo Biachini<br />
                        Lorena Vicini<br />
                        Louis Logodin<br />
                        Marcia Dib<br />
                        Mario Caro<br />
                        Michel Sleiman<br />
                        Ministério das Relações Exteriores do Brasil<br />
                        Pedro Farkas<br />
                        Raquel Borges<br />
                        Renato De Cara<br />
                        Saulé Rasickiené<br />
                        Telma Ballielo<br />
                        Vivian Ostrovsky<br />
                        Viviane Peña</p>
                    </div>

                    <div class="clear mv small"></div>


                    <h1 class="espaco">
                        {!! switchLang('ASSOCIAÇÃO CULTURAL VIDEOBRASIL / GALPÃO VB',
                                       'ASSOCIAÇÃO CULTURAL VIDEOBRASIL / GALPÃO VB') !!}
                    </h1>

                    <div class="fichaEsq borderbox">
                        
                        <p><span>{!! switchLang('conselho consultivo', 'advisory board') !!}</span><br />
                        Alberto Setubal, Ana Letícia Fialho, Cecilia Ribeiro, Fabio Cypriano, Fernanda Feitosa, Rosângela Rennó, Tata Amaral, Thereza Farkas, Vivian Ostrovsky</p>

                        <p><span>{!! switchLang('conselho diretor', 'board of directors') !!}</span><br />
                        Maria Farkas, Pedro Farkas, Solange O. Farkas, Thereza Farkas</p>

                        <p><span>{!! switchLang('direção geral e curadoria', 'general director and curator') !!}</span><br />
                        Solange O. Farkas</p>

                        <p><span>{!! switchLang('curador adjunto', 'deputy curator') !!}</span><br />
                        Gabriel Bogossian</p>

                        <p><span>{!! switchLang('assistente de direção', 'assistant to the director') !!}</span><br />
                        Daniel Escorel</p>

                        <p><span>{!! switchLang('assistente de curadoria', 'programme assistant') !!}</span><br />
                        Clarissa Ximenes</p>

                        <p><span>{!! switchLang('coordenação de produção', 'production coordinator') !!}</span><br />
                        Rafael Moretti</p>

                        <p><span>{!! switchLang('produção de exposições', 'exhibition producer') !!}</span><br />
                        Carolina Câmara</p>

                        <p><span>{!! switchLang('produção editorial', 'editorial producer') !!}</span><br />
                        Deborah Moreira</p>

                        <p><span>{!! switchLang('pesquisador coordenador', 'research coordinator') !!}</span><br />
                        Ruy Luduvice</p>
                        

                    </div>

                    <div class="clear mv small"></div>

                    <div class="fichaDir borderbox">
                        

                        <p><span>{!! switchLang('pesquisador assistente', 'assistant researcher') !!}</span><br />
                        Régis Alves</p>

                        <p><span>{!! switchLang('arquivista', 'archivist') !!}</span><br />
                        Juliana Costa</p>

                        <p><span>{!! switchLang('técnico audiovisual', 'audiovisual technician') !!}</span><br />
                        Jorge de Figueiredo</p>

                        <p><span>{!! switchLang('ações educativas', 'educational actions') !!}</span><br />
                        Luis Filipe Pôrto</p>

                        <p><span>{!! switchLang('coordenação de comunicação', 'communications coordinator') !!}</span><br />
                        Cecília do Val, Marcele Rocha</p>

                        <p><span>{!! switchLang('redação', 'staff writer') !!}</span><br />
                        Marcos Visnadi</p>

                        <p><span>{!! switchLang('design', '') !!}</span><br />
                        Lila Botter</p>

                        <p><span>{!! switchLang('mídias sociais', 'social media') !!}</span><br />
                        Teté Martinho</p>

                        <p><span>{!! switchLang('coordenadora financeira', 'financial coordinator') !!}</span><br />
                        Van Fresnot</p>

                        <p><span>{!! switchLang('assistente administrativa', 'administrative assistant') !!}</span><br />
                        Divy Cristina</p>

                    </div>

                    <div class="clear"></div>


                    <h1 class="espaco">
                        {!! switchLang('SERVIÇO SOCIAL DO COMÉRCIO',
                                       'SOCIAL SERVICE OF COMMERCE') !!}
                    </h1>

                    <div class="fichaEsq borderbox">
                        
                        <h1 class="interno">{!! switchLang('Administração Regional no Estado de São Paulo', '') !!}</h1>

                        <p><span>{!! switchLang('presidente do conselho regional', 'president of the regional board') !!}</span><br />
                        Abram Szajman</p>

                        <p><span>{!! switchLang('diretor regional', 'regional director') !!}</span><br />
                        Danilo Santos de Miranda</p>

                        <h1 class="interno">{!! switchLang('Superintendências', 'Superintendents') !!}</h1>

                        <p><span>{!! switchLang('técnico-social', 'technical social') !!}</span><br />
                        Joel Naimayer Padula</p>

                        <p><span>{!! switchLang('comunicação social', 'social communication') !!}</span><br />
                        Ivan Giannini</p>

                        <p><span>{!! switchLang('administrativo', 'administration') !!}</span><br />
                        Luiz Deoclécio Massaro Galina</p>

                        <p><span>{!! switchLang('técnico e de planejamento', 'technical and planning') !!}</span><br />
                        Sérgio José Battistelli</p>

                        <h1 class="interno">{!! switchLang('Gerências', 'Managers') !!}</h1>

                        <h1 class="interno">{!! switchLang('Artes visuais e tecnologia', 'Visual arts and technology') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Juliana Braga de Mattos</p>

                        <p><span>{!! switchLang('adjunta', 'deputy manager') !!}</span><br />
                        Nilva Luz</p>

                        <p><span>{!! switchLang('assistentes', 'assistants') !!}</span><br />
                        Carolina Barmell, Juliana Okuda, Kelly Teixeira, Leonardo Borges</p>

                        <h1 class="interno">{!! switchLang('Artes gráficas', 'Graphic design') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Hélcio Magalhães</p>

                        <p><span>{!! switchLang('adjunta', 'deputy manager') !!}</span><br />
                        Karina Musumeci</p>

                        <p><span>{!! switchLang('assistentes', 'assistants') !!}</span><br />
                        Érica Dias, Rogerio Ianelli</p>

                        <h1 class="interno">{!! switchLang('Desenvolvimento de produtos', 'Products development') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Evelim Moraes</p>

                        <p><span>{!! switchLang('adjunta', 'deputy manager') !!}</span><br />
                        Andressa de Gois</p>

                        

                    </div>

                    <div class="clear mv small"></div>



                    <div class="fichaDir borderbox">
                        
                        

                        <h1 class="interno">{!! switchLang('Difusão e promoção', 'Promotion and distribution') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Marcos Ribeiro de Carvalho</p>

                        <p><span>{!! switchLang('adjunto', 'deputy manager') !!}</span><br />
                        Fernando Fialho</p>

                        <h1 class="interno">{!! switchLang('Estudos e desenvolvimento', 'Research and development') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Marta Colabone</p>

                        <p><span>{!! switchLang('adjunto', 'deputy manager') !!}</span><br />
                        Iã Paulo Ribeiro</p>

                        <h1 class="interno">{!! switchLang('Relações internacionais', 'International relations') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Aurea Vieira</p>

                        <p><span>{!! switchLang('assistente', 'assistant') !!}</span><br />
                        Heloisa Pisani</p>

                        <h1 class="interno">{!! switchLang('Sesc Pompeia', '') !!}</h1>

                        <p><span>{!! switchLang('gerente', 'manager') !!}</span><br />
                        Mônica Carnieto</p>

                        <p><span>{!! switchLang('adjunto', 'deputy manager') !!}</span><br />
                        Sérgio Pinto</p>

                        <p><span>{!! switchLang('programação', 'programme') !!}</span><br />
                        {!! switchLang('Alcimar Frazão (Coordenação)<br />
                        Barbara Rodrigues, Cibele Camachi, Mariana Fernandes (Núcleo de Artes Visuais)', 
                        'Alcimar Frazão (Coordination)<br />
                        Barbara Rodrigues, Cibele Camachi, Mariana Fernandes (Visual Arts)') !!}</p>
                        

                        <p><span>{!! switchLang('comunicação', 'communication') !!}</span><br />
                        {!! switchLang('Roberta Della Noce (Coordenação)<br />
                        Ian Herman, Victor Buck (Supervisão Gráfica)', 
                        'Roberta Della Noce (Coordination)<br />
                        Ian Herman, Victor Buck (Graphic Supervision)') !!}</p>

                        <p><span>{!! switchLang('infraestrutura', 'infrastructure') !!}</span><br />
                        {!! switchLang('José Renato Negreti Dias, Marcelo Coscarella (Coordenação)<br />
                        Rafael Della Gatta (Produção)', 
                        'José Renato Negreti Dias, Marcelo Coscarella (Coordination)<br />
                        Rafael Della Gatta (Production)') !!}</p>

                        <p><span>{!! switchLang('alimentação', 'catering') !!}</span><br />
                        Raquel Lopes Py</p>

                        <p><span>{!! switchLang('atendimento', 'public services') !!}</span><br />
                        Silvio Basilio</p>

                        <p><span>{!! switchLang('administrativo', 'management') !!}</span> <br />
                        Paulo Delgado</p>

                        <p><span>{!! switchLang('serviços', 'services') !!}</span><br />
                        Ricardo Herculano</p>
                        
                    </div>



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
