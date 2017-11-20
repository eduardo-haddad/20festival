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

                    <!-- Tour -->
                    <div class="subTituloPag">{!! switchLang('Tour fotográfico pelo 20º Festival Sesc_Videobrasil', 
                                'Photo exhibition tour | 20th Festival Sesc_Videobrasil') !!}</div>
                    <span class="fotoDescricao"></span>
                    <a href="https://www.flickr.com/photos/videobrasil/albums/72157666310842589" target="_blank" class="underline">{!! switchLang('Veja o álbum completo', 
                                'See all photos') !!}</a><br><br>

                    <div class="carrossel premiacao">
                        <?php

                        $albumPath5 = $idioma == 'pt' ? '/img/fotos/tour_pt' : '/img/fotos/tour_en';
                        $fileList5 = scandir(public_path() . $albumPath5);
                        for($i = 1; $i < count($fileList5); $i++): 
                            $file = $fileList5[$i]; 
                            if(strpos($file, '.jpg') !== false) { ?>
                                <content style="outline: 0;">
                                    <img src="{{asset($albumPath5 . '/' . $file)}}">
                                    <p style="font-size: 0.9em;"><?php echo strstr(substr(strstr($file, '-'), 1), '.jpg', true); ?></p>
                                </content><?php
                            }
                        endfor; ?>
                    </div>

                    <!--  -->

                    <!-- Pompeia -->
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
                    <div class="subTituloPag" style="margin-top: 30px;">{!! switchLang('Premiação', 'Awards') !!}</div>
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

                    <!-- Almoço -->
                    <div class="subTituloPag">{!! switchLang('Almoço / Visita guiada', 'Lunch / Guided tour') !!}</div>
                    <span class="fotoDescricao">{!! switchLang('Almoço de confraternização com artistas e curadores do 20º Festival e visita guiada à exposição “Agora somos Todxs Negrxs”. Galpão VB, 04.10 / fotos por Pedro Napolitano Prata', 
                                'Confraternization lunch with artists and curators of the 20th Festival and guided tour of the exhibition “Agora Somos Todxs Negrxs”. Galpão VB, October 4 / photos by Pedro Napolitano Prata') !!}</span>

                    <div class="carrossel premiacao">
                        <?php

                        $albumPath4 = $idioma == 'pt' ? '/img/fotos/almoco_pt_en' : '/img/fotos/almoco_pt_en';
                        $fileList4 = scandir(public_path() . $albumPath4);
                        for($i = 1; $i < count($fileList4); $i++): 
                            $file = $fileList4[$i]; 
                            if(strpos($file, '.jpg') !== false) { ?>
                                <content style="outline: 0;">
                                    <img src="{{asset($albumPath4 . '/' . $file)}}">
                                    <p style="font-size: 0.9em;"><?php echo strstr(substr(strstr($file, '-'), 1), '.jpg', true); ?></p>
                                </content><?php
                            }
                        endfor; ?>
                    </div>

                    <!--  -->

                    <!-- Abertura -->
                    <div class="subTituloPag">{!! switchLang('Abertura', 'Opening') !!}</div>
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
