
// header search
( function($) {	
	$(document).ready(function () {
		$(".app-container #alp-header-search").on('click', function(e){
			e.preventDefault();
			$('.alp-search').toggleClass('active');
			$('.alp-searchwrapper').toggle().toggleClass('active');
			document.getElementById("alp-search--input").focus();
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

// Tes
// ( function($) {

// 	// When the user scrolls the page, execute myFunction 
// 	window.onscroll = function() {scroll_func()};
// 	// Get the navbar
// 	var navbar = document.getElementById("navbar");
// 	// Get the offset position of the navbar
// 	var sticky = navbar.offsetTop;
// 	var position = navbar.offsetTop;
// 	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// 	function scroll_func() {
// 	  var scroll = $(window).scrollTop();
// 	  console.log(window.pageYOffset);
// 	  console.log(sticky);

// 	  if (window.pageYOffset != sticky) {
// 	    navbar.classList.add("sticky");
// 	    // navbarm.classList.add("sticky");
// 	    if(scroll < position) {
// 	    	navbar.classList.remove("sticky-down");
// 	    	navbar.classList.add("sticky-up");
// 	    } else {
// 	    	navbar.classList.remove("sticky-up");
// 	    	navbar.classList.add("sticky-down");
// 	    }
// 	  } else {
// 	    navbar.classList.remove("sticky");
// 	    navbar.classList.remove("sticky-up");
// 	    navbar.classList.remove("sticky-down");
// 	    // navbarm.classList.remove("sticky");
// 	  }

		
// 		position = scroll;

// 	}
// } )(jQuery);

// Floating label on alp-form
( function($) {
	$(document).ready(function () {
		$('.alp-form input, .alp-form textarea').focusin(function() {
			var lab = $(this).parent().parent().find('label');
			if (!lab.hasClass('focus')) {
				lab.addClass('focus');
			}
		})
		$('.alp-form textarea').parent().parent().find('label').addClass('textarea-label');
		$('.alp-form input, .alp-form textarea').focusout(function() {
			$(this).parent().parent().find('label').removeClass('focus');
			var lab = $(this).parent().parent().find('label');
			if ($(this).val() != '') {
				lab.addClass('focus');
			}
		})
	})

		// Select
	$(document).ready(function () {
		$('#alp-city').change(function(){
			$('.alp-loc').hide();
			$('#' + $(this).val()).show();
		});
	})
	
} )(jQuery);

