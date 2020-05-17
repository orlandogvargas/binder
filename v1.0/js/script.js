/*
Author       : Abubakar Siddique
Template Name: Sigma - Construction, Building Business Template
Version      : 1.0
*/

(function($)
{
	"use strict";
	
	// Preloader
	jQuery(window).on('load', function() {
		preloader();
	})
	
	// JQuery for page scrolling feature - requires JQuery Easing plugin
	jQuery(document).on('ready', function () {
		// Dropdown menu 
		jQuery('.dropdown').on('mouseenter', function () {
			jQuery(this).addClass('open');
		});
		jQuery(".dropdown").on('mouseleave', function () {
			jQuery(this).removeClass('open');
		});
		
		// Gallery Filter
		if(jQuery('.portfolio-outer .portfolio_items').length > 0){
			jQuery('.portfolio-outer .portfolio_items').filterizr();
		}
		jQuery('#filter-list li').on("click", function(){
			jQuery('#filter-list li').removeClass('active');
			jQuery(this).addClass('active');
		})
		
		// Magnific Popup
		jQuery('a.popup-gallery').magnificPopup({
			type: 'image',
			gallery:{
				enabled:true
			}
		});
		
		// Project Carousel
		jQuery(".project-carousel").owlCarousel({
			loop:true,
			margin: 20,
			nav: false,
			dots: false,
			autoplay: true,
			responsiveClass: true,
			responsive:{
				0:{
					items:1,
				},
				640:{
					items:2,
				},
				992:{
					items:3,
				}
			}
		});
		
		// Member Carousel
		jQuery(".member-carousel").owlCarousel({
			loop:true,
			margin: 30,
			nav: false,
			dots: false,
			autoplay: true,
			responsiveClass: true,
			responsive:{
				0:{
					items:1,
				},
				500:{
					items:2,
				},
				768:{
					items:3,
				},
				992:{
					items:4,
				}
			}
		});
		
		// Testimonials Carousel
		jQuery(".testimonial-carousel").owlCarousel({
			loop:true,
			margin: 30,
			nav: false,
			dots: true,
			autoplay: true,
			responsiveClass: true,
			responsive:{
				0:{
					items:1,
				},
				640:{
					items:2,
				},
				768:{
					items:2,
				},
				992:{
					items:2,
				}
			}
		});
		
		// Animation section
		 if(jQuery('.wow').length){
			var wow = new WOW(
			  {
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true       // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		}
		
		// CounterUp 
		jQuery('.counter').counterUp({
			delay: 10,
			time: 2000
		});
		
		// Back to top 		
		jQuery('.back-top a').on('click', function(event) {
			jQuery('body,html').animate({scrollTop:0},800);
			return false;
		});
	});
	
	jQuery(window).on('scroll', function() {
		// Back to top 
		if(jQuery(this).scrollTop()>150){
			jQuery('.back-top').addClass('fadein');
		}
		else{
			jQuery('.back-top').removeClass('fadein');
		}
	});
	
	// Preload
	function preloader(){
		jQuery(".preloaderimg").fadeOut();
		jQuery(".preloader").delay(200).fadeOut("slow").delay(200, function(){
			jQuery(this).remove();
		});
	}
	
	// Slider Caption Animation 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#banner'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	}); 
	
})(jQuery);	
	
