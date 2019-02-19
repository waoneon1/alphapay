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

<!-- Banner Carosel -->
<div class="alp-banner alp-sec-margin">
	<div class="alp-banner--bg container">
		
		<div id = "carouselwithIndicators" class = "carousel slide" data-ride = "carousel">
            <ol class = "carousel-indicators">
               <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
               <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
               <li data-target = "#carouselExampleIndicators" data-slide-to = "2s"></li>
            </ol>
            
            <div class =" carousel-inner">
               <div class = "carousel-item active">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide1.png" 
                     alt = "First slide">
               </div>
               
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide2.png" 
                     alt = "Second slide">
               </div>
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide3.png" 
                     alt = "Third slide">
               </div>
            </div>
            
            <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#carouselwithIndicators" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
        </div>

	</div>
</div>


<div class="alp-wrapper">

	<div class="alp-content container">
		<div class="row">
			<div class="col-md-8 col-12">
				<!-- Content Here -->
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

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

</div>

<?php
get_sidebar();
get_footer();

