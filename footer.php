<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alphapay
 */

?>
	</div> <!-- .app-container -->

	<footer id="colophon" class="alp-footer">
		<div class="container">
			<a class="alp-footer--logo" href="index.html"> 
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-w.png" alt="">
			</a>
			<div class="row alp-footer--list">
			<?php if (alpay_navigation('footer') ): ?>

				<?php foreach (alpay_navigation('footer') as $object): ?>
					<?php 
						if($object->menu_item_parent == 0) {
							$footer_parent[] = $object;
						} else {
							$footer[$object->menu_item_parent][] = $object;
						}
					?>
				<?php endforeach ?>

				<?php $footer_half = ceil(count($footer_parent) / 2)  ?>
				<?php $footer_all = count($footer_parent) - 1?>
				
				<?php foreach ($footer_parent as $i => $fparent): ?>
					<div class="col-md-3 alp-footer--col">
						<h3 class="alp-footer--head"><?php echo $fparent->title ?></h3> 
						<ul class="alp-footer--list">
							<?php if(isset($footer[$fparent->ID])) : ?>
								<?php foreach ($footer[$fparent->ID] as $f): ?>
									<li>
										<a href="<?php echo $f->url ?>">
											<?php echo $f->title ?>
										</a>
									</li>	
								<?php endforeach ?>	
							<?php endif; ?>
						</ul>
					</div>
				<?php endforeach ?>
			<?php endif ?>
			</div>

		</div>
	</footer><!-- #colophon -->
</div><!-- #app -->

<?php wp_footer(); ?>

</body>
</html>
