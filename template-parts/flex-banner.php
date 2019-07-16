 <!-- Subscribe Section -->
<div class="alp-banner alp-section container">
	<div class="alp-product--title alp-title">
	    <h2><?php echo $section['title']  ?></h2>
	    <?php if ($section['description']): ?>
	        <p><?php echo $section['description'] ?></p> 
	    <?php endif ?>
	</div>
	<img src="<?php echo $section['image']['url'] ?>">
</div>

<style type="text/css"></style>