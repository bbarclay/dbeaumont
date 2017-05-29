/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
$(document).ready(function(){
new UISearch( document.getElementById( 'sb-search' ) );

// .addIndicators({name: "pin scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)

var controller = new ScrollMagic.Controller();
var controller2 = new ScrollMagic.Controller();
var controller3 = new ScrollMagic.Controller();
var controller4 = new ScrollMagic.Controller();

// build scenes


new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.8})
	.setClassToggle(".top", 'show') // add class toggle
	.addTo(controller2);

new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.8})
	.setClassToggle("#hero .caps", 'show') // add class toggle
	.addTo(controller3);

new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.8})
	.setClassToggle("#hero h2", 'show') // add class toggle
	.addTo(controller3);	

//projects
new ScrollMagic.Scene({triggerElement: "#projects h2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle("#projects h2", "slideInUp") // add class toggle
	.addTo(controller);	

new ScrollMagic.Scene({triggerElement: ".project", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-1", "slideInUp") // add class toggle
	.addTo(controller4);

new ScrollMagic.Scene({triggerElement: ".project", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-2", "slideInUp") // add class toggle
	.addTo(controller4);		


new ScrollMagic.Scene({triggerElement: ".project-3", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-3", "slideInUp") // add class toggle
	.addTo(controller4);	

new ScrollMagic.Scene({triggerElement: ".project-4", duration: '100%', reverse: false,  triggerHook: 1,})
	.setClassToggle(".project-4", "slideInUp") // add class toggle
	.addTo(controller4);			

new ScrollMagic.Scene({triggerElement: "#featured", duration: '100%', reverse: false, triggerHook: 0.8,})
	.setClassToggle(".media-logos", "zoomIn") // add class toggle
	.addTo(controller4);					


//Watch
new ScrollMagic.Scene({triggerElement: "#video h2", duration: '100%', reverse: true, triggerHook: 1,})
	.setClassToggle("#video h2", "pulse") // add class toggle
	.addTo(controller);	


//Blogs

new ScrollMagic.Scene({triggerElement: "#featued-blogs h2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle("#featured-blogs h2", "slideInUp") // add class toggle
	.addTo(controller);	

new ScrollMagic.Scene({triggerElement: ".blog-1", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-1", "slideInUp") // add class toggle
	.addTo(controller4);

new ScrollMagic.Scene({triggerElement: ".blog-2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-2", "slideInUp") // add class toggle
	.addTo(controller4);		


new ScrollMagic.Scene({triggerElement: ".blog-3", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-3", "slideInUp") // add class toggle
	.addTo(controller4);	

new ScrollMagic.Scene({triggerElement: ".blog-4", duration: '100%', reverse: false,  triggerHook: 1,})
	.setClassToggle(".blog-4", "slideInUp") // add class toggle
	.addTo(controller4);
		
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



   //SLICK SLIDER TESTIMONIALS	
$(".home .testimonial").slick({
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
})

//Click image to  pop up
//$("a.popup-this").fancybox();

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
