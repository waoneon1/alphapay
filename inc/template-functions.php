<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Alphapay
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function alpay_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'alpay_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function alpay_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'alpay_pingback_header');

/**
 * Layout generator
 */

function alpay_layout($section, $full = false, $classes = []) {
	global $post;

	echo ($full) ? '<div class="fullwidth-content '.implode(" ", $classes).'">' : '';
	switch ($section['acf_fc_layout']) {
		// Full Width Component
		case 'benefit_section':
			include get_template_directory() . '/template-parts/flex-benefit.php';
			break;

		case 'download_section':
			echo '<div class="fullwidth-content bg-grey">';
				include get_template_directory() . '/template-parts/flex-download.php';
			echo '</div>';
			break;

		case 'product_section':
			include get_template_directory() . '/template-parts/flex-product.php';
			break;
			
		case 'register_section':
			echo '<div class="fullwidth-content">';
				include get_template_directory() . '/template-parts/flex-register.php';
			echo '</div>';
			break;

		case 'seo_content_section':
			include get_template_directory() . '/template-parts/flex-seo.php';
			break;

		case 'subscribe_section':
			echo '<div class="fullwidth-content">';
				include get_template_directory() . '/template-parts/flex-subscribe.php';
			echo '</div>';
			break;

		case 'subscribe2_section':
			include get_template_directory() . '/template-parts/flex-subscribe2.php';
			break;

		case 'count_section':
			include get_template_directory() . '/template-parts/flex-count.php';
			break;

		case 'testimonial_section':
			echo '<div class="fullwidth-content">';
			include get_template_directory() . '/template-parts/flex-testimonial.php';
			echo '</div>';
			break;

		case 'banner_section':
			include get_template_directory() . '/template-parts/flex-banner.php';
			break;

		case 'video_section':
			include get_template_directory() . '/template-parts/flex-video.php';
			break;

		case 'button_section':
			echo '<div class="fullwidth-content bg-grey">';
				include get_template_directory() . '/template-parts/flex-button.php';
			echo '</div>';
			break;

		case 'wysiwyg_section':
			include get_template_directory() . '/template-parts/flex-wysiwyg.php';
			break;

		default:
			# code...
			break;
	}
	echo ($full) ? '</div>' : '';
}

function alpay_product_theader($product, $pr = true) {
	$custom_header = $product['custom_header'];
	$header_setting = $product['header_setting'];

	if ($custom_header) {
		$data = [
			$header_setting['header_1'],
			$header_setting['header_2'],
			$header_setting['header_3']
		];
	} else {
		$data = ['Produk', 'Harga', 'Keterangan'];
	}

	if ($pr) {
		$return = '<tr>';
			foreach ($data as $key => $value) {
				$return .= '<th class="td-'.$key.'">'.$value.'</th>';
			}
		$return .= '</tr>';
		echo $return;
	} else {
		return $data;
	}

}

// GET PRIMARY CATEGORY
function alpay_primary_cat($category) {
	if ($category){
		$category_display = '';
		$category_link = '';
		if ( class_exists('WPSEO_Primary_Term') )
		{
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term( $wpseo_primary_term );
			if (is_wp_error($term)) { 
				// Default to first category (not Yoast) if an error is returned
				$category_display = $category[0]->name;
				$category_link = get_category_link( $category[0]->term_id );
			} else { 
				// Yoast Primary category
				$category_display = $term->name;
				$category_link = get_category_link( $term->term_id );
			}
		} 
		else {
			// Default, display the first category in WP's list of assigned categories
			$category_display = $category[0]->name;
			$category_link = get_category_link( $category[0]->term_id );
		}
		// return category
		return [$category_display, $category_link];	
	} else {
		return null;
	}
}
