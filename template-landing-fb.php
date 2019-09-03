<?php /* Template Name: Landing - Facebook */ ?>

<?php get_header() ?>

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

<div class="alp-wrapper alp-fb-landing">
   <div class="alp-fb-blue">
        <!-- Product Header Section -->
        <div class="alp-pheader container">
            <div class="row">
                <div class="alp-pheader--desc col-md-7 col-12 alp-col">
                    <h1><?php the_field('header_title') ?></h1>
                    <?php the_field('subtitle') ?>


                    <a href="<?php the_field('google_play_link') ?>" target="_blank">
                        <picture class="alp-pheader--android">
                            <img 
                            src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay">
                        </picture>
                    </a>

                </div>
                <div class="alp-pheader--imgwrap col-md-5 col-12 alp-col">
                    <img src="<?php echo get_field('image')['url'] ?>" class="alp-cta--image">
                </div>
            </div>
        </div>
    </div>

    <!-- Flexible Content -->
    <?php $flex_count = 1; ?>
    <?php foreach ($flex_content as $key => $flex): ?>
        <?php alpay_layout($flex, false, array(), $flex_count) ?>
        <?php $flex_count++ ?>
    <?php endforeach ?>


</div>

<?php get_footer() ?>