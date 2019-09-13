<?php /* Template Name: Landing - Facebook */ ?>

<?php get_header('embed') ?>

<?php $front_id = get_option( 'page_on_front' ); ?>
<?php $product_page = get_field('produk_page', 'option'); ?>
<?php //setup_postdata( $post ) ?>
<?php  
	$product_list = get_terms([
	    'taxonomy' => 'jenis_produk',
	    'hide_empty' => false,
	]);
    $current_id = $post->ID;

    $flex_content_front = get_field('flexible_section', get_option('page_on_front'));
    $flex_content       = get_field('flexible_section');
?>

<?php var_dump(get_field('cta_link')) ?>
<div class="alp-wrapper alp-fb-landing">
    <?php if (get_field('header_title')): ?>
        <div class="alp-fb-blue">
            <!-- Product Header Section -->
            <div class="alp-pheader container">
                <div class="row">
                    <div class="alp-pheader--desc col-md-7 col-12 alp-col">
                        <h1><?php the_field('header_title') ?></h1>
                        <p><?php the_field('subtitle') ?></p>

                        <p><a href="<?php the_field('cta_link') ?>" class="js-fbpixle alp-btn btn alp-btn-blue btn-effect cta-download-facebook-atas" target="_blank" style="display: inline-block;">
                            <?php echo get_field('cta_text') ? get_field('cta_text') : 'Download' ?>
                        </a></p>

                    </div>
                    <div class="alp-pheader--imgwrap col-md-5 col-12 alp-col">
                        <img src="<?php echo get_field('image')['url'] ?>" class="alp-cta--image">
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Flexible Content -->
    <?php $flex_count = 1; ?>
    <?php foreach ($flex_content as $key => $flex): ?>
        <?php alpay_layout($flex, false, array(), $flex_count) ?>
        <?php $flex_count++ ?>
    <?php endforeach ?>


    <script>
        $('.alp-btn').attr("onClick", "fbq('track', 'Conversion');");
    </script>

</div>

<?php get_footer('embed') ?>