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


	/* Top menu */
	$('#header .openButton img').click(function(){
		$('.topMenu').show();
	});

	$('.topMenu .closeButton img').click(function(){
		$('.topMenu').hide();
	});

	var screenSize = 1024;

	$(window).on('resize', function(){
		if($(window).width() >= screenSize){
			$('.topMenu').hide();
		}	
	});

	$('.carrossel').css('height', $('.carrossel img').height());


	$(window).on('resize', function(){
		$('.carrossel').css('height', $('.carrossel img').height());
		
	});


	 /* Carrossel - Slick */
            $('.carrossel').slick({
	            lazyLoad: 'ondemand',
	            // appendDots: $('.carrossel .fotosNum'),
	            dots: false,
	            centerMode: true,
	            infinite: true,
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            speed: 0,
	            fade: true,
	            swipe: false,
	            arrows: true,
	            // responsive: [
	            //     {
	            //       breakpoint: 1023,
	            //       settings: {
	            //         slidesToShow: 1,
	            //         slidesToScroll: 1,
	            //         infinite: true,
	            //         dots: true
	            //       }
	            //     },
	            //     ]
	            // customPaging : function(slider, i) {
	            // 	i++;
	            //     return '<a>'+i+'</a>';
	            // }
            });

            $('.slick-track img').on(
                'click', function(){
                    $('.carrossel').slick('slickNext');
                    
                }
            );




});

