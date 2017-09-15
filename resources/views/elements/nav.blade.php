<nav id="header" class="borderbox">
  <div class="container">

    <div id="brand" class="pop">
        {{-- <a href="{{ Request::root() }}" data-pjax>{!! switchLang( --}}
        <a href="{{ url('/home') }}" data-pjax>{!! switchLang(
            '20º Festival de Arte Contemporânea<br>Sesc_Videobrasil',
            '20<sup>th</sup> Contemporary Art Festival<br>Sesc_Videobrasil') !!}</a>
    </div>

    @php   
        $lang = Session::get('locale');
        $path =  Request::path();
        $subpath = substr($path, 0, 2);
        if($subpath == 'pt' || $subpath == 'en')
            $path = substr($path, 3);
        $pt_path = Request::root() . '/pt/' . $path;
        $en_path = Request::root() . '/en/' . $path;
    @endphp

    
    <div id="datalang">
        <div id="datas">
            {!! switchLang(
            '03.10.2017 – 14.01.2018<br>
             SESC POMPEIA&nbsp;&nbsp;&nbsp;SÃO PAULO&nbsp;&nbsp;&nbsp;BRASIL',
            '2017.10.03 – 2018.01.14<br>
             SESC POMPEIA&nbsp;&nbsp;&nbsp;SÃO PAULO&nbsp;&nbsp;&nbsp;BRAZIL') !!}
        </div>

        <div id="lang">
        <a href="{!! $pt_path !!}" @if($lang != 'en') class="selected" @endif>PT</a>&nbsp;&nbsp;&nbsp;<a href="{!! $en_path !!}" @if($lang == 'en') class="selected" @endif>EN</a>
        </div>
    </div>
   

    

      {{-- <ul class="nav">
        <li id="home"><a class="pjax" href="{{url('/')}}">Home</a></li>
        <li id="about"><a class="pjax" href="{{url('/about')}}">About</a></li>
        <li id="contact"><a class="pjax2" href="{{url('/contact')}}">Contact</a></li>
      </ul> --}}
  </div>
</nav>
