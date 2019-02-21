 <!-- Product Section -->
<div class="alp-product container alp-section">
 	<div class="alp-product--title alp-title">
 		<h2><?php echo $section['title']; ?></h2>
 		<?php echo $section['description'] ?>
 	</div>
 	<div class="alp-product--lists">
 		<div class="row justify-content-center">
 			<?php foreach ($section['Items'] as $key => $item): ?>
 					<?php $prod 		= $item['jenis_produk'] ?>
 					<?php $term_vals 	= get_term_meta($prod->term_id, 'category-image-id', true) ?>
 					<?php $prod_id 		= get_term_meta($prod->term_id, 'product-object-id', true) ?>
	    			<div class="alp-product--list col-lg-3 col-md-4 col-sm-6 col-3 alp-col">
	    				<div class="alp-product--box">
    						<div class="alp-product--box_title">
    							<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/'.$term_vals ?>">
	    						<h3><?php echo $prod->name ?></h3>
    						</div>
	    					<p><?php echo $prod->description ?></p>
	    				</div>

	    				<div class="alp-product--link"> 
	    					<?php if ($prod_id): ?>
	    						<a href="<?php echo get_permalink($prod_id) ?>">
	    							Lihat Lebih Lanjut 
	    							<span class="dashicons dashicons-arrow-right-alt"></span> 
	    						</a>
	    					<?php else:	 ?>
	    						Lihat Lebih Lanjut 
	    						<span class="dashicons dashicons-arrow-right-alt"></span> 
	    					<?php endif ?>
	    				</div>
	    			</div>
 			<?php endforeach ?>
 		</div>
 	</div>
</div>