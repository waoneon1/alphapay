<div class="alp-product--lists">
	<div class="row justify-content-center">

		<?php foreach ($section['Items'] as $key => $post): ?>
			<?php setup_postdata($post) ?>
				<?php $icon = get_term_meta(get_field('icon'), 'category-image-id', true) ?>
				<div class="alp-product--list col-lg-3 col-md-4 col-sm-6 col-3 alp-col">
					
					<a href="<?php echo get_permalink() ?>">
						<div class="alp-product--box">
							<?php if ($icon): ?>
								<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/'.$icon ?>">
							<?php endif ?>
    						<h3><?php echo the_title() ?></h3>	
	    				</div>
					</a>

					<div class="alp-product--link"> 
						<a href="<?php echo get_permalink() ?>">
							Lihat Lebih Lanjut 
							<span class="dashicons dashicons-arrow-right-alt"></span> 
						</a>
					</div>
				</div>
		<?php endforeach ?>
		<?php wp_reset_query() ?>
		
	</div>
</div>