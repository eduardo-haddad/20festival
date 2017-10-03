
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Lançamentos - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Launch - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Lançamentos', 'Launch') !!}
                </div>

                <div class="textoPrincipal">
                    {!!switchLang(
                    'Dia 7.10, sábado, às 17h / Deck<br><br>
                    <strong>COINCIDÊNCIA – Programa Pro Helvetia para a América do Sul</strong>', 

                    'Saturday, Oct 7, at 5:00 p.m / Deck<br><br>
                    <strong>COINCIDÊNCIA – Pro Helvetia Program for South America</strong>')!!}
                </div>
                
                <div class="texto interno">
                    {!! switchLang('A fundação suíça para a cultura Pro Helvetia anuncia o início de COINCIDÊNCIA, programa trienal de intercâmbios culturais entre a Suíça e os países da América do Sul. Neste encontro, serão apresentados os eixos de trabalho, os possíveis formatos e os objetivos do programa. O novo prêmio de residência Pro Helvetia — Programa América do Sul, oferecido em parceria com o 20º Festival de Arte Contemporânea Sesc_Videobrasil a um artista baseado na América do Sul, já é parte do programa.', 

                    'The Swiss cultural foundation Pro Helvetia announces the beginning of COINCIDÊNCIA, a triennial cultural exchange program between Switzerland and South American countries. The program’s main work themes, possible formats, and objectives will be introduced at the launch. The new Pro Helvetia | South America Program residency award, offered in partnership with the 20th Contemporary Art Festival Sesc_Videobrasil to an artist based in South America, is already part of this program.') !!}
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
