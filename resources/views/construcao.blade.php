
@extends('layouts.base')

@section('title')
{!! switchLang(
    '20º Festival de Arte Contemporânea Sesc_Videobrasil',
    '20th Contemporary Art Festival Sesc_Videobrasil') !!}
@stop


@section('body')
    <div class="wrapper_geral interno" style="background: none">
        

        <div class="container interno" style="text-align: center; margin: 120px auto 40px auto; width: 100%; max-width: 800px;">

            <img src="{{asset('img/construcao.jpg')}}" style="width: 100%;">

            

            {{-- <div class="tituloTexto">

            </div> --}}
    


        </div>


    </div>
    

@stop
