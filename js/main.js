jQuery(document).ready(function ($) {
	( function($) {

		$( '.swipebox' ).swipebox( {
			useCSS : true, // false will force the use of jQuery for animations
			useSVG : false, // false to force the use of png for buttons

		    afterOpen: function () {
		            setTimeout(function () {
				        $('.swipebox-video-container').addClass('active');
			    }, 1200);
		    },

		    afterClose: function () {
		            setTimeout(function () {
				        $('.swipebox-video-container').removeClass('active');
			    }, 500);
		    },

		} );


	} )( jQuery );
});


