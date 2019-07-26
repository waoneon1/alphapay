<?php get_header() ?>
<?php $flex_content = get_field('flexible_section') ?>

<div class="alp-wrapper">
    
    <!-- CTA Download Section -->
    <div class="alp-cta container alp-section">
    	<div class="row">
	    	<div class="alp-cta--desc col-md-5 col-12 alp-col">
	    		<h1><?php the_field('title') ?></h1>
	    		
	    		<!-- Mobile -->
	    		<a href="<?php the_field('cta_link') ?>" class="alp-btn btn alp-btn-blue btn-effect d-md-none cta-download-mobile-atas">
	    			<?php the_field('cta') ?>
	    		</a>

	    		<!-- PC -->
	    		<a href="#alp-register" class="alp-btn btn alp-btn-blue btn-effect d-none d-md-inline-block">
	    			Cara Jadi Agen
	    		</a>

	    	</div>
	    	<div class="alp-cta--imgwrap col-md-7 col-12 alp-col">
	    		<?php $img_homepage = get_template_directory_uri() . '/assets/img/homepage' ?>
	    		<picture>
	    		  <source srcset="<?php echo $img_homepage ?>.webp" type="image/webp">
	    		  <source srcset="<?php echo $img_homepage ?>.png" type="image/png"> 
	    		  <img src="<?php echo $img_homepage ?>.png" class="alp-cta--image" alt="homepage image">
	    		</picture>
	    	</div>
    	</div>
    </div>

	<?php foreach ($flex_content as $key => $flex): ?>
		<?php alpay_layout($flex) ?>
	<?php endforeach ?>
	
</div>

<?php get_footer() ?>