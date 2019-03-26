
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
( function($) {

	// When the user scrolls the page, execute myFunction 
	// window.onscroll = function() {myFunction()};

	// Get the navbar
	// var navbar = document.getElementById("navbar");
	// var navbarm = document.getElementById("navbar-m");

	// console.log(document.getElementById("navbar"));
	// Get the offset position of the navbar
	// var sticky = navbar.offsetTop;

	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
	  // if (window.pageYOffset != sticky) {
	    // navbar.classList.add("sticky");
	    // navbarm.classList.add("sticky");
	  // } else {
	    // navbar.classList.remove("sticky");
	    // navbarm.classList.remove("sticky");
	  // }
	}

} )(jQuery);
