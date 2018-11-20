/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
$(document).ready(function(){

	new UISearch( document.getElementById( 'sb-search' ) );
	var is_frontpage = document.querySelector('.home');
	var is_homepage_template = document.querySelector('.page-template-template-frontpage');

	$(window).load(function(){ 

		

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

		function frontpage() {

			if( is_frontpage || is_homepage_template ) {

				var controller = new ScrollMagic.Controller();
				var controller2 = new ScrollMagic.Controller();
				var controller3 = new ScrollMagic.Controller();
				var controller4 = new ScrollMagic.Controller();


				//typical import
				var hero_tl = new TimelineLite(),
					hero_top = document.querySelector('#hero .top'), 
					hero_caps = document.querySelector('#hero .caps'),
					hero_subtitle = document.querySelector('#hero .subtitle');

				    hero_tl
				    	   .fromTo(hero_top, 0.3, { autoAlpha: 0, y: 50 }, { autoAlpha: 1, y: 0 } )
				    	   .fromTo(hero_caps, 0.5, { autoAlpha: 0, y: 100 }, { autoAlpha: 1, y: 0 } )
				    	   .fromTo(hero_subtitle, 0.4, { autoAlpha: 0, y: 50 }, { autoAlpha: 1, y: 0 } );


				new ScrollMagic.Scene({triggerElement: "#hero"})
					.setTween(hero_tl)
					.addTo(controller2);


				// ----------------------------//	
				//typical import
				var signup_tl         = new TimelineLite(),
					signup_heading    = document.querySelector('#signup h2'), 
					signup_subheading = document.querySelector('#signup .module__subheading'),
					signup_form       = document.querySelector('.signup-form--horizontal');

				    signup_tl
				    	   .fromTo(signup_heading, 0.3, { autoAlpha: 0, y: 50 }, { autoAlpha: 1, y: 0 },'+=1' )
				    	   .fromTo(signup_subheading, 0.5, { autoAlpha: 0, y: 60 }, { autoAlpha: 1, y: 0 } )
				    	   .fromTo(signup_form, 0.4, { autoAlpha: 0, y: 50 }, { autoAlpha: 1, y: 0 } );


				new ScrollMagic.Scene({
						triggerElement: "#signup",
						triggerHook: 0.9
					})
					.setTween(signup_tl)
					.addTo(controller2);	



				 // ----------------------------//		
				//projects
				var featured_tw = new TimelineMax(),
					fh1_tween = '',
					featured_heading = document.querySelector('#projects h2');
					project = document.querySelector("#projects .col-custom");



				   	fh1_tween = TweenMax.fromTo(featured_heading, 0.5, {autoAlpha: 0, y: 100}, {autoAlpha: 1, y: 0});		 

				new ScrollMagic.Scene({triggerElement: "#projects h2", reverse: false, triggerHook: 1})
					.setTween(fh1_tween)
					.addTo(controller);	


				// new ScrollMagic.Scene({triggerElement: ".project", reverse: false, triggerHook: 1,})
				// 	.setTween(featured_tw)
				// 	.addTo(controller4);
				
					var ctrlProject = new ScrollMagic.Controller();


					$('#projects .col-custom').each(function(){

						var target = $(this);

						featured_tw.fromTo(target, 0.5, {y: 100}, {autoAlpha: 1, y: 0})

						 // Create a scene for each project
						 var myScene = new ScrollMagic.Scene({
						 	triggerElement: this,
						 	triggerHook: 0.9
						 })
						 .setTween(featured_tw, featured_tw)
						 .addTo(ctrlProject);

					});


				if( is_frontpage ) {

					//Books
					var bookHeading 	   	   = document.querySelector('#books h2');	
					var booksList 	           = document.querySelectorAll('#books .col-custom');	
					var controllerBookHeading  = new ScrollMagic.Controller();
					var bookTLHeading 		   = new TimelineLite();	

					bookTLHeading
						  .fromTo(bookHeading, 0.3, { autoAlpha: 0, y: 40 }, { autoAlpha: 1, y: 0 })
						  .staggerFromTo(booksList, 1, {autoAlpha: 0, y: 30},{autoAlpha: 1, y: 0}, '0.3')

		       
					//Blogs
					new ScrollMagic.Scene({triggerElement: bookHeading, reverse: false, triggerHook: 0.9,})
						.setTween(bookTLHeading) // add class toggle
						.addTo(controllerBookHeading);	



						var featuredImages 	= document.querySelectorAll('#featured .grid .item');

						var revealImg = TweenMax.staggerFromTo(featuredImages, 1, { autoAlpha: 0, y: 40 }, { autoAlpha: 1, y: 0 }, '0.2');		

						new ScrollMagic.Scene({triggerElement: "#featured .image", reverse: false, triggerHook: 0.7})
							.setTween(revealImg)
							.addTo(controller4);	


				} else {

					var media 	= document.querySelector('#featured .media-logos');

					var zoomImg = TweenMax.fromTo(media, 1, { autoAlpha: 0, scale: 0.5 }, { autoAlpha: 1, scale: 1 });		

					new ScrollMagic.Scene({triggerElement: "#featured .image", reverse: false, triggerHook: 0.8,})
						.setTween(zoomImg)
						.addTo(controller4);	
				}		
					


				//Watch
				new ScrollMagic.Scene({triggerElement: "#video h2", duration: '100%', reverse: true, triggerHook: 1,})
					.setClassToggle("#video h2", "pulse") // add class toggle
					.addTo(controller);	

				/**
				 * Featured Heading
				 * @type {[type]}
				 */
			    var featuredHeading 	   = document.querySelector('#featured-blogs h2');		
				var controllerBlogHeading  = new ScrollMagic.Controller();
				var blogTLHeading 		   = new TimelineLite();	

				blogTLHeading
					  .fromTo(featuredHeading, 0.3, { autoAlpha: 0, y: 40 }, { autoAlpha: 1, y: 0 });

		       
				//Blogs
				new ScrollMagic.Scene({triggerElement: featuredHeading, reverse: false, triggerHook: 0.9,})
					.setTween(blogTLHeading) // add class toggle
					.addTo(controllerBlogHeading);	




				var blog_tween      = '',
					blog 			= document.querySelectorAll("#featured-blogs .blog__panel"),
					controllerBlog  = new ScrollMagic.Controller();

				// Loop through ‘.project’ elements (jQuery loop)
				$('#featured-blogs .blog__panel').each(function(){

					var blog_tw         = new TimelineLite();

					blog_tw 
					  .fromTo(this, 0.7, { autoAlpha: 0, y: 100 }, { autoAlpha: 1, y: 0 });

						 // Create a scene for each project
						 var myScene = new ScrollMagic.Scene({
						 		 triggerElement: this,
						 		 triggerHook: "onEnter"
						 })
						 .setTween(blog_tw)
						 .addTo(controllerBlog);
						 
				});	

						
				//Other Projects
				new ScrollMagic.Scene({triggerElement: "#other-projects .project-1", duration: '100%', reverse: false,  triggerHook: 1,})
					.setClassToggle("#other-projects .project-1", "fadeInLeft") // add class toggle
					.addTo(controller4);

				new ScrollMagic.Scene({triggerElement: "#other-projects .project-2", duration: '100%', reverse: false,  triggerHook: 1,})
					.setClassToggle("#other-projects .project-2", "fadeInRight") // add class toggle
					.addTo(controller4);	
				//Next Steps
				new ScrollMagic.Scene({triggerElement: ".step-1", duration: '100%', reverse: false,  triggerHook: 1,})
					.setClassToggle(".step-1", "fadeInLeft") // add class toggle
					.addTo(controller4);

				new ScrollMagic.Scene({triggerElement: ".step-2", duration: '100%', reverse: false,  triggerHook: 1,})
					.setClassToggle(".step-2", "fadeInRight") // add class toggle
					.addTo(controller4);

				}

			}

			frontpage();

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


