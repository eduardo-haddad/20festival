
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Performances - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Performances - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Performances', '') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 3.10, terça, às 21h30 / Comedoria<br><br>
                    <strong>Natasha Mendonca e Suman Sridhar</strong> (Índia)<br>
                    <em>The Black Mamba</em>, 75’', 

                    'Tuesday, Oct 3, at 9:30 p.m. / Comedoria<br><br>
                    <strong>Natasha Mendonca and Suman Sridhar</strong> (India)<br>
                    <em>The Black Mamba</em>, 75’')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Em parceria com a cantora, compositora, atriz e performer indiana Suman Sridhar, Mendonca propõe um <em>live act</em> envolvendo vídeo e música ao vivo. Sridhar transita com facilidade entre campos e referências: já criou sucessos pop radiofônicos, apresentou-se em galerias de arte e fez performances na televisão. Produziu e atuou em Ajeeb Aashiq, de Mendonca, obra selecionada para a exposição Panoramas do Sul. Desde o título, <em>The Black Mamba</em> tira partido da atmosfera do cinema indiano popular, apelidado de Bollywood, em referência a Hollywood.', 

                    'Pairing up with the Indian singer, songwriter, actress, and performer Suman Sridhar, Mendonca proposes a live act involving video and live music. Sridhar is at home in different areas and genres: she has created radio pop hits, performed in art galleries, and staged performances on television. She produced and acted in Mendonca’s Ajeeb Aashiq, a work selected for the Southern Panoramas exhibition. From its very title, <em>The Black Mamba</em> draws on the atmosphere of Bollywood, the Indian popular film industry nicknamed after Hollywood.') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 4.10, quarta, às 20h30 / Comedoria<br><br>
                    <strong>Filipa César</strong> (Portugal) e <strong>Sana N’Hada</strong> (Guiné-Bissau)<br>
                    <em>LUTA CA CABA INDA</em>, aproximadamente 90’', 

                    'Wednesday, Oct 4, at 8:30 p.m. / Comedoria<br><br>
                    <strong>Filipa César</strong> (Portugal) and <strong>Sana N’Hada</strong> (Guinea-Bissau)<br>
                    <em>LUTA CA CABA INDA</em>, approximately 90’')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Usando como título uma expressão <em>creole</em> que significa “a luta ainda não acabou”, a ação parte da recuperação, pesquisa e divulgação, por Filipa César e cineastas da Guiné-Bissau, do acervo do Instituto Nacional do Cinema e Audiovisual do país, com  filmes produzidos por movimentos de libertação dos anos 1960 e 1970. Na performance, artista e pesquisador conversam sobre os conteúdos do arquivo, que consideram uma “uma cápsula do tempo”, exibem o filme <em>O regresso  de Amilcar Cabral</em>, que mostra a cerimônia solene de retorno dos restos mortais do político marxista, assassinado por membros de seu partido, a Bissau, em 1976. A ação termina com um jantar criado em parceria com o coletivo de imigrantes africanos Iada África.', 

                    'Titled with a Creole expression that means “the struggle is not over yet,” the action is based on the restoration, research, and dissemination, by Filipa César and Guinea-Bissau  filmmakers, of the collection of the country’s National Cinema and Audiovisual Institute, with films produced by the liberation movements of the 1960s and ’70s. In the performance, artist and researcher talk about the contents of the archive, which they consider a “time capsule,” and screen the  film <em>The Return of Amilcar Cabral</em>, showing the solemn ceremony of the return to Bissau of the remains of the Marxist politician assassinated by members of his party in 1976. The action ends with a dinner created together with Iada África, a collective formed by African immigrants.') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 5.10, quinta, às 20h30 / Teatro<br><br>
                    <strong>Von Calhau!</strong> (Portugal)<br>
                    <em>Tau Tau</em>, 50’', 

                    'Thursday, Oct 5, at 8:30 p.m. / Theater<br><br>
                    <strong>Von Calhau!</strong> (Portugal)<br>
                    <em>Tau Tau</em>, 50’')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Em um ambiente marcado pela presença de instrumentos – bumbo, címbalo, gaita de foles – e objetos infláveis e pendentes, os artistas e um músico promovem um concerto cênico-sonoro. O “toncerto” acontece a partir de duas células: o primeiro Tau e o segundo Tau. “O primeiro Tau debruça-se sobre o princípio especulativo tautauista que afirma que o tom original do universo (o primeiro Tau?) tem sua origem na cópia e replicação de si mesmo ((o segundo Tau?)). Assim, é a cópia e replicação tautauista do Tau que origina o Tau. O segundo Tau é a tentativa de discorrer sobre este fenômeno por meio de palavras, num concerto composto por canções curtas. Tenta-se, assim, ao fim e ao cabo, acabar no fim. Depois do segundo Tau segue-se (((afinal))) o primeiro Tau.”', 

                    'In an environment featuring musical instruments—bass drum, cymbal, bagpipes—and inflatable, hanging objects, the artists and a musician put on a scenic-sonorous concert. The “toncert” is based on two motifs, the first Tau and the second Tau. “The first Tau addresses the tautauistic speculative principle which states that the original tone of the universe (the first Tau?) stems from the copy and replication of itself ((the second Tau?)). Thus, it is the tautauistic copy and replication of the Tau that originates the Tau. The second Tau is the attempt to discuss this phenomenon through words, in a concert made up of short songs. The ultimate aim is, therefore, to finish at the end. After the second Tau follows (((at last)) the first Tau.”') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 7.10, sábado, às 20h30 / Auditório<br><br>
                    <strong>Pedro Barateiro</strong> (Portugal)<br>
                    <em>Tristes selvagens</em>, 30’', 

                    'Saturday, Oct 7, at 8:30 p.m. / Auditorium<br><br>
                    <strong>Pedro Barateiro</strong> (Portugal)<br>
                    <em>Tristes selvagens</em>, 30’')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Um texto que desconstrói o título da performance e envolve notícias relacionadas ao momento histórico contemporâneo é a base da ação. Enquanto lê o texto, o artista projeta imagens, criando uma narrativa a partir da notícia de uma praga que afeta as palmeiras em Portugal e se alastra pelo sul da Europa. “No limite, nosso desejo é tornar o mundo maior ou menor? Por que as palmeiras são símbolo de desejo? Será por esse motivo que suas folhas estão sendo queimadas? Resta-nos ser ainda mais selvagens ou menos selvagens, mais ou menos animais? Quem são os bárbaros de hoje? Talvez os agentes da bolsa de Wall Street, que Paul Krugman considera os responsáveis pela crise econômica atual?”, diz o artista, num trecho do texto.”', 

                    'A text that deconstructs the performance’s title and involves news related to the current historical moment is the basis of the action. While reading the text, the artist screens images, creating a narrative from the news of a pest that a ects palm trees in Portugal and is spreading throughout southern Europe. “Ultimately, do we desire to make the world larger or smaller? Why are palm trees a symbol of desire? Is that why their leaves are being burned? Should we be even more savage or less savage, more or less animal? Who are the barbarians of today? Perhaps the Wall Street stockbrokers, whom Paul Krugman blames for the current economic crisis?” asks the artist in a passage from the text.”') !!}
                </div>

                <div class="textoPrincipal espaco">
                    {!!switchLang(
                    'Dia 14.1.2018, domingo, às 18h / Deck<br><br>
                    <strong>Satellite Musique</strong>', 

                    'Sunday, January 14, 2018, at 6 p.m. / Deck<br><br>
                    <strong>Satellite Musique</strong>')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('Formada por imigrantes haitianos que se conheceram em redutos da comunidade do país em São Paulo, onde vivem desde 2014, a banda Satellite Musique toca seu set de compas (ou <em>kompa</em>), estilo tradicional do Haiti com elementos de <em>zouk</em>, rumba congolesa e reggae. No 20o Festival, eles integram o projeto do <em>Museu do Estrangeiro</em>, obra de Ícaro Lira.', 

                    'Formed by Haitian immigrants who met in the community’s redoubts in São Paulo, where they have been living since 2014, the musical group Satellite Musique plays its set list of compas (or <em>kompa</em>), a traditional Haitian music style that comprises elements of <em>zouk</em>, Congolese rumba, and reggae. At the 20th Festival, they are part of Ícaro Lira’s <em>Museu do Estrangeiro</em> project.') !!}
                </div>

                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
