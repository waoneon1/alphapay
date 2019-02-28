<?php get_header() ?>
<?php $flex_content = get_field('flexible_section') ?>

<div class="alp-wrapper">
    
    <!-- CTA Download Section -->
    <div class="alp-cta container alp-section">
    	<div class="row">
	    	<div class="alp-cta--desc col-md-5 col-12 alp-col">
	    		<h1><?php the_field('title') ?></h1>
	    		<?php print_r(get_field('subtitle')) ?>
	    		
	    		<!-- Mobile -->
	    		<a href="<?php the_field('cta_link') ?>" class="alp-btn btn alp-btn-blue btn-effect d-none d-md-block">
	    			<?php the_field('cta') ?>
	    		</a>

	    		<!-- PC -->
	    		<a href="#alp-register" class="alp-btn btn alp-btn-blue btn-effect d-md-none">
	    			<?php the_field('cta') ?>
	    		</a>

	    	</div>
	    	<div class="alp-cta--imgwrap col-md-7 col-12 alp-col">
	    		<img src="<?php echo get_template_directory_uri() . '/assets/img/homepage.png' ?>" class="alp-cta--image">
	    		<img src="<?php echo get_template_directory_uri() . '/assets/img/homepage-bg.png' ?>" class="alp-cta--homebg">
	    	</div>
    	</div>
    </div>

	<?php foreach ($flex_content as $key => $flex): ?>
		<?php alpay_layout($flex) ?>
	<?php endforeach ?>
	
</div>

<?php get_footer() ?>