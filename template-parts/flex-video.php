 <!-- Banner Section -->
<div class="alp-video alp-section container text-center">
	<div class="alp-product--title">
	    <h2><?php echo $section['title']  ?></h2>
	    <?php if ($section['description']): ?>
	        <p><?php echo $section['description'] ?></p> 
	    <?php endif ?>
	</div>
	<?php echo $section['video']; ?>
</div>


<style type="text/css">
	.alp-video iframe {
		width: 100%;
		height: 600px;
	}
</style>