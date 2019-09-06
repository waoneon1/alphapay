<?php /* Template Name: Embed Template */ ?>

<?php get_header('embed') ?>
<?php $flex_content = get_field('flexible_section') ?>

<div class="alp-wrapper">
    <?php if ($flex_content): ?>
		<?php foreach ($flex_content as $key => $flex): ?>
			<?php alpay_layout($flex) ?>
		<?php endforeach ?>
    <?php endif ?>
</div>

<?php get_footer('embed') ?>