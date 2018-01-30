
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Apresentação - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Introduction - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
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
                 {!! switchLang('Apresentação', 'Introduction') !!}
                </div>

               
                <div class="texto">
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/233507757?autoplay=0&amp;title=0&amp;byline=0&amp;portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                    
                </div>

                 <!-- -->
                <div class="textoPrincipal">
                    {!! switchLang(
                        'Identidade visual e expografia do 20º Festival de Arte Contemporânea Sesc_Videobrasil',
                        'Visual identity and expography for the 20th Contemporary Art Festival Sesc_Videobrasil')
                    !!}                  
                </div>

                <div class="texto interno">
                    <style>.embed-container { 
                            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; } </style>
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/pmwhns-aoOI?controls=1&showinfo=0&modestbranding=1&rel=0' frameborder='0' allowfullscreen></iframe></div>
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
