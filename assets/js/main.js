
// header search
( function($) {	
	$(document).ready(function () {
		$(".app-container #alp-header-search").on('click', function(e){
			e.preventDefault();
			$('.alp-search').toggleClass('active');
			$('.alp-searchwrapper').toggle().toggleClass('active')
		})
		$(".alp-search #alp-btn-close").on('click', function(e){
			e.preventDefault();
			$('.alp-search').removeClass('active');
			$('.alp-searchwrapper').hide().removeClass('active')
		})
	});
} )(jQuery);


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


	$(document).ready(function () {
		$( "#kategori" ).change(function() {
			var kat_val = $(this).val();
			window.location.href = kat_val;
		});
	});

} )(jQuery);

