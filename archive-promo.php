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


<!-- Banner Carosel -->
<div class="alp-promo alp-banner alp-sec-margin">
	<picture>
		<source media="(min-width: 1200px)" srcset="<?php echo get_field('promo_banner_image', 'option')['sizes']['alpay_1240x540'] ?>">
		<source media="(min-width: 768px)" srcset="<?php echo get_field('promo_banner_image', 'option')['sizes']['alpay_991x434'] ?>">
		<source media="(min-width: 0px)" srcset="<?php echo get_field('promo_banner_image', 'option')['sizes']['alpay_787x344'] ?>">
		<img class="d-block w-100" src="<?php echo get_field('promo_banner_image', 'option')['sizes']['alpay_1240x540'] ?>" alt="">
	</picture>
</div>

<div class="alp-wrapper alp-promo">
	<div class="container">
		<div class="row">
			<?php foreach ($posts as $key => $post): ?>
				<?php setup_postdata($post);  ?>
				<div class="col-md-4">
					<div class="alp-card alp-card2">
						<picture>
							<img class="d-block w-100" src="http://localhost:8888/alphapay-wp/wp-content/uploads/2019/02/nathan-dumlao-1147766-unsplash@2x-1-350x263.png" alt="">
						</picture>
						<div class="alp-card--content">
							<h2><?php the_title() ?></h2>
			 				<div class="alp-promo--periode">
			 					<?php the_field('temporary_promo') ?>
			 				</div>

			 				<?php if (get_field('code')): ?>
			 					<div class="alp-promo--code">
			 						<?php the_field('code') ?>
			 					</div>
			 				<?php else: ?>
			 					<div style="height: 60px; width: 100%;"></div>
			 				<?php endif ?>
			 				
			 				<a href="<?php the_permalink() ?>" class="btn alp-btn-blue w-100">
			 					Lihat Promo
			 				</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php
get_footer();
