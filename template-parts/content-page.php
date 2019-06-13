<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="alp-pheader container">
    	<div class="row">
	    	<div class="alp-pheader--desc col-md-6 col-12 alp-col">
                <h1><?php the_title() ?></h1>
	    	</div>
	    	<div class="alp-pheader--imgwrap col-md-6 col-12 alp-col">
            	<?php alpay_post_thumbnail(); ?>
	    	</div>
    	</div>
    </div>

	<div class="entry-content container alp-section">

		<div class="wysiwyg">
			<?php the_content() ?>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alpay' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
