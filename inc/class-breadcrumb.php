<?php

function alpay_breadcrumb() {
	global $post;

	?><nav aria-label="breadcrumb">
		<ul class="breadcrumb">
			<?php alpay_breadcrumb_looper() ?>
		</ul>
	</nav><?php
}

function alpay_breadcrumb_data() {
	global $post;

	// Single Page
	if (is_singular( 'post' )) {
		$cat = alpay_primary_cat(get_the_category());
		array_push($cat, false);
		$data = [
			'home' 		=> ['Home', get_site_url(), false],
			'cat'		=> $cat,
			'single'	=> [$post->post_title, get_permalink($post->ID), true]
		];
	}

	return $data;
}

function alpay_breadcrumb_looper() {
	foreach (alpay_breadcrumb_data() as $key => $data) { ?>
		<?php if ($data[2]): ?>
			<li class="breadcrumb-item active" aria-current="page">
				<?php echo $data[0] ?>
			</li>
		<?php else: ?>
			<li class="breadcrumb-item">
				<a href="<?php echo $data[1] ?>"><?php echo $data[0] ?></a>
			</li>
		<?php endif ?>
	<?php }
}

?>



