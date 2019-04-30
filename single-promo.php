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

<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<?php $gplay = get_field( "cta_link", $frontpage_id ) ?>

<div class="alp-wrapper alp-single-promo">

	<div class="container">
		<div class="row">
			<div class="col-md-9 col-12">

				<!-- Banner Carosel -->
				<div class="alp-promobanner">
					<div class="alp-singlebanner--bg fullwidth-content">
						<div class="row">
							<picture>
								<source media="(min-width: 1200px)" srcset="<?php echo get_field('banner')['sizes']['alpay_1240x540'] ?>">
								<source media="(min-width: 768px)" srcset="<?php echo get_field('banner')['sizes']['alpay_991x434'] ?>">
								<source media="(min-width: 0px)" srcset="<?php echo get_field('banner')['sizes']['alpay_787x344'] ?>">
								<img class="d-block w-100" src="<?php echo get_field('banner')['sizes']['alpay_1240x540'] ?>" alt="">
							</picture>
						</div>
					</div>
				</div>

				<div class="inner-content">
					<?php yoast_breadcrumb( '<nav aria-label="breadcrumb" class="alp-breadcrump">','</nav>' ); ?>

					<h1 class="promo-h1"><?php the_title() ?></h1>
					
					<div class="wysiwyg">
						<?php echo get_field('wysiwyg') ?>
					</div>

					<!-- Content Here -->
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
							<h4>Syarat dan Ketentuan</h4>
							<div class="wysiwyg">
								<?php echo get_field('syarat_dan_ketentuan') ?>
							</div>
						</main>
					</div>
				</div>

			</div>
			<div class="col-md-3 col-12" id="sidebar-container">
				<div class="sidebar-sticky">
					<div class="infopromo">
						<div class="iftitle">
							Info Promo
						</div>
						<div class="alp-promo--periode">
							<?php the_field('temporary_promo') ?>
						</div>
						Download Aplikasi AlphaPay
						<p>Nikmati kemudahan bertransaksi hanya dari Smartphonemu</p>
						<a href="#" target="_blank">
							<picture>
							  <img 
							  	src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
							  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay">
							</picture>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="alp-related fullwidth-content" style="background-color: #EFF2F7">
		<div class="container">
			<div class="text-center" style="margin-bottom: 30px;">
				<h2>Promo Lainnya</h2>
			</div>
			<div class="row">
				<?php
					$inner_query = new WP_Query(array(
					    'post_type' => 'promo',
					    'orderby' => 'rand',
					    'posts_per_page' => 3
					));

					while ( $inner_query->have_posts() ) :
						$inner_query->the_post(); ?>
						<?php $image = get_field('thumbnail') ?>
						
						<div class="col-md-4">
							<div class="alp-card alp-card2">
								<picture>
									<img class="d-block w-100" src="<?php echo get_field('thumbnail')['url'] ?>" alt="">
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

					<?php endwhile; // End of the loop.
					wp_reset_query();
				?>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	console.log('dsfjkdsa');
	jQuery(document).ready(function ($) {
		var a = new StickySidebar('.sidebar-sticky', {
			topSpacing: 50,
			bottomSpacing: 20,
			containerSelector: '#sidebar-container',
			innerWrapperSelector: '.infopromo',
			resizeSensor: true

		});
	});

</script>
<!-- <script async src="https://static.addtoany.com/menu/page.js"></script> -->

<?php
get_footer();

