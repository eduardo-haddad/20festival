
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Conversas - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Talks - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Conversas', 'Talks') !!}
                </div>

                <div class="texto interno">
                    {!! switchLang('Encontros abertos conduzidos por Vera Barros, criadora do programa de Ações Educativas do 20º Festival, aproximam o público de artistas, curadores e designers participantes dos <strong>Panoramas do Sul</strong>, promovendo a troca de experiências e a reflexão sobre os principais eixos conceituais da exposição.',

                     'Open meetings mediated by Vera Barros, creator of the Educational Action program of the 20th Festival, bring the audience closer to artists, curators, and designers of <strong>Southern Panoramas</strong>, fostering the exchange of experiences and reflection on the exhibition’s core concepts.') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 21.10, sábado, às 15h / Auditório', 

                    'Saturday, Oct 21, at 3:00 p.m. / Auditorium')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('<strong>Conversa com o artista Vitor Cesar e o designer Felipe Kaizer</strong><br>
                        Os criadores da linguagem visual gráfica e espacial do Festival falam da experiência de trabalhar a partir de conceitos curatoriais.', 

                    '<strong>Talk with artist Vitor Cesar and designer Felipe Kaizer</strong><br>The designers of the Festival’s graphic and spatial identity discuss the experience of working with curatorial concepts.') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 28.10, sábado, às 15h / Auditório', 

                    'Saturday, Oct 28, at 3:00 p.m. / Auditorium')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('<strong>Conversa com a artista Graziela Kunsch</strong>', 

                    '<strong>Talk with artist graziela Kunsch</strong>') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 2.12, sábado, às 15h / Auditório', 

                    'Saturday, Dec 2, at 3:00 p.m. / Auditorium')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('<strong>Conversa com os artistas Ana Elisa Egreja, Ana Mazzei e Tatewaki Nio</strong>', 

                    '<strong>Talk with artists Ana Elisa Egreja, Ana Mazzei, and Tatewaki Nio</strong>') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 2.12, sábado, às 17h / Auditório', 

                    'Saturday, Dec 2, at 5:00 p.m. / Auditorium')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('<strong>Conversa com os curadores</strong>', 

                    '<strong>Talk with curators</strong>') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 14.1.2018, domingo, às 15h / Auditório', 

                    'Sunday, Jan 14, 2018, at 3:00 p.m. / Auditorium')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('<strong>Conversa com o artista Ícaro Lira e integrantes do <em>Museu do Estrangeiro</em></strong>', 

                    '<strong>Talk with artist Ícaro lira and members of <em>Museu do Estrangeiro</em></strong>') !!}
                </div>

                

                

                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
