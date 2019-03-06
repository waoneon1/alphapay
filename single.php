<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alphapay
 */

get_header();
?>


<?php $arc_nav = get_field('archive_navigation', 'option'); ?>
<!-- archive header nav -->
<div class="alp-archive--header">
	<div class="container">
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

<div class="alp-wrapper">

	<div class="alp-content container">
		<div class="row">
			<div class="col-md-8 col-12">

				<!-- Banner Carosel -->
				<div class="alp-singlebanner">
					<div class="alp-singlebanner--bg fullwidth-content">
						<div class="row">
							<?php $image = get_the_post_thumbnail_url( $post->IDs, 'alpay_640x400') ?>
							<picture>
								<source media="(min-width: 1200px)" srcset="<?php echo $image ?>">
								<source media="(min-width: 0px)" srcset="<?php echo $image ?>">
								<img class="" src="<?php echo $image ?>" alt="">
							</picture>
						</div>
					</div>
				</div>

				<?php //alpay_breadcrumb() ?>
				<?php yoast_breadcrumb( '<nav aria-label="breadcrumb" class="alp-breadcrump">','</nav>' ); ?>

				<!-- Content Here -->
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
			<div class="col-md-4 col-12">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>

	<div class="alp-related fullwidth-content" style="background-color: #EFF2F7">
		<div class="container">
			<div class="row">
				<?php
					$inner_query = new WP_Query(array(
					    'post_type' => 'post',
					    'posts_per_page' => 3
					));

					while ( $inner_query->have_posts() ) :
						$inner_query->the_post(); ?>
						<?php $image = get_field('thumbnail') ?>
						
						<div class="col-md-4 col-sm-4 col-12">
							<div class="alp-card">
								<picture class="now_item_picture">
									<source media="(min-width: 1200px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_350x263') ?>">
									<source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_290x217') ?>">
									<source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_290x217') ?>">
									<source media="(min-width: 0px)" srcset="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_350x263') ?>">
									<img class="now_item_image" src="<?php echo get_the_post_thumbnail_url( $inner_query->post->ID, 'alpay_350x263') ?>" alt="">
								</picture>
								<div class="alp-card--content">
									<h2><?php the_title() ?></h2>
					 				<?php alpay_blurb() ?>	
					 				<a href="<?php echo esc_url( get_permalink() ) ?>" class="alp-card--btn">Baca Selanjutnya</a>
								</div>
							</div>
						</div>

					<?php endwhile; // End of the loop.
					wp_reset_query();
				?>
			</div>
		</div>
	</div>

</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>

<?php
get_footer();

