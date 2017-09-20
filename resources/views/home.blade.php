
@extends('layouts.base')

@section('title')
{!! switchLang(
    '20º Festival de Arte Contemporânea Sesc_Videobrasil',
    '20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop

@php
    //dd($link_artista[0]);
@endphp

@section('body')

    <div class="wrapper_geral home inicio{{$random_bg}}">

        @include('elements.nav')
    
        <div class="container home">
    
            <div id="imgArtista">
                <a href="{{url('/artista/' . $slug_artista[0])}}"><img src="{{ asset('img/obras/'.$todas_obras[$random].'.jpg') }}"></a>
            </div>

            <div class="clear mv"></div>
    
            <div id="mainMenu">
                @include('elements.mainMenu')
            </div>
    
            <div id="listaArtistas" class=" borderbox">
                @include('elements.listaArtistas')
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
