@php
$route = Route::getFacadeRoot()->current()->uri();
@endphp

<ul>
	<li>
		
		@if(strpos($route, 'sobre') === 0 || strpos($route, 'en/sobre') === 0)
			{!! switchLang('Sobre', 'About') !!}
			<div class="submenu" style="display: block !important;">
				<ul>				
					<li><a href="{{url('/sobre/sesc')}}" data-pjax 
							@if($route=='sobre/sesc' || $route=='en/sobre/sesc' || $route=='sobre' || $route=='en/sobre') class="selected" @endif>
							{!! switchLang('Palavra do Sesc', 'Word from Sesc') !!}
					</a></li>
					<li><a href="{{url('/sobre/videobrasil')}}" data-pjax
							@if($route=='sobre/videobrasil' || $route=='en/sobre/videobrasil') class="selected" @endif>
							{!! switchLang('Videobrasil', 'Videobrasil') !!}
					</a></li>
					<li><a href="{{url('/sobre/ficha-tecnica')}}" data-pjax
							@if($route=='sobre/ficha-tecnica' || $route=='en/sobre/ficha-tecnica') class="selected" @endif>
							{!! switchLang('Ficha técnica', 'Staff') !!}
					</a></li>
					<li><a href="http://site.videobrasil.org.br/festival/festivais" target="_blank">
							{!! switchLang('Edições anteriores', 'Past editions') !!}
					</a></li>
				</ul>
			</div>
		@else
			<a href="{{url('/sobre')}}" data-pjax>{!! switchLang('Sobre', 'About') !!}</a>
		@endif
	</li>

	@if(strpos($route, 'programacao') === 0 || strpos($route, 'en/programacao') === 0)
	<li>

		{!! switchLang('Programação', 'Program') !!}
		
		<div class="submenu" style="display: block !important;">
			<ul>	
				{{-- <li><a href="{{url('/programacao/exposicao')}}" data-pjax 
						@if($route=='exposicao' || $route=='en/exposicao') class="selected" @endif>
						{!! switchLang('Exposição', 'Exhibition') !!}
				</a></li> --}}			
				<li><a href="{{url('/programacao/programa-de-video')}}" data-pjax 
						@if($route=='programacao/programa-de-video' || $route=='en/programacao/programa-de-video' || $route=='programacao' || $route=='en/programacao') class="selected" @endif>
						{!! switchLang('Programa de vídeo', 'Video program') !!}
				</a></li>
				<li><a href="{{url('/programacao/performances')}}" data-pjax 
						@if($route=='programacao/performances' || $route=='en/programacao/performances') class="selected" @endif>
						{!! switchLang('Performances', 'Performances') !!}
				</a></li>
				<li><a href="{{url('/programacao/aulas-abertas')}}" data-pjax 
						@if($route=='programacao/aulas-abertas' || $route=='en/programacao/aulas-abertas') class="selected" @endif>
						{!! switchLang('Aulas abertas', 'Open lectures') !!}
				</a></li>
				<li><a href="{{url('/programacao/conversas')}}" data-pjax 
						@if($route=='programacao/conversas' || $route=='en/programacao/conversas') class="selected" @endif>
						{!! switchLang('Conversas', 'Talks') !!}
				</a></li>
				<li><a href="{{url('/programacao/lancamentos')}}" data-pjax 
						@if($route=='programacao/lancamentos' || $route=='en/programacao/lancamentos') class="selected" @endif>
						{!! switchLang('Lançamentos', 'Launch') !!}
				</a></li>
				{{-- <li><a href="{{url('/programacao/agenda')}}" data-pjax 
						@if($route=='programacao/agenda' || $route=='en/programacao/agenda') class="selected" @endif>
						{!! switchLang('Agenda', '') !!}
				</a></li> --}}
			</ul>
		</div>

	</li>
	@else
	<li>
		<a href="{{url('/programacao')}}" data-pjax>{!! switchLang('Programação', 'Program') !!}</a>
	</li>
	@endif
	

	<li>
		<a @if($route=='imprensa' || $route=='en/imprensa') class="selected" @endif href="{{url('/imprensa')}}" data-pjax>{!! switchLang('Imprensa', 'Press') !!}</a>
	</li> 

</ul>