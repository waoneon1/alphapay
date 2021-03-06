<?php /* Template Name: Landing - Frontpage */ ?>

<?php get_header() ?>
<?php $flex_content = get_field('flexible_section') ?>

<div class="alp-wrapper">
    
    <!-- CTA Download Section -->
    <div class="alp-cta container alp-section">
    	<div class="row">
	    	<div class="alp-cta--desc col-md-5 col-12 alp-col">
	    		<h1><?php the_field('title') ?></h1>
	    		<?php echo get_field('subtitle') ?>

	    		<a href="<?php the_field('cta_link') ?>" class="alp-btn btn alp-btn-blue btn-effect">
	    			<?php the_field('cta') ?>
	    		</a>

	    	</div>
	    	
	    	<div class="alp-cta--imgwrap col-md-7 col-12 alp-col">
	    		<img src="<?php echo get_field('image')['url'] ?>" class="alp-cta--image">
	    	</div>
    	</div>
    </div>

    <?php if ($flex_content): ?>
		<?php foreach ($flex_content as $key => $flex): ?>
			<?php alpay_layout($flex) ?>
		<?php endforeach ?>
    <?php endif ?>

	
</div>

<?php get_footer() ?>