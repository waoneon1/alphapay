<!-- Download Section -->

<div class="alp-download container alp-section alp-last-section">
	<div class="row">
		<div class="col-md-5 col-12 alp-download--phone alp-col d-none d-md-block">
			<picture>
			  <img 
			  	src="<?php echo get_template_directory_uri() ?>/assets/img/phone.png" 
			  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/phone@2x.png 2x" alt="download alphapay">
			</picture>
		</div>
		<div class="col-md-7 col-12 alp-download--content">
			<h2><?php echo $section['title'] ?></h2>
			<p><?php echo $section['subtitle'] ?></p>
			
			<?php if ($section['android_url']): ?>
				<a href="<?php echo $section['android_url'] ?>" target="_blank">
					<picture>
					  <img 
					  	src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
					  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay">
					</picture>
				</a>
			<?php endif ?>

			<?php if ($section['iphone_url']): ?>
				
			<?php endif ?>
		</div>
	</div>	
</div>