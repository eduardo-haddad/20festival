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
                    <div class="subTituloPag">Premiação</div>
                    <span class="fotoDescricao">Dia 8.10, Sesc Pompeia - Teatro / fotos por Pedro Napolitano Prata</span>

                    <div class="carrossel premiacao">
                        <?php
                        $albumPath2 = '/img/fotos/premios';
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
                    <span class="fotoDescricao">Dia 3.10, Sesc Pompeia / fotos por Denise Andrade</span>

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
