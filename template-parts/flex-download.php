<!-- Download Section -->

<div class="alp-download container alp-section alp-last-section">
	<div class="row">
		<div class="col-md-5 col-12 alp-download--phone alp-col d-none d-md-block">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/phone.png' ?>">
		</div>
		<div class="col-md-7 col-12 alp-download--content">
			<h2><?php echo $section['title'] ?></h2>
			<h3><?php echo $section['subtitle'] ?></h3>
			
			<?php if ($section['android_url']): ?>
				<a href="<?php echo $section['android_url'] ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/google-play-badge.png' ?>">
				</a>
			<?php endif ?>

			<?php if ($section['iphone_url']): ?>
				<a href="<?php echo $section['iphone_url'] ?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/google-play-badge.png' ?>">
				</a>
			<?php endif ?>
		</div>
	</div>	
</div>