 <!-- Count Section -->
<div class="alp-count container">
	<div class="row align-items-center">
		<div class="col-md-4 col-12">
			<div class="alp-count--box bg-grey">
				<div class="alp-counter">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/snack-booth.png' ?>">
					<span class="count"><?php echo $section['counter'] ?></span>
				</div>
				<img class="alp-count--dot" src="<?php echo get_template_directory_uri() . '/assets/img/doted.png' ?>">
			</div>
		</div>
		<div class="col-md-1 col-12"></div>
		<div class="col-md-7 col-12">
			<h2><?php echo $section['title'] ?></h2>
			<p><?php echo $section['description'] ?></p>
		</div>
	</div>
</div>

<style type="text/css">
	.alp-count--box {
		position: relative;
    	padding: 25px;
	}
	.alp-counter {
		text-align: center;
		font-size: 50px;
		font-weight: 700;
	}
	.alp-counter span {
		font-size: 50px;
		display: block;
		font-family: 'SourceSansPro-Bold', sans-serif;
		font-weight: 700;
		color: #19345E;
	}
	.alp-count--dot {
		position: absolute;
		right: -40px;
		bottom: -60px;
	}
	.alp-count {
		position: relative;
	    margin-top: 40px;
	    margin-bottom: 130px;
	}
</style>

<script type="text/javascript">
	jQuery('.count').each(function () {
	    jQuery(this).prop('Counter',0).animate({
	        Counter: jQuery(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            jQuery(this).text(Math.ceil(now));
	        }
	    });
	});
</script>