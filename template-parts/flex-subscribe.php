 <!-- Subscribe Section -->
<div class="alp-subsc row alp-section">
	<div class="col-md-6 col-12 alp-subsc--left alp-row">
		<div>
			<h2><?php echo $section['title'] ? $section['title'] : 'Mau Dapat Info Terbaru dari AlphaPay?' ?></h2>
			<p><?php echo $section['description'] ? $section['description'] : 'Daftarkan email dan nomor handphone Anda pada kolom berikut untuk menerima berbagai info, tips bisnis, dan promo menarik dari AlphaPay' ?></p>
			<div class="alp-subsc--form alp-form">
				<?php echo do_shortcode($section['contact_form_7']) ?>
			</div>
		</div>
	</div>
	<?php if ($section['image']): ?>
		<div class="col-md-6 col-12 d-none d-md-block" style="
			background-image: url(<?php echo $section['image']['url'] ?>);
			background-size: cover;
			padding-left: 0;
			padding-right: 0;
		">
	<?php else: ?>
		<div class="col-md-6 col-12 d-none d-md-block alp-subsc--right">
	<?php endif ?>
		&nbsp;
	</div>
</div>