<div id="popArtista">
    <div class="inner">

        <nav id="header" class="borderbox">
            <div class="container artista">
                <div id="brand" class="pop">
                    <a href="{{url('/home')}}" data-pjax>{!! switchLang(
                    	'20º Festival de Arte Contemporânea<br>Sesc_Videobrasil',
                    	'20<sup>th</sup> Contemporary Art Festival<br>Sesc_Videobrasil') !!}</a>
                </div>
                <div class="close">
                    <a href="{{url('/home')}}" data-pjax>
                        {{ Html::image('img/closepop.png') }}
                    </a>
                </div>
            </div>
        </nav>

        <main class="borderbox">

        

        	<div class="nomeArtista">

        		<p>{{ $nome_artista }}</p>
        		<span>{!! switchLang($origem_artista_pt, $origem_artista_en)!!}@if(!empty($ano_nasc)), {!! $ano_nasc !!}@endif
        		</span>

        	</div>

	        		<div class="bioArtista">

		        		@if(\File::exists($artista_img.'.jpg'))
		        			<div class="imagemArtista">
		        				<img src="{{ asset($artista_img.'.jpg') }}">
		        			</div>
		        		@elseif(\File::exists($artista_img.'.png'))
		        			<div class="imagemArtista">
		        				<img src="{{ asset($artista_img.'.png') }}">
		        			</div>
		        		@endif

		        		{!! switchLang($bio_pt, $bio_en) !!}
		        	
		        	</div>

		        	<div class="clear mv small"></div>

	        		
		        	<div class="wrapperTituloSinopse">

		        	@if(!empty($sinopse_unica_pt))

        				@for($i = 0; $i < count($obras); $i++)

			        		<div class="innerTituloSinopse">

		        				<div class="tituloObra">
				        		{!! switchLang($titulo_pt[$i], $titulo_en[$i]) !!}
					        	</div>

					        	<div class="fichaPeqObra">
				        			@if(!empty($obs_pt[$i]))
						        		{!! ucfirst(switchLang($obs_pt[$i], $obs_en[$i])) !!}, 
						        	@endif
					        		{!! $ano_prod[$i] !!}, {!! strtolower(switchLang($tipo_pt[$i], $tipo_en[$i])) !!}, {!! lcfirst(switchLang($ficha_peq_pt[$i], $ficha_peq_en[$i])) !!}

				        		@if(!empty($ficha_grande_pt[$i]))

				        			<!-- / fichaPeqObra --> </div>
				        			<div class="arrow closed"></div>
					        		<div class="fichaGrandeObra">
					        			{!! switchLang($titulo_pt[$i], $titulo_en[$i]) !!}, 
					        			@if(!empty($obs_pt[$i]))
							        		{!! lcfirst(switchLang($obs_pt[$i], $obs_en[$i])) !!}, 
							        	@endif
					        			{!! $ano_prod[$i] !!}<br>{!! switchLang($tipo_pt[$i], $tipo_en[$i]) !!}<br>{!! switchLang($ficha_grande_pt[$i], $ficha_grande_en[$i]) !!}
					        		</div>

								@else </div> <!-- / fichaPeqObra -->

								@endif

					        	<div class="imagemObra">

					        		@if(\File::exists('img/obras/'.$obra_id[$i].'.jpg'))
					        			<img src="{{ asset('img/obras/'.$obra_id[$i].'.jpg') }}">
					        		
					        		@elseif(\File::exists('img/obras/'.$obra_id[$i].'.png'))
					        			<img src="{{ asset('img/obras/'.$obra_id[$i].'.png') }}">
					        		@endif

					        	</div>

					{{-- </div> --}}

					    @endfor

					    <div class="sinopseUnica">
						    {!! switchLang($sinopse_unica_pt, $sinopse_unica_en) !!}	
						</div>


					@else

			        	@for($i = 0; $i < count($obras); $i++)

			        		<div class="innerTituloSinopse">

		        				<div class="tituloObra">
				        		{!! switchLang($titulo_pt[$i], $titulo_en[$i]) !!}
					        	</div>

					        	<div class="fichaPeqObra">
						        	@if(!empty($obs_pt[$i]))
						        		{!! ucfirst(switchLang($obs_pt[$i], $obs_en[$i])) !!}, 
						        	@endif
					        		{!! $ano_prod[$i] !!}, {!! strtolower(switchLang($tipo_pt[$i], $tipo_en[$i])) !!}, {!! lcfirst(switchLang($ficha_peq_pt[$i], $ficha_peq_en[$i])) !!}
				        		</div>

				        		<div class="imagemObra">
					        		@if(\File::exists('img/obras/'.$obra_id[$i].'.jpg'))
					        			<img src="{{ asset('img/obras/'.$obra_id[$i].'.jpg') }}">
					        		
					        		@elseif(\File::exists('img/obras/'.$obra_id[$i].'.png'))
					        			<img src="{{ asset('img/obras/'.$obra_id[$i].'.png') }}">
					        		@endif
					        	</div>

					        	<div class="sinopseObra">
					        		{!! switchLang($sinopse_pt[$i], $sinopse_en[$i]) !!}
					        	</div>

				        		@if(!empty($ficha_grande_pt))
					        		<div class="fichaGrandeObra">
					        			{!! switchLang($titulo_pt[$i], $titulo_en[$i]) !!}, 
					        			@if(!empty($obs_pt[$i]))
							        		{!! lcfirst(switchLang($obs_pt[$i], $obs_en[$i])) !!}, 
							        	@endif
					        			{!! $ano_prod[$i] !!}<br>{!! switchLang($tipo_pt[$i], $tipo_en[$i]) !!}<br>{!! switchLang($ficha_grande_pt[$i], $ficha_grande_en[$i]) !!}
					        		</div>
					        	@endif

					        	

					        </div>

					    @endfor   

					@endif

						@if(!empty($plataforma))
						<a class="plataforma" href="{!! $plataforma !!}" target="_blank">
							<p>{!! switchLang('Plataforma:VB', 'Platform:VB') !!}</p>
							<span>{!! switchLang('Saiba mais sobre o processo de elaboração desta obra, com links e referências, na plataforma de pesquisa online do Videobrasil', 
							'Learn more about this work\'s creative process, including links and references, in Videobrasil\'s online art research tool') !!}</span>
						</a>
						@endif

					</div>

				</div>  

		        	
            
        </main>
        

    </div>

</div>