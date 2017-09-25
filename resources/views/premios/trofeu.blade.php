
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Troféu - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Trophy - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Troféu', 'Trophy') !!}
                </div>

               
                

                <div class="texto interno">

                    <div class="imgSobre" class="dv">
                            {!! Html::image('img/trofeu.jpg') !!}<br />
                            <div style="display: inline;font-size: 0.75em;margin-top: 5px;">
                            {!! switchLang('Flavia Ribeiro (Brasil), <em>Sem título</em>, 2017, bronze banhado a ouro e veludo, 4,5 x 8 x 10,5 cm', 'Flavia Ribeiro (Brazil), <em>Sem título</em>, 2017, gold-plated bronze and velvet, 4.5 x 8 x 10.5 cm') !!}
                                </div>
                    </div>

                    {!! switchLang('
                   
                    <p>Reflexões sobre os gestos envolvidos no ato de oferecer ou receber um prêmio, além de um pássaro de pedra encontrado em um cemitério londrino, serviram de base à criação do troféu do 20º Festival de Arte Contemporânea Sesc_Videobrasil. Afastando-se deliberadamente do tom de grandiosidade que marca objetos dessa categoria, a artista Flavia Ribeiro concebeu um pássaro de bronze que cabe na palma da mão, remetendo simultaneamente a ideias de delicadeza e liberdade, voo e acolhimento. As dimensões reduzidas, o ouro e o veludo produzem a sensação de um gesto pequeno e sutilmente precioso, que a artista relaciona à generosidade presente tanto na criação artística quanto no olhar que acolhe, distingue e premia.</p>

                    <p style="font-size: 1.8em">Sobre a artista</p>

                    <p><strong>Flavia Ribeiro</strong> (Brasil)</p>
                    <p>É artista. Trabalha e expõe desde os anos 1980. Sua formação e prática passam por campos como fotografia e cenografia. Com base no desenho, sua produção transita pela gravura e a escultura em obras que escapam a definições de gênero. As formas orgânicas e as referências ao próprio processo são recorrentes em seu trabalho, presente em acervos como a Pinacoteca do Estado de São Paulo, o Museu de Arte Moderna do Rio de Janeiro e o Centro de Arte Contemporânea Inhotim, Minas Gerais.</p>

                

                    ', 



                '<p>Reflections on the gestures involved in offering or receiving an award, plus a stone bird found in a London cemetery, were the building blocks for the creation of the 20th Contemporary Art Festival Sesc_Videobrasil trophy. Deliberately avoiding the grandiose tone commonly imparted to objects in this category, the artist Flavia Ribeiro has conceived a palm-sized bronze bird which simultaneously evokes ideas of delicacy and freedom, flight and welcome. The reduced dimensions, the gold and the velvet convey the feeling of a small and subtly precious gesture, which the artist relates to the generosity present in both the artwork and the gaze that welcomes, distinguishes, and rewards.</p>

                    <p style="font-size: 1.8em">About the artist</p>

                    <p><strong>Flavia Ribeiro</strong> (Brazil) is an artist. She has been working and exhibiting since the 1980s. Her educational background and practical experience include areas such as photography and set design. Underpinned by drawing, her production traverses engraving and sculpture in works that defy genre definitions. Organic forms and references to the actual process are recurrent in her work, present in the collections of venues such as the Pinacoteca do Estado de São Paulo, the Museu de Arte Moderna do Rio de Janeiro and the Centro de Arte Contemporânea Inhotim, Minas Gerais.</p>') !!}

                </div>
                
                

                

            </div>
    
        </div>

        <footer id="rodape" class="borderbox">
            @include('elements.rodape')
        </footer>
    </div>
    

@stop
