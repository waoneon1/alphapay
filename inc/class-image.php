<?php

// HOMEPAGE
// 225x400 (register)
// 600x532 (subscrib
// dll
// ——————————————
// POST
// 350x263 (3 block post, category landing page 1200)
// 290x217 (category landing page 992)
// 210x158 (category landing page 768)


if ( ! function_exists( 'alpay_add_image_size' ) ) :
	function alpay_add_image_size() {
		add_action( 'after_setup_theme', 'alpay_setup' );

		// ---- Homepage ----
		add_image_size('alpay_225x400', 225, 400, true);
		add_image_size('alpay_600x532', 600, 532, true);

		// ---- Banner Content ----
		add_image_size('alpay_1240x540', 1240, 540, true);
		add_image_size('alpay_991x434', 991, 434, true);
		add_image_size('alpay_787x344', 787, 344, true);

		// ---- Content ----
		add_image_size('alpay_350x263', 350, 263, true);
		add_image_size('alpay_290x217', 290, 217, true);
		add_image_size('alpay_210x158', 210, 158, true);
	}
endif;
add_action( 'after_setup_theme', 'alpay_add_image_size' );

function alpay_image($field, $size,  $echo = true, $type = 'acf') {
	if ($type == 'acf') {
		$image = is_array($field) ? $field['sizes']['alpay_'.$size] : $field;
		if ($echo) {
			echo $image;
		} else {
			return $image;
		}
	}
}
