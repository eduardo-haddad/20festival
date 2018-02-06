
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Vídeos - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Videos - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop

@php
$videoParams = '?controls=1&showinfo=0&modestbranding=1&rel=0';
@endphp

@section('body')

    <style>
        .embed-container { 
            position: relative; 
            padding-bottom: 56.25%; 
            height: 0; 
            overflow: hidden; 
            max-width: 100%; 
        } 
        .embed-container iframe, 
        .embed-container object, 
        .embed-container embed { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
        }
    </style>

    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno" style="height: 500px;">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>           

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Vídeos', 'Videos') !!}
                </div>

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Bárbara Wagner e Benjamin de Burca (Brasil / Alemanha) - Prêmio de Aquisição Acervo Sesc de Arte',
                        'Bárbara Wagner & Benjamin de Burca (Brazil / Germany) - Sesc Art Collection Acquisition Award')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/OQKYZf_KCS8<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Filipa César (Portugal / Alemanha) - Prêmio de Aquisição Acervo Sesc de Arte',
                        'Filipa César (Portugal / Germany) - Sesc Art Collection Acquisition Award')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/9S4Hmi20IFg<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Quy Minh Truong (Vietnã) - Prêmio de Aquisição Acervo Sesc de Arte',
                        'Quy Minh Truong (Vietnam) - Sesc Art Collection Acquisition Award')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/RcBujcIw5PI<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Jaime Lauriano (Brasil) - Prêmio O.F.F. - Ostrovsky Family Fund',
                        'Jaime Lauriano (Brazil) - O.F.F. – Ostrovsky Family Fund Award')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/VSrrdXqTOlU<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Graziela Kunsch (Brasil): Ujazdowski Castle Centre for Contemporary Art (Polônia)',
                        'Graziela Kunsch (Brazil): Ujazdowski Castle Centre for Contemporary Art (Poland)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/a6iakWcnmkg<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Engel Leonardo (República Dominicana), Prêmio de Residência: Kyoto Art Center (Japão)',
                        'Engel Leonardo (Dominican Republic), Kyoto Art Center Residency Prize (Japan)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/AmHiVRtkLKg<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'La Decanatura (Colômbia), Prêmio de Residência: Pro Helvetia (Suíça)',
                        'La Decanatura (Colombia), Pro Helvetia Residency Prize (Switzerland)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/9SOXIhnVr3M<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Emo de Medeiros (França / Benim), Prêmio de Residência: Vila Sul do Goethe-Institut (Brasil)',
                        'Emo de Medeiros (France / Benin), Goethe-Institut Residency Prize: Vila Sul Residency (Brazil)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/Qw4RCrq9kUo<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Natasha Mendonca (Índia), Prêmio de Residência: Wexner Center for the Arts (EUA)',
                        'Natasha Mendonca (India), Wexner Center for the Arts Residency Prize (USA)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/nHrpqnk4X58<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Andrés Padilla Domene (México / França), Menção Honrosa',
                        'Andrés Padilla Domene (Mexico / France), Honorable Mention')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/i4MRwD0hY30<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Alia Farid (Kuwait)',
                        'Alia Farid (Kuwait)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/8AHgyCRkpKY<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Ana Elisa Egreja (Brasil)',
                        'Ana Elisa Egreja (Brazil)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/MZvE6tRYq8c<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Ana Mazzei (Brasil)',
                        'Ana Mazzei (Brazil)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/4ZtNvauyGYQ<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Ana Vaz (Brasil)',
                        'Ana Vaz (Brazil)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/gU8ZmB8-M0E<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Cristiano Lenhardt (Brasil)',
                        'Cristiano Lenhardt (Brazil)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/IWHQvZCZLqo<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Daniel Monroy Cuevas (México)',
                        'Daniel Monroy Cuevas (Mexico)')
                    !!}                  
                </div>


                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/bAdIehZ_YQY<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Débora Mazloum (Brasil)',
                        'Débora Mazloum (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/UZVZAnEw9x4<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Elizabeth Vásquez Arbulú (Peru)',
                        'Elizabeth Vásquez Arbulú (Peru)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/Wp72ECT8_no<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Elvis Almeida (Brasil)',
                        'Elvis Almeida (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/DXWUpuN7qhs<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Felipe Esparza Pérez (Peru)',
                        'Felipe Esparza Pérez (Peru)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/JDgbplM0zhE<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

               

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Hellen Ascoli (Guatemala)',
                        'Hellen Ascoli (Guatemala)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/Fmzw9W23j3I<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Ícaro Lira (Brasil)',
                        'Ícaro Lira (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/0xn2tk8QkWM<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Jiwon Choi (Coreia do Sul / Estados Unidos)',
                        'Jiwon Choi (South Korea / USA)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/w6v-UStn18w<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Karo Akpokiere (Nigéria)',
                        'Karo Akpokiere (Nigeria)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/8IN6n9v-EJ0<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Köken Ergun (Turquia)',
                        'Köken Ergun (Turkey)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/Q2ZQshjKDKM<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Louise Botkay (Brasil)',
                        'Louise Botkay (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/Cjq9lfAtUAE<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Manuela De Laborde (México)',
                        'Manuela De Laborde (Mexico)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/XFYCs58fcr0<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Mariana Portela Echeverri (Portugal / Reino Unido)',
                        'Mariana Portela Echeverri (Portugal / UK)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/JXhghHLhZuo<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Mariana Rodríguez (Argentina / México)',
                        'Mariana Rodríguez (Argentina / Mexico)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/JEUbtbs6D7Y<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Kavich Neang (Camboja)',
                        'Kavich Neang (Cambodia)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/yGeuZlI94qM<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Miguel Penha (Brasil)',
                        'Miguel Penha (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/bTgr4Y5tT3A<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Mona Vatamanu & Florin Tudor (Romênia)',
                        'Mona Vatamanu & Florin Tudor (Romania)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/m6RQYYAAu-I<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Pakui Hardware (Lituânia)',
                        'Pakui Hardware (Lithuania)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/nYal2MjjEds<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Pedro Barateiro (Portugal)',
                        'Pedro Barateiro (Portugal)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/C8iVAmU0ktA<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->

                <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Rafael Pagatini (Brasil)',
                        'Rafael Pagatini (Brazil)')
                    !!}                  
                </div>

                <div class="texto interno">
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/OrtXNs23f5o<?php echo $videoParams; ?>' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <!-- -->


               
                

                
                
                

                

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
