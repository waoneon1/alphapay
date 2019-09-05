<!-- AGENT Section -->
<?php $wysiwyg = $section['wysiwyg'] ?>
<?php foreach ($section['agent'] as $key => $post): ?>
<?php setup_postdata($post) ?>
<?php 
	$date = get_field('month', false, false);
	$date = new DateTime($date);
?>
<div class="alp-agent">
	<div class="container">
		<div class="row">
			<div class="alp-agent-left col-6 bg-grey">
				<h2><?php echo $section['title'] ?> <?php echo $date->format('F');  ?></h2>
				<div class="row align-items-center">
					<div class="col-1">
						<span class="dashicons dashicons-arrow-left-alt2 agent-nav-next"></span>
					</div>
					<div class="col-9">
						<div class="agent-nav-slider">
							<div class="alp-nav-item alp-igenpejuang align-items-center">
								<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpejuang.svg' ?>" />
								<span class="alp-nav-title">Agen Pejuang</span>
							</div>
							<div class="alp-nav-item alp-icenunggulan align-items-center">
								<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenunggulan.svg' ?>" />
								<span class="alp-nav-title">Agen Unggulan</span>
							</div>
							<div class="alp-nav-item alp-agenjawara align-items-center">
								<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenjawara.svg' ?>" />
								<span class="alp-nav-title">Agen Jawara</span>
							</div>
						</div>
					</div>
					<div class="col-1">
						<span class="dashicons dashicons-arrow-right-alt2 agent-nav-prev"></span>
					</div>
				</div>
				<div class="alp-subsc--form alp-form">
					<div class="wysiwyg" style="margin-top: 30px;">
						<?php echo $wysiwyg ?>
					</div>
				</div>
				<span class="image-slider__dots js-slider__dots"></span>
			</div>
				
			<div class="alp-agent-right col-6">
				<div class="agent-slider">
					<?php $agent_types = ['agen_pejuang', 'agen_unggulan', 'agen_jawara'] ?>
					<?php foreach ($agent_types  as $key => $agent_type): ?>	
						<?php $agent = get_field($agent_type) ?>
						
						<div class="alp-agent-by-month">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="alp-agent-item alp-agent-item-1">
										<div class="alp-agent-img">
											<img class="alp-agent-iimg" src="<?php echo $agent[0]['image']['sizes']['thumbnail'] ?>" />
											<img class="svg alp-agent-bg" src="<?php echo get_template_directory_uri() . '/assets/img/bubble.svg' ?>" />
											<span class="alp-agent-num">1</span>
										</div>
										<div><span><?php echo $agent[0]['name'] ?></span></div>
										<!-- <div><small><?php echo $agent[0]['trans_count'] ?> transaksi</small></div> -->
										<div><strong><?php echo $agent[0]['prize'] ?></strong></div>
									</div>
									<?php if (count($agent) >= 3): ?>
										<div class="alp-agent-item alp-agent-item-3">
											<div class="alp-agent-img">
												<img class="alp-agent-iimg" src="<?php echo $agent[2]['image']['sizes']['thumbnail'] ?>" />
												<img class="svg alp-agent-bg" src="<?php echo get_template_directory_uri() . '/assets/img/bubble.svg' ?>" />
												<span class="alp-agent-num">3</span>
											</div>
											<div><span><?php echo $agent[2]['name'] ?></span></div>
											<!-- <div><small><?php echo $agent[2]['trans_count'] ?> transaksi</small></div> -->
											<div><strong><?php echo $agent[2]['prize'] ?></strong></div>
										</div>
									<?php endif ?>
								</div>
								<div class="col-md-6">
									<?php if (count($agent) >= 2): ?>
										<div class="alp-agent-item alp-agent-item-2">
											<div class="alp-agent-img">
												<img class="alp-agent-iimg" src="<?php echo $agent[1]['image']['sizes']['thumbnail'] ?>" />
												<img class="svg alp-agent-bg" src="<?php echo get_template_directory_uri() . '/assets/img/bubble.svg' ?>" />
												<span class="alp-agent-num">2</span>
											</div>
											<div><span><?php echo $agent[1]['name'] ?></span></div>
											<!-- <div><small><?php echo $agent[1]['trans_count'] ?> transaksi</small></div> -->
											<div><strong><?php echo $agent[1]['prize'] ?></strong></div>
										</div>
									<?php endif ?>
								</div>
							</div>
						</div>
					<?php endforeach ?>

				</div>
			</div>
				

		</div>
	</div>
</div>

<?php break; ?>
<?php endforeach; ?>
<?php wp_reset_query(); ?>

<?php include 'part-agent-modal.php'; ?>

<style type="text/css">
	
</style>
<script type="text/javascript">
   	jQuery(document).ready(function($){
 		$('.agent-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.agent-nav-slider'
		});
		$('.agent-nav-slider').slick({
			asNavFor: '.agent-slider',
			dots: true,
			nextArrow:$('.agent-nav-next'),
			prevArrow:$('.agent-nav-prev'),
			appendDots:$('.js-slider__dots')
		});
    });
</script>