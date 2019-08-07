 <!-- Product Section -->
<div class="alp-product container alp-section">
 	<div class="alp-product--title alp-title">
 		<h2><?php echo $section['title']; ?></h2>
 		<?php echo $section['description'] ?>
 	</div>
 	<?php if (isset($section['list_type']) && $section['list_type'] == 'price'): ?>
 		<?php include 'part-price-list.php'; ?>
 	<?php else: ?>
 		<?php include 'part-product-list.php'; ?>
 	<?php endif ?>
</div>