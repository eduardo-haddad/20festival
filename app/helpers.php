<?php 

   function switchLang($conteudo_pt, $conteudo_en) {

   		$idioma = Config::get('app.locale');

		if($idioma == 'pt') return $conteudo_pt;

		elseif ($idioma == 'en') {

			if(empty($conteudo_en)) 
				return $conteudo_pt;

			else return $conteudo_en;

		}

   }


