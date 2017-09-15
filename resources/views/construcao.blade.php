
@extends('layouts.base')

@section('title')
{!! switchLang(
    'Apresentação - 20º Festival de Arte Contemporânea Sesc_Videobrasil',
    'Introduction - 20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno" style="background: none">
        

        <div class="container interno" style="text-align: center; margin: 100px auto 40px auto">

            <img src="{{asset('img/construcao.jpg')}}">

            

            {{-- <div class="tituloTexto">

            </div> --}}
    


        </div>


    </div>
    

@stop
