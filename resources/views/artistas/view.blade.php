@section('title')
{!! switchLang(
    $nome_artista . ' - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    $nome_artista . ' - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop

@extends('layouts.base')

@section('body')
    @include('elements.popArtista')
@stop




