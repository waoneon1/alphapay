<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alphapay
 */

get_header();
?>

<div class="alp-archive--header">
	<div class="container deskrip-alterran">
		<h1>Hasil Pencarian Dari <quote><?php echo $_GET['s']?></quote></h1>
	</div>
</div>

<!-- Banner Carosel -->
<div class="alp-banner alp-sec-margin">
	<div class="alp-banner--bg container">
		


	</div>
</div>


<div class="alp-wrapper">

	<div class="alp-content container">
		<div class="row">
			<div class="col-md-8 col-12">
				<div class="row">
					<?php if (have_posts()): ?>
					<?php
						while ( have_posts() ) :
							the_post(); ?>
							<div class="col-md-6 col-sm-6 col-12">
								<div class="alp-card">
									<picture class="now_item_picture">
										<source media="(min-width: 1200px)" srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'alpay_350x263') ?>">
										<source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'alpay_290x217') ?>">
										<source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'alpay_290x217') ?>">
										<source media="(min-width: 0px)" srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'alpay_350x263') ?>">
										<img class="now_item_image" src="<?php echo get_the_post_thumbnail_url($post->ID, 'alpay_350x263') ?>" alt="">
									</picture>
									<div class="alp-card--content">
										<h2><?php the_title() ?></h2>
						 				<?php alpay_blurb() ?>	
						 				<a href="<?php echo esc_url( get_permalink() ) ?>" class="alp-card--btn">Baca Selanjutnya</a>
									</div>
								</div>
							</div>

						<?php endwhile; // End of the loop.
					else:
						echo "no post found";
					endif
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
