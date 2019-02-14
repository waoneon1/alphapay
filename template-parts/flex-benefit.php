<!-- Benefit Section -->
<div class="alp-benefit container alp-section">
	<div class="alp-benefit--title alp-title">
		<h2><?php echo $section['title'] ?></h2>
		<?php echo $section['description'] ?>
	</div>
	<div class="alp-benefit--content">
		<div class="row">
			<?php foreach ($section['items'] as $key => $item): ?>
				<div class="col-md-4 col-12 alp-col alp-benefit--item">
					<img class="alp-retina" src="<?php echo $item['image']['url'] ?>">
					<h3><?php echo $item['title']; ?></h3>
					<?php echo $item['description'] ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>