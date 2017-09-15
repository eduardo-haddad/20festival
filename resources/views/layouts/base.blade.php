<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}">
    <script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('jquery.pjax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/nprogress.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script type="text/javascript">

        $(function(){
    	   // pjax
    	   $(document).pjax('a[data-pjax]', '.pjaxTarget')
        });

        $(document).ready(function(){
            // does current browser support PJAX
            if ($.support.pjax) {
                $.pjax.defaults.timeout = 3500; // time in milliseconds
                // $.pjax.defaults.maxCacheLength = 0;
            }     
        });
        /** Loading **/
        $document.on('pjax:send', function() {
            NProgress.start();
        });

        $document.on('pjax:complete', function() {
            NProgress.done();
        });

    </script>
  </head>


  <body @if(!empty($home)) class="homeTemp" @endif>
    <div id="conteudoHome" class="pjaxTarget">
        @yield('body')
    </div>
    <div id="loading"></div>
    
  </body>
</html>
