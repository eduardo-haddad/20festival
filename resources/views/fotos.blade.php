<?php $idioma = Config::get('app.locale'); ?>

@extends('layouts.base')

@section('title')
{!! switchLang(
    'Fotos - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Photos - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')

    <script type="text/javascript">
        $(document).on('ready pjax:success', function(){

           

        });
    </script>

    <div class="wrapper_geral interno">
        @include('elements.nav')

        <div class="container interno">

            <div id="mainMenu" class="dv">
                @include('elements.mainMenu')
            </div>

            <div class="tituloTexto">

                <div class="tituloPag">
                 {!! switchLang('Fotos', 
                                'Photos') !!}
                </div>
                
                <div class="texto fotos">

                    <!-- Premiação -->
                    <div class="subTituloPag">Performances</div>
                    <span class="fotoDescricao">{!! switchLang('Sesc Pompeia / fotos por Everton Ballardin', 
                                'Sesc Pompeia / photos by Everton Ballardin') !!}</span>

                    <div class="carrossel premiacao">
                        <?php

                        $albumPath3 = $idioma == 'pt' ? '/img/fotos/performances_pt' : '/img/fotos/performances_en';
                        $fileList3 = scandir(public_path() . $albumPath3);
                        for($i = 1; $i < count($fileList3); $i++): 
                            $file = $fileList3[$i]; 
                            if(strpos($file, '.jpg') !== false) { ?>
                                <content style="outline: 0;">
                                    <img src="{{asset($albumPath3 . '/' . $file)}}">
                                    <p style="font-size: 0.9em;"><?php echo strstr(substr(strstr($file, '-'), 1), '.jpg', true); ?></p>
                                </content><?php
                            }
                        endfor; ?>
                    </div>

                    <!--  -->

                    <!-- Premiação -->
                    <div class="subTituloPag" style="margin-top: 30px;">Premiação</div>
                    <span class="fotoDescricao">{!! switchLang('Dia 8.10, Sesc Pompeia - Teatro / fotos por Pedro Napolitano Prata', 
                                'October 8, Sesc Pompeia Theatre, photos by Pedro Napolitano Prata') !!}</span>

                    <div class="carrossel premiacao">
                        <?php

                        $albumPath2 = $idioma == 'pt' ? '/img/fotos/premios' : '/img/fotos/premios_en';
                        $fileList2 = scandir(public_path() . $albumPath2);
                        for($i = 1; $i < count($fileList2); $i++): 
                            $file = $fileList2[$i]; 
                            if(strpos($file, '.jpg') !== false) { ?>
                                <content style="outline: 0;">
                                    <img src="{{asset($albumPath2 . '/' . $file)}}">
                                    <p style="font-size: 0.9em;"><?php echo strstr(substr(strstr($file, '-'), 1), '.jpg', true); ?></p>
                                </content><?php
                            }
                        endfor; ?>
                    </div>

                    <!--  -->

                    <!-- Abertura -->
                    <div class="subTituloPag">Abertura</div>
                    <span class="fotoDescricao" style="margin-bottom: 0">{!! switchLang('Dia 3.10, Sesc Pompeia / fotos por Denise Andrade', 
                                'October 3, Sesc Pompeia, photos by Denise Andrade') !!}</span><br>
                    <a href="https://www.flickr.com/photos/videobrasil/sets/72157687578604801" target="_blank" class="underline">{!! switchLang('Veja o álbum completo', 
                                'See all photos') !!}</a><br><br>

                    <div class="carrossel abertura">
                        <?php
                        $albumPath = '/img/fotos/abertura';
                        $fileList = scandir(public_path() . $albumPath);
                        for($i = 1; $i < count($fileList); $i++): 
                            $file = $fileList[$i]; 
                            if(strpos($file, '.jpg') !== false) { ?>
                                <content style="outline: 0;">
                                    <img src="{{asset($albumPath . '/' . $file)}}">
                                    <p style="font-size: 0.9em;"><?php echo strstr(substr(strstr($file, '-'), 1), '.jpg', true); ?></p>
                                </content><?php
                            }
                        endfor; ?>
                    </div>

                    <!--  -->

                    
                        
                    

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
