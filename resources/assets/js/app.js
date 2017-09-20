$document = $(document);
$artistaLink = $('#listaArtistas li a');
$conteudoHome = $('#conteudoHome');
$closeButton = $('#popArtista nav .close img');
$conteudoArtista = $('#conteudoArtista');


$document.ready(function(){});


$document.on('ready pjax:success', function() {

	// if(window.location.href.indexOf("artista") === -1) {
 //       $('#conteudoArtista').hide();
 //    }



	 //    $artistaLink.click(function(){
		// 	$conteudoHome.hide();
		// 	$('#conteudoArtista').show();
			
		// });

		// $closeButton.click(function(){
		// 	$('#conteudoArtista').hide();
		// 	$conteudoHome.show();
		// });

	$('.arrow').click(function(){

		if($(this).hasClass('closed')) {

			$(this).removeClass('closed').addClass('open');
			$(this).parent().find('.fichaGrandeObra').show(0);
			
		} else {

			$(this).removeClass('open').addClass('closed');
			$(this).parent().find('.fichaGrandeObra').hide(0);
		}

		
	});


	/* image map responsivo */
	$('map').imageMapResize();


});

