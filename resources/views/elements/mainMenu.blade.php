@php
use Illuminate\Support\Facades\Route;
$route = Route::getFacadeRoot()->current()->uri();
@endphp
<ul>
	<li>
		
		@if(strpos($route, 'sobre') === 0 || strpos($route, 'en/sobre') === 0)
			{!! switchLang('Sobre', 'About') !!}
			<div class="submenu" style="display: block !important;">
				<ul>				
					<li><a href="{{url('/sobre')}}" data-pjax 
							@if($route=='sobre' || $route=='en/sobre') class="selected" @endif>
							{!! switchLang('Apresentação', 'Introduction') !!}
					</a></li>
					<li><a href="{{url('/sobre/sesc')}}" data-pjax 
							@if($route=='sobre/sesc' || $route=='en/sobre/sesc') class="selected" @endif>
							{!! switchLang('Palavra do Sesc', 'Word from Sesc') !!}
					</a></li>
					<li><a href="{{url('/sobre/videobrasil')}}" data-pjax
							@if($route=='sobre/videobrasil' || $route=='en/sobre/videobrasil') class="selected" @endif>
							{!! switchLang('Sul em Toda Parte', 'South Everywhere') !!}
					</a></li>
					<li><a href="{{url('/sobre/curadores')}}" data-pjax 
							@if($route=='sobre/curadores' || $route=='en/sobre/curadores') class="selected" @endif>
							{!! switchLang('Por uma Explicação Necessária', 'For a Necessary Explanation') !!}
					</a></li>
				</ul>
			</div>
		@else
			<a href="{{url('/sobre')}}" data-pjax>{!! switchLang('Sobre', 'About') !!}</a>
		@endif
	</li>

	{{-- <li>
		{!! switchLang('exposição', 'exhibition') !!}
	</li>

	<li>
		{!! switchLang('programa de filmes', 'film program') !!}
	</li>

	<li>
		{!! switchLang('performances', 'performances') !!}
	</li>

	<li>
		{!! switchLang('prêmios', 'awards') !!}
	</li>

	<li>
		{!! switchLang('programas públicos', 'public programs') !!}
	</li>

	<li>
		{!! switchLang('educativo', 'educational') !!}
	</li>

	<li>
		{!! switchLang('publicações', 'publications') !!}
	</li>

	<li>
		{!! switchLang('pesquisa', 'research') !!}
	</li>

	<li>
		{!! switchLang('agenda', 'schedule') !!}
	</li>

	<li>
		{!! switchLang('fotos e vídeos', 'photos and videos') !!}
	</li>

	<li>
		{!! switchLang('notícias', 'news') !!}
	</li>
--}}
	
		
		@if(strpos($route, 'programa-de-video') === 0 || strpos($route, 'en/programa-de-video') === 0)
		<li>

			{!! switchLang('Programa de vídeo', 'Video program') !!}
			
			<div class="submenu" style="display: block !important;">
				<ul>				
					<li><a href="{{url('/programa-de-video/programa1')}}" data-pjax 
							@if($route=='programa-de-video' || $route=='en/programa-de-video') class="selected" @endif>
							{!! switchLang('Programa 1', 'Program 1') !!}
					</a></li>
					<li><a href="{{url('/programa-de-video/programa2')}}" data-pjax 
							@if($route=='programa-de-video/programa2' || $route=='en/programa-de-video/programa2') class="selected" @endif>
							{!! switchLang('Programa 2', 'Program 2') !!}
					</a></li>
					<li><a href="{{url('/programa-de-video/programa3')}}" data-pjax 
							@if($route=='programa-de-video/programa3' || $route=='en/programa-de-video/programa3') class="selected" @endif>
							{!! switchLang('Programa 3', 'Program 3') !!}
					</a></li>
					<li><a href="{{url('/programa-de-video/programa4')}}" data-pjax 
							@if($route=='programa-de-video/programa4' || $route=='en/programa-de-video/programa4') class="selected" @endif>
							{!! switchLang('Programa 4', 'Program 4') !!}
					</a></li>
					<li><a href="{{url('/programa-de-video/programa5')}}" data-pjax 
							@if($route=='programa-de-video/programa5' || $route=='en/programa-de-video/programa5') class="selected" @endif>
							{!! switchLang('Programa 5', 'Program 5') !!}
					</a></li>
				</ul>
			</div>
		</li>
		@else
			<li>
				<a href="{{url('/programa-de-video')}}" data-pjax>{!! switchLang('Programa de vídeo', 'Video program') !!}</a>
			</li>
		@endif
	

	<li>
		<a @if($route=='imprensa' || $route=='en/imprensa') class="selected" @endif href="{{url('/imprensa')}}" data-pjax>{!! switchLang('Imprensa', 'Press') !!}</a>
	</li> 

</ul>