
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Lightbox
		-------------------------------------------*/

		// Notes...


		$('.project').colorbox({

			rel: 'project',
			inline: true,
			// width: '100%',
			// maxWidth: '998px',
			// height: 'auto'

		});


		/*-------------------------------------------
			Categories Carousel
		-------------------------------------------*/

		// Notes...


		$('.owl-carousel').owlCarousel({

			loop: true,
			margin: 30,
			nav: true,
			dots: false,

			responsive: {

				0: {

					items: 2

				},

				470: {

					items: 3

				},

				700: {

					items: 4

				}

			}

		});


		/*-------------------------------------------
			Lightbox
		-------------------------------------------*/

		// Notes...





		/*-------------------------------------------
			Share Popup Window
		-------------------------------------------*/

		// Notes...


		function sharePopup(url, width, height) {

			// Calculate the position of the popup so it's centered on the screen...

			var left = (screen.width / 2) - (width / 2);

			var top = (screen.height / 2) - (height / 2);

			window.open(

				url,
				"",
				"menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left" + left

			);

		}


		$('.share').find('a').on('click', function(e) {

			e.preventDefault();

			sharePopup($(this).attr('href'), 750, 540);

		});



		/*-------------------------------------------
			Sample Smooth Scroll Structure
		-------------------------------------------*/

		// Notes...


		// $('.answers .top a').smoothScroll({

			// offset: -20

		// });


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $("#footer").after('<div id="dev"></div>');

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Sample Flexslider Structure
		-------------------------------------------*/

		// Notes...


		// $(".flexslider").flexslider({

			// animation: "fade",
			// slideshowSpeed: 5000,
			// useCSS: false,
			// controlNav: false,
			// directionNav: true,
			// start: function(slider){

				// $("body").removeClass("loading");

			// }

		// });


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


})(window.jQuery);