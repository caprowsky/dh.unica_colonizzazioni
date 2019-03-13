/**
 * Javascript for the Digital Gallery theme
 *
 * @author  Dave Widmer <dwidmer@bgsu.edu>
 */

/*global jQuery:false, Modernizr:false */
var digitalGallery = (function($, Modernizr){

	function init() {
		if ( ! Modernizr.svg) {
			pngFallback();
		}

		activateMobileNav();
	}

	function pngFallback() {
		$('img[src*="svg"]').attr('src', function() {
			return $(this).attr('src').replace('.svg', '.png');
		});
	}

	function activateMobileNav() {
		var body = $("body"),
			btn = $(".mobile-nav-btn");

		btn.find('a').on('click', function(e){
			e.preventDefault();
			btn.toggleClass('open');
			body.toggleClass('mobile-nav');
		});
	}

	// And now to the people!
	return {
		'init': init
	};

})(jQuery, Modernizr);
