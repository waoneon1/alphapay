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
				$return .= '<th>'.$value.'</th>';
			}
		$return .= '</tr>';
		echo $return;
	} else {
		return $data;
	}

}
