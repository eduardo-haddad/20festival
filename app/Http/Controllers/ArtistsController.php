<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArtistsController extends Controller
{

    public function getWorks($slug) {

    	//api vb obras
	    $artist_db = \App\Artist::where('slug', $slug)->get()->first();

	    if(empty($artist_db))
			return redirect()->route('home');
		else $artist_db = $artist_db->toArray();
	    
	    $works_id = DB::table('works')->where('artist_id', $artist_db['id'])->orderBy('title_pt')->pluck('id');

	    $obras = $works_id->toArray();

		// foreach($works_id as $work_id):
		// 	$ch  = curl_init('http://acervo.videobrasil.org.br/api/obras/obra/' . $work_id);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 	$result = curl_exec($ch);
		// 	$works_api[] = json_decode($result, true);
		// 	curl_close($ch);
		// endforeach;

		// if(empty($works_api))
		// 	return redirect()->route('home');


		//api vb artistas
		// $ch  = curl_init('http://acervo.videobrasil.org.br/api/artistas/artista/' . $artist_db['id']);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// $result = curl_exec($ch);
		// $artist_api = json_decode($result, true); //dd($artist_db);
		// curl_close($ch);



		/** VARIÁVEIS **/

		// Obras API
		// foreach($works_api as $work):
		//     $ano_prod_api[] = $work['data_producao'];
		//     $tipo_api_pt[] = $work['tipo_obra'];
		//     $tipo_api_en[] = $work['tipo_obra_en'];
		// endforeach;


		// Obras DB
		$works_bd = DB::table('works')->where('artist_id', $artist_db['id'])->orderBy('title_pt')->get();

		foreach($works_bd as $work):
			$obra_id[] = $work->id;
			$titulo_pt[] = $work->title_pt;
			$titulo_en[] = $work->title_en;
			$sinopse_pt[] = $work->synopsis_pt;
			$sinopse_en[] = $work->synopsis_en;
			$ficha_peq_pt[] = $work->caption_small_pt;
			$ficha_peq_en[] = $work->caption_small_en;
			$ficha_grande_pt[] = $work->caption_large_pt;
			$ficha_grande_en[] = $work->caption_large_en;
			$tipo_pt[] = $work->type_pt;
			$tipo_en[] = $work->type_en;
			$ano_prod[] = $work->year;
			$plataforma[] = $work->plataforma;
			$obs_pt[] = $work->obs_pt;
			$obs_en[] = $work->obs_en;
		endforeach;

		// -- Artistas API--
		// Bios 
		// foreach($artist_api['biografia'] as $item):
		//     if($item['idioma'] == 'pt'):
		//         $bio_pt_api = $item['biografia'];
		//     elseif($item['idioma'] == 'en'):
		//         $bio_en_api = $item['biografia'];
		//     endif;
		// endforeach;

		// -- Artistas DB--
		$nome_artista = $artist_db['name'];
		$artista_id = $artist_db['id'];
		$bio_pt = $artist_db['bio_pt'];
		$bio_en = $artist_db['bio_en'];
		$origem_artista_pt = $artist_db['origin_pt'];
		$origem_artista_en = $artist_db['origin_en'];
		$ano_nasc = $artist_db['birth'];
		$plataforma_all = $artist_db['plataforma_all'];

		//Sinopses obras (uma por artista)
		$sinopse_unica_pt = $artist_db['synopsis_pt'];
		$sinopse_unica_en = $artist_db['synopsis_en'];

		

		$plataforma = empty(array_filter($plataforma)) ? $plataforma_all : $plataforma;

		$artista_img = 'img/artistas/' . $artista_id;
		
		//view
		return view('artistas.view', 
			compact(
				'obras',
				'nome_artista',
				'artista_id',
				'artista_img',
				'ano_nasc',
				'origem_artista_pt',
				'origem_artista_en',
				'bio_pt',
				'bio_en',
				'titulo_pt',
				'titulo_en',
				'ano_prod',
				'tipo_pt',
				'tipo_en',
				'ficha_peq_pt',
				'ficha_peq_en',
				'ficha_grande_pt',
				'ficha_grande_en',
				'sinopse_pt',
				'sinopse_en',
				'sinopse_unica_pt',
				'sinopse_unica_en',
				'plataforma',
				'obra_id',
				'obs_pt',
				'obs_en'
			)
		);

    }

}
