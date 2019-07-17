 <!-- Button Section -->
<div class="alp-button container text-center" style="padding: 30px 0">
	<div class="alp-product--title">
	    <h2><?php echo $section['title']  ?></h2>
	    <?php if ($section['description']): ?>
	        <p><?php echo $section['description'] ?></p> 
	    <?php endif ?>
	</div>
	<a href="<?php echo $section['url'] ?>" class="alp-btn btn alp-btn-blue btn-effect d-none d-md-inline-block">
		<?php echo $section['url_text'] ?>
	</a>
</div>

<style type="text/css"></style>