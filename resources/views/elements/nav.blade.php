@php   
    $lang = Session::get('locale');
    $path =  Request::path();
    $subpath = substr($path, 0, 2);
    if($subpath == 'pt' || $subpath == 'en')
        $path = substr($path, 3);
    $pt_path = Request::root() . '/pt/' . $path;
    $en_path = Request::root() . '/en/' . $path;
@endphp

<nav id="header" class="borderbox">

  <div class="container">

    <div id="brand" class="pop">
        {{-- <a href="{{ Request::root() }}" data-pjax>{!! switchLang( --}}
        <a href="{{ url('/') }}" data-pjax>{!! switchLang(
            '20º Festival de Arte Contemporânea<br>Sesc_Videobrasil',
            '20<sup>th</sup> Contemporary Art Festival<br>Sesc_Videobrasil') !!}</a>
    </div>

    <div class="clear mv"></div>

    <div id="datalang">
        <div id="datas">
            {!! switchLang(
            '03.10.2017 – 14.01.2018<br>
             SESC POMPEIA&nbsp;&nbsp;&nbsp;<br class="mv small" />SÃO PAULO&nbsp;&nbsp;&nbsp;BRASIL',
            '2017.10.03 – 2018.01.14<br>
             SESC POMPEIA&nbsp;&nbsp;&nbsp;<br class="mv small" />SÃO PAULO&nbsp;&nbsp;&nbsp;BRAZIL') !!}
        </div>

        <div class="clear mv"></div>

        <div id="lang">
            <a href="{!! $pt_path !!}" @if($lang != 'en') class="selected" @endif>PT</a>&nbsp;&nbsp;&nbsp;<a href="{!! $en_path !!}" @if($lang == 'en') class="selected" @endif>EN</a>
        </div>
    </div>

    <div class="openButton mv">
        <img src="{{ asset('img/top_menu_open.png') }}">
    </div>
   
    <div class="topMenu">

        <section>

            <div class="closeButton">
                <img src="{{ asset('img/top_menu_close.png') }}">
            </div>

            <div id="mainMenu" class="top">
                @include('elements.mainMenu')
            </div>

        </section>
        
    </div>
    
  </div>
</nav>
