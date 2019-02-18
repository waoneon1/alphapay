<?php /* Template Name: Produk */ ?>
<?php get_header() ?>

<?php $front_id = get_option( 'page_on_front' ); ?>
<?php $post = get_field('produk_page', 'option'); ?>
<?php setup_postdata( $post ) ?>
<?php  
	$product_list = get_terms([
	    'taxonomy' => 'jenis_produk',
	    'hide_empty' => false,
	]);
?>

<div class="alp-wrapper">

    <!-- Product Header Section -->
    <div class="alp-pheader container alp-section">
    	<div class="row">
	    	<div class="alp-pheader--desc col-md-5 col-12 alp-col">
	    		<h2><?php the_field('subtitle') ?></h2>
	    		<h1><?php the_title() ?></h1>
	    	</div>
	    	<div class="alp-pheader--imgwrap col-md-7 col-12 alp-col">
	    		<img src="<?php echo get_template_directory_uri() . '/assets/img/prod_banner.png' ?>" class="alp-cta--image">
	    		<!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/prod_banner.png' ?>" class="alp-cta--homebg"> -->
	    	</div>
    	</div>
    </div>

    <!-- Content Section -->
    <div class="alp-pcontent container alp-section">
    	<div class="row">
    		<div class="alp-pcontent--side col-md-4 col-12">
                <?php 
                $inner_query = new WP_Query(array(
                    'p'         => $front_id, // ID of a page, post, or custom type
                    'post_type' => 'page'
                ));

                while ($inner_query->have_posts()) :
                    $inner_query->the_post(); ?>

                    <?php foreach (get_field('flexible_section') as $key => $flex): ?>
                        <?php if ($flex['acf_fc_layout'] == 'product_section'): ?>
                            <ul class="list-group">
                                <li class="list-group-item active alp-pcontent--sidetitle">Kategori</li>
                                <?php foreach ($flex['Items'] as $key => $prod_object): ?>
                                    <?php $product = $prod_object['jenis_produk'] ?>
                                    <?php $product_object = $prod_object['product_object'] ?>
                                    <?php $term_vals = get_term_meta($product->term_id, 'category-image-id', true) ?>
                                    <li class="list-group-item">
                                        <?php echo ($product_object) ? '<a href="'.get_permalink($product_object->ID).'">' : '' ?>
                                            <img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/'.$term_vals ?>">
                                            <span><?php echo $product->name ?></span>   
                                        <?php echo ($product_object) ? '</a>' : '' ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    <?php endforeach ?>

                <?php endwhile; ?>
    			<?php wp_reset_query(); ?>
    		</div>
    		<div class="alp-pcontent--main col-md-8 col-12">
    			<h2><?php the_field('content_title') ?></h2>
    			<?php the_content() ?>
                <?php include get_template_directory() . '/template-parts/part-table.php' ?>
    		</div>
    	</div>
    </div>

</div>

<?php get_footer() ?>