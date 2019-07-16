<?php /* Template Name: Regional Page */ ?>

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
			<?php if ($flex['acf_fc_layout'] != 'download_section'): ?>
				<?php alpay_layout($flex) ?>	
			<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>

	<div class="alp-pcontent container alp-section" id="howto" style="max-width: 900px">
	    <div class="row">
	        <div class="col-md-12 col-12 alp-cara-howto" style="text-align: center;">
	            <?php echo get_field('howto_title') ? '<h2>'.get_field('howto_title').'</h2>' : '' ?>
	            <?php echo get_field('excerpt') ?>
	        </div>
	    </div>

	    <?php $hows = get_field('how') ?>
	    <?php if ($hows): ?>
	        <?php foreach ($hows as $key => $how): ?>
	            <?php $num = $key + 1; ?>
	            <div class="row alp-cara-howto-loop">
	                <div class="col-md-6 alp-cara-howto-content <?php echo ($key%2) ? 'order-md-last' : '' ?>">
	                    <div class="alp-reg--number large <?php echo "reg-type1" ?>">
	                        <span><?php echo $num ?></span>
	                        <img src="<?php echo get_template_directory_uri() . '/assets/img/btn-howto@2x.png' ?>">
	                    </div>
	                    <div class="double-column-meet">
	                        <div class="deskrip-alterran">
	                            <h3><?php echo $how['title'] ?></h3>
	                            <?php echo $how['desc'] ?>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-1 <?php echo ($key%2) ? '' : 'order-md-first' ?>"></div>
	                <div class="col-md-5 <?php echo ($key%2) ? 'order-md-first' : 'order-md-last' ?>">
	                    <div class="double-column-meet">
	                        <div class="img-alterran">
	                            <picture>
	                                <img src="<?php echo $how['image']['url'] ?>" 
	                                     alt="<?php echo $how['image']['alt'] ?>">
	                            </picture>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <?php if ($num != count($hows)): ?>
	                <div class="animate-arrow bounce alp-arrow">
	                    <span class="dashicons dashicons-arrow-down-alt2"></span>
	                </div>
	            <?php endif ?>
	        <?php endforeach ?>
	    <?php endif ?>
	    <?php wp_reset_query() ?>

	</div>


	<!-- DOWNLOAD SECTION -->
	<?php $flex['acf_fc_layout'] = 'download_section'; ?>
	<?php alpay_layout($flex) ?>
	
</div>

<?php get_footer() ?>