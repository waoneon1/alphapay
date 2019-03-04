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

	<?php $footer['desc'] = get_field('description', 'option'); ?>
	<?php $footer['nav'] = get_field('navigation', 'option'); ?>
	<?php $footer['soc'] = get_field('social_media', 'option'); ?>
	<?php $footer['link'] = get_field('link', 'option'); ?>

	<footer id="colophon" class="alp-footer">
		<div class="container">
			<a class="alp-footer--logo" href="index.html"> 
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-w.png" alt="">
			</a>
			<div class="row alp-footer--list">
				<!-- FOOTER 1 -->
				<div class="col-md-3 alp-footer--col">
					<div class="alp-footer--list">
						<?php echo $footer['desc'] ?>
					</div>
				</div>
				<!-- FOOTER 2 -->
				<div class="col-md-3 alp-footer--col">
					<h3 class="alp-footer--head">Tentang Alphapay</h3> 
					<ul class="alp-footer--list">
						<?php foreach ($footer['nav'] as $key => $nav): ?>
							<li>
								<a href="<?php echo $nav['link'] ?>">
									<?php echo $nav['label'] ?>
								</a>
							</li>	
						<?php endforeach ?>
					</ul>
				</div>
				<!-- FOOTER 3 -->
				<div class="col-md-3 alp-footer--col">
					<h3 class="alp-footer--head">Media Sosial</h3> 
					<ul class="alp-footer--list alp-social">
						<?php foreach ($footer['soc'] as $key => $soc): ?>
							<li>
								<a href="<?php echo $soc['link'] ?>">
									<?php switch ($soc['label']) {
										case 'facebook':
											echo '<img src="'.get_template_directory_uri().'/assets/img/fb.png"';
											break;
										
										case 'instagram':
											echo '<img src="'.get_template_directory_uri().'/assets/img/ig.png"';
											break;
										
										case 'twitter':
											echo '<img src="'.get_template_directory_uri().'/assets/img/tw.png"';
											break;
										
										default:
											# code...
											break;
									} ?>
								</a>
							</li>	
						<?php endforeach ?>
					</ul>
				</div>
				<!-- FOOTER 4 -->
				<div class="col-md-3 alp-footer--col">
					<?php foreach ($footer['link'] as $key => $link): ?>
						<h3 class="alp-footer--head">
							<a href="<?php echo $link['link'] ?>"><?php echo $link['label'] ?></a>
						</h3> 
					<?php endforeach ?>
				</div>
			</div>

		</div>
		<div class="alp-footer--bottom">
			Copyright © <?php echo date("Y"); ?> AlphaPay
		</div>
	</footer><!-- #colophon -->
	<div class="alp-searchwrapper"></div>
</div><!-- #app -->

<?php wp_footer(); ?>

</body>
</html>
