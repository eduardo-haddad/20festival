<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function() {

	// Route::get('/', function(){
	// 	$home = true;
	// 	return view('construcao', compact('home'));
	// });

	Route::get('/', function(){

		$todas_obras = array(
			'2199880','2199889','2199898','2200047','2200304','2201622','2202133','2202146',
			'2202160','2202176','2202242','2202312','2202325','2202339','2202352','2202369',
			'2202380','2202437','2202496','2202521','2202595','2202618','2202629','2202640',
			'2202663','2202676','2202712','2202738','2202751','2202818','2202836','2202870',
			'2202881','2202893','2202954','2202975','2203002','2203029','2203070','2203081',
			'2203122','2203178','2203227','2203251','2203553','2203558','2203563','2203577', 
			'2203583','2203597','2203604','2203609','2203631','2203676','2204470');

		$random = mt_rand(1,count($todas_obras)-1);
		$random_bg = mt_rand(1,5);
		$artista_id = DB::table('works')->where('id', $todas_obras[$random])->pluck('artist_id');
		$slug_artista = DB::table('artists')->where('id', $artista_id)->pluck('slug');

    	return view('home', compact('random', 'random_bg', 'todas_obras', 'slug_artista'));

	})->name('home');

	/* Artistas */
	Route::get('/artista/{nome}', 'ArtistsController@getWorks');

	/* Sobre */
	Route::get('/sobre', function(){
		return view('sobre.sesc');
	});
	Route::get('/sobre/sesc', function(){
		return view('sobre.sesc');
	});
	Route::get('/sobre/videobrasil', function(){
		return view('sobre.videobrasil');
	});
	Route::get('/sobre/ficha-tecnica', function(){
		return view('sobre.ficha-tecnica');
	});

	/* Imprensa */
	Route::get('/imprensa', function(){
		return view('imprensa');
	});

	/* Conceito */
	Route::get('/conceito', function(){
		return view('conceito.curadoria');
	});
	Route::get('/conceito/curadoria', function(){
		return view('conceito.curadoria');
	});
	Route::get('/conceito/eixos-conceituais', function(){
		return view('conceito.eixos-conceituais');
	});
	Route::get('/conceito/identidade-visual', function(){
		return view('conceito.identidade-visual');
	});

	/* Programação */
	Route::get('/programacao', function(){
		return view('programacao.programa-de-video');
	});
	Route::get('/programacao/exposicao', function(){
		return view('programacao.exposicao');
	});
	Route::get('/programacao/programa-de-video', function(){
		return view('programacao.programa-de-video');
	});
	Route::get('/programacao/performances', function(){
		return view('programacao.performances');
	});
	Route::get('/programacao/aulas-abertas', function(){
		return view('programacao.aulas-abertas');
	});
	Route::get('/programacao/conversas', function(){
		return view('programacao.conversas');
	});
	Route::get('/programacao/lancamentos', function(){
		return view('programacao.lancamentos');
	});
	Route::get('/programacao/agenda', function(){
		return view('programacao.agenda');
	});

	/* Prêmios */
	Route::get('/premios', function(){
		return view('premios.premios');
	});
	Route::get('/premios/juri', function(){
		return view('premios.juri');
	});
	Route::get('/premios/trofeu', function(){
		return view('premios.trofeu');
	});

	/* Publicações */
	Route::get('/publicacoes', function(){
		return view('publicacoes');
	});


	/* Downloads */
	Route::get('/download/{file}', 'Controller@getDownload');

});