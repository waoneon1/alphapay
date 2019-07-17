 <!-- Banner Section -->
<div class="alp-video alp-section container text-center">
	<div class="alp-product--title">
	    <h2><?php echo $section['title']  ?></h2>
	    <?php if ($section['description']): ?>
	        <p><?php echo $section['description'] ?></p> 
	    <?php endif ?>
	</div>
	<div class="alp-video-container">
		<?php echo $section['video']; ?>	
	</div>
</div>


<style type="text/css">
	.alp-video-container {
	    position: relative;
	    width: 100%;
	    height: 0;
	    padding-bottom: 56.25%;
	}
	.alp-video-container iframe {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
</style>
