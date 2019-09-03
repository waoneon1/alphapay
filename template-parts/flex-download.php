<!-- Download Section -->
<?php if (is_front_page()) {
	$cta_class = 'cta-download-homepage-bawah';
} 

//$section['bg-color'] = false;

?>

<?php if ($section['header']): ?>
	<div class="container" style="margin-top: 70px; margin-bottom: 60px;">
		<div class="col-12 alp-row text-center">
	    	<h2><?php echo $section['header']; ?></h2>
	    </div>
	</div>
<?php endif ?>

<div class="fullwidth-content <?php echo $section['bg-color'] ? '' : 'bg-grey' ?>">
	<div class="alp-download container alp-section alp-last-section">
		<div class="row">
			<div class="col-md-5 col-12 alp-download--phone alp-col d-none d-md-block">
				<?php $img_phone = get_template_directory_uri() .'/assets/img/phone' ?>
				<picture>
					<source srcset="<?php echo $img_phone ?>.webp" type="image/webp">
					<source srcset="<?php echo $img_phone ?>.png" type="image/png"> 
				  	<img src="<?php echo $img_phone ?>.png" alt="download alphapay">
				</picture>
			</div>
			<div class="col-md-7 col-12 alp-download--content">
				<h2><?php echo $section['title'] ?></h2>
				<p><?php echo $section['subtitle'] ?></p>
				
				<?php if ($section['android_url']): ?>
					<a href="<?php echo $section['android_url'] ?>" target="_blank">
						<picture>
						  <img 
						  	class="<?php echo $cta_class ?>"
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
</div>