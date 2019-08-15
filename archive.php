<?php 

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

get_header();
?>
	
<?php $arc_nav = get_field('archive_navigation', 'option'); ?>
<!-- archive header nav -->
<div class="alp-archive--header">
	<div class="container alp-archive--cont">
		<ul>
			<?php foreach ($arc_nav as $key => $term): ?>
				<li>
					<a href="<?php echo get_category_link($term->term_id) ?>">
						<?php echo $term->name ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>

<!-- Banner Carosel -->
<div class="alp-banner alp-sec-margin">
	<div class="alp-banner--bg container">
		
		<div id = "carouselwithIndicators" class = "carousel slide" data-ride = "carousel">
            
            <div class =" carousel-inner">
              	<?php

              	$categories = get_the_category();

              	if ($categories) {
              		$category_id = $categories[0]->cat_ID;

	            	$inner_query = new WP_Query(array(
	            	    'post_type' => 'post',
	            	    'posts_per_page' => 3,
	            	    'cat' => $category_id	
	            	));
	            	$i = 1;
	            	while ( $inner_query->have_posts() ) :
	            		$inner_query->the_post(); ?>
	            		<?php $image = get_field('banner_image') ?>

	            		<div class = "carousel-item <?php echo ($i == 1) ? 'active' : '' ?>">
							<picture>
								<source media="(min-width: 1200px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_1240x540') ?>">
								<source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_991x434') ?>">
								<source media="(min-width: 0px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_787x344') ?>">
								<img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_1240x540') ?>" alt="">
							</picture>
	            		</div>
	            		<?php $i++; ?>
	            	<?php endwhile; // End of the loop.
	            	wp_reset_query();
              	}

            ?>
            </div>

            <?php if ($categories): ?>
	            <ol class = "carousel-indicators">
	               <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
	               <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
	               <li data-target = "#carouselExampleIndicators" data-slide-to = "2s"></li>
	            </ol>

	            <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
	               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
	               <span class = "sr-only">Previous</span>
	            </a>
	            
	            <a class = "carousel-control-next" href = "#carouselwithIndicators" role = "button" data-slide = "next">
	               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
	               <span class = "sr-only">Next</span>
	            </a>
            <?php endif ?>
            
        </div>

	</div>
</div>

<div class="alp-wrapper">

	<div class="alp-content container">
		<div class="row">
			<div class="col-md-8 col-12">
				<div class="row">
					<?php
						while ( have_posts() ) :
							the_post(); ?>
							<?php $image = get_field('thumbnail') ?>
							<div class="col-md-6 col-sm-6 col-12">
								<div class="alp-card">
									<picture>
										<source media="(min-width: 1200px)" srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'alpay_350x263') ?>">
										<source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'alpay_290x217') ?>">
										<source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'alpay_290x217') ?>">
										<source media="(min-width: 0px)" srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'alpay_350x263') ?>">
										<img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'alpay_350x263') ?>" alt="">
									</picture>
									<div class="alp-card--content">
										<h2><?php the_title() ?></h2>
						 				<?php alpay_blurb() ?>	
						 				<a href="<?php echo esc_url( get_permalink() ) ?>" class="alp-card--btn">Baca Selanjutnya</a>
									</div>
								</div>
							</div>

						<?php endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>

</div>

<?php
get_footer();
