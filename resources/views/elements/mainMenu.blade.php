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

	<li>
		{!! switchLang('imprensa', 'press') !!}
	</li> --}}

</ul>