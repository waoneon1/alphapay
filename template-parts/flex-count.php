 <!-- Count Section -->
<div class="alp-count container">
	<div class="row align-items-center">
		<div class="col-md-6 col-12">
			<div>
				<h2><?php echo $section['title'] ?></h2>
				<p><?php echo $section['description'] ?></p>
			</div>
		</div>
		<div class="col-md-6 col-12 text-center">
			<span class="alp-counter"><?php echo $section['counter'] ?></span>
		</div>
	</div>
</div>

<style type="text/css">
	.bg-blue {
		background-color: #1B75BB;
		color: #fff;
		display: inline-block;
		margin-top: 40px;
	    margin-bottom: 50px;
	}
	.bg-blue p {
		color: #fff;
	}
	.alp-counter {
		font-size: 100px;
		font-weight: 700;
	}
	.alp-count {
		position: relative;
	    margin-top: 40px;
	    margin-bottom: 50px;
	}
</style>