<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				alpay_posted_by();
				echo "<br />";
				alpay_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content wysiwyg">
		<?php the_content() ?>
	</div><!-- .entry-content -->
	<?php //alpay_entry_footer(); ?>

	<style type="text/css">
		.alp-share-mobile .a2a_kit {
			text-align: right;
		}
		.alp-share-mobile .a2a_vertical_style a {
		    clear: left;
		    display: inline-block;
		    overflow: hidden;
		    padding: 4px;
		    text-decoration: none;
		}
		.a2a_vertical_style a {
		    clear: left;
		    display: block;
		    overflow: hidden;
		    padding: 15px;
		    text-decoration: none;
		}
		.a2a_default_style .a2a_count, .a2a_default_style .a2a_svg, .a2a_floating_style .a2a_svg, .a2a_menu .a2a_svg, .a2a_vertical_style .a2a_count, .a2a_vertical_style .a2a_svg {
			border-radius: 50%;
		}
		.a2a_floating_style {
		    background-color: transparent; 
		}
	</style>

	<div class="alp-share-mobile showmobile">
		<div class="a2a_kit a2a_kit_size_32 a2a_vertical_style"
		data-a2a-url="<?php echo esc_url( get_permalink() ) ?>" data-a2a-title="<?php the_title() ?>">
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_linkedin"></a>
			<a class="a2a_button_whatsapp"></a>
		</div>
	</div>

	<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style showpc" 
	data-a2a-scroll-show="500,1000" 
	data-a2a-url="<?php echo esc_url( get_permalink() ) ?>" data-a2a-title="<?php the_title() ?>"
	style="left:0px; top:150px;">
	    <a class="a2a_button_facebook"></a>
	    <a class="a2a_button_twitter"></a>
	    <a class="a2a_button_linkedin"></a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
