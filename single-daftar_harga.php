<?php 

/* Template Name: Price List */
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */
?>

<?php get_header(); ?>


<?php $front_id = get_option( 'page_on_front' ); ?>
<?php $product_page = get_field('produk_page', 'option'); ?>

<?php  
    $product_list = get_terms([
        'taxonomy' => 'jenis_produk',
        'hide_empty' => false,
    ]);
    $current_id = $post->ID;

    $flex_content_front = get_field('flexible_section', get_option('page_on_front'));
    $flex_content       = get_field('flexible_section');
?>

<div class="alp-wrapper">

    <!-- Product Header Section -->
    <div class="alp-pheader container alp-section">
        <div class="row">
            <div class="alp-pheader--desc col-md-5 col-12 alp-col">
                <?php echo (get_field('header_title')) ? '<h1>'.get_field('header_title').'</h1>' : '' ?>
                <?php echo (get_field('subtitle')) ? '<h2>'.get_field('subtitle').'</h2>' : '' ?>

                <a href="<?php echo $section['android_url'] ?>" target="_blank">
                    <picture class="alp-pheader--android">
                        <img 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay">
                    </picture>
                </a>

            </div>
            <div class="alp-pheader--imgwrap col-md-7 col-12 alp-col">
                <img src="<?php echo get_field('image')['url'] ?>" class="alp-cta--image">
                <!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/prod_banner.png' ?>" class="alp-cta--image"> -->
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
                    'post_type' => 'daftar_harga',
                    'post_per_page' => -1
                )); ?>

                <ul class="list-group showpc">
                    <li class="list-group-item active alp-pcontent--sidetitle">Kategori</li>
                    <?php while ($inner_query->have_posts()) :
                        $inner_query->the_post(); ?>
                        <li class="list-group-item">
                            <?php echo ($post->ID) ? '<a href="'.get_permalink($post->ID).'">' : '' ?>
                                <img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/'.$term_vals ?>">
                                <span><?php the_title() ?></span>   
                            <?php echo ($post->ID) ? '</a>' : '' ?>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
            <div class="alp-pcontent--main col-md-8 col-12">
                <?php if (get_field('content_title')): ?>
                    <h2><?php the_field('content_title') ?></h2>
                <?php endif ?>
                <?php the_content() ?>
                <?php include get_template_directory() . '/template-parts/part-table.php' ?>
            </div>
        </div>
    </div>

    <?php 
        echo '<div class="fullwidth-content bg-grey">';
            include get_template_directory() . '/template-parts/flex-download.php';
        echo '</div>';  
    ?>

</div>

<?php get_footer() ?>
