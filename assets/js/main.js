
// Register page
( function($) {	
	$(document).ready(function () {
		$('.alp-reg--lists li')
		.mouseenter(function() {

			var image = $(this).data('image');
			$('.alp-reg--lists li').removeClass('active');
			$(this).addClass('active');
			
			// The Image
			$('.alp-reg--image').removeClass('active');
			$('.'+image).addClass('active');
		})
		.mouseleave	(function() {
		});

	});


} )(jQuery);

