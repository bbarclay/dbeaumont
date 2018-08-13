/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
$(document).ready(function(){

	new UISearch( document.getElementById( 'sb-search' ) );

	$(window).load(function(){ 

		var is_frontpage = document.querySelector('.home');

		if( !is_frontpage ) {

			var is_keynoteSK = document.querySelector('.keynote-sk');

			if(is_keynoteSK) {

			 var controller = new ScrollMagic.Controller();

			 var keynoteItem = document.querySelectorAll('.keynotes .item');
			 var item_info1 = document.querySelector('.keynotes .item1 .info');
			 var item_image1 = document.querySelector('.keynotes .item1 .image');
			 var item_bgInfo1 = document.querySelector('.keynotes .item1 .bg');
			 var tw_item = '';

			  // tw_item = new TimelineLite();
 			 //  tw_item.staggerFromTo(keynoteItem, 0.8, {autoAlpha: 0}, {autoAlpha:1, onUpdate: animateTW}, 0.3)	



				 var keynote_tw = new TimelineLite();

			     keynote_tw
			        .fromTo(item_image1, 0.5, { autoAlpha: 0, x: -100 }, {autoAlpha:1, x: 0})
			        .fromTo(item_bgInfo1, 0.5, { autoAlpha: 0, x: 300 }, {autoAlpha:1, x: 0}, '-=0.2')
			     	.fromTo(item_info1, 0.5, { autoAlpha: 0, x: 100 }, {autoAlpha:1, x: 0});

		
			        new ScrollMagic.Scene({triggerElement: '.keynotes .item1', triggerHook: 0.9})
			        					.setTween(keynote_tw)
			        					.addTo(controller);


			 var item_info2 = document.querySelector('.keynotes .item2 .info');
			 var item_image2 = document.querySelector('.keynotes .item2 .image');
			 var item_bgInfo2 = document.querySelector('.keynotes .item2 .bg');


				 var keynote_tw2 = new TimelineLite();

			     keynote_tw2
			        .fromTo(item_image2, 0.5, { autoAlpha: 0, x: -100 }, {autoAlpha:1, x: 0})
			        .fromTo(item_bgInfo2, 0.5, { autoAlpha: 0, x: 300 }, {autoAlpha:1, x: 0}, '-=0.2')
			     	.fromTo(item_info2, 0.5, { autoAlpha: 0, x: 100 }, {autoAlpha:1, x: 0});

		
			        new ScrollMagic.Scene({triggerElement: '.keynotes .item2', triggerHook: 0.9})
			        					.setTween(keynote_tw2)
			        					.addTo(controller);

			 var item_info3 = document.querySelector('.keynotes .item3 .info');
			 var item_image3 = document.querySelector('.keynotes .item3 .image');
			 var item_bgInfo3 = document.querySelector('.keynotes .item3 .bg');


				 var keynote_tw3 = new TimelineLite();

			     keynote_tw3
			        .fromTo(item_image3, 0.5, { autoAlpha: 0, x: -100 }, {autoAlpha:1, x: 0})
			        .fromTo(item_bgInfo3, 0.5, { autoAlpha: 0, x: 300 }, {autoAlpha:1, x: 0}, '-=0.2')
			     	.fromTo(item_info3, 0.5, { autoAlpha: 0, x: 100 }, {autoAlpha:1, x: 0});

		
			        new ScrollMagic.Scene({triggerElement: '.keynotes .item3', triggerHook: 0.9})
			        					.setTween(keynote_tw3)
			        					.addTo(controller);


			}
			        
		};
	});

	window.onload = function() {

		var hash = location.hash;

			if( location.hash ) {

				setTimeout(function(){

					$('html, body').animate({

						scrollTop: $(hash).offset().top,

					}, 2000);

				}, 1);

			}
	};

   //SLICK SLIDER TESTIMONIALS	
	$("#testimonials .testimonial").slick({
		dots: true,
		speed: 1000,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true
	});


	$(".not-home .slick-this").slick({
		dots: false,
		speed: 1000,
		autoplay: true,
		arrows: false,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1
	});


	//TOP MENU BURGER ICON TOGGLE
	$('#burger-menu').on('click', function(){

	    $('#navbar').slideToggle('show');
	});



	//TOP MENU BURGER ICON TOGGLE
	$('#mobile-search').on('click', function(){

			$(this).toggleClass('fa-close');
	    	$('#sb-search').slideToggle('show');
	});



	//Mobile Menu toggle click
	$('#navbar > li > a').on('click', function(e) { 

		$(this).siblings('ul').slideToggle('show'); 

	});



	//Click image to  pop up
    $(".popup-this").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

});


