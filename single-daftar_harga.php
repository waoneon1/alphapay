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
    $current_id = $post->ID;

    $flex_content_front = get_field('flexible_section', get_option('page_on_front'));
    $flex_content       = get_field('flexible_section');
?>

<?php 
$inner_query = new WP_Query(array(
    'post_type' => 'daftar_harga',
    'post_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
)); ?>

<div class="alp-wrapper">

    <!-- Content Section -->
    <div class="container alp-section">
        <div class="row">

            <div class="col-md-5 col-12">
                <?php if (get_field('content_title')): ?>
                    <h2><?php the_field('content_title') ?></h2>
                <?php endif ?>
                <!-- the content -->
                <?php echo the_field('wysiwyg'); ?>
                <?php if (get_field('table_product')): ?>
                    <!-- if using table product -->
                    <?php $post_start = get_field('choose_product') ?>
                <?php else: ?>
                    <!-- if using table pricelist -->
                    <?php $post_start = $post ?>
                <?php endif ?>

                <?php include get_template_directory() . '/template-parts/part-table-pricelist-nav.php' ?>
            </div>

            <div class="alp-pcontent--bg-lightblue
            alp-pcontent--bg-radius-right
            col-md-7 col-12" style="min-height: 400px">
                <?php $alp_lock_filter = alp_lock_filter() ?>
                <?php if ($alp_lock_filter): ?>
                    <?php if (get_field('table_product')): ?>
                            <?php foreach (get_field('choose_product') as $key => $post): ?>
                                <?php setup_postdata($post);  ?>
                                <?php include get_template_directory() . '/template-parts/part-table-pricelist.php' ?>
                                <?php break; ?>
                            <?php endforeach; ?>
                            <?php wp_reset_query(); ?>
                    <?php else: ?>
                        <?php include get_template_directory() . '/template-parts/part-table-pricelist.php' ?>
                    <?php endif ?>
                <?php else: ?>
                    <?php include get_template_directory() . '/template-parts/part-table-locked.php' ?>
                <?php endif ?>
            </div>

        </div>

    </div>

    <?php 
        $section['title'] = get_field('daftar_harga_lain', 'option')['title'];
        $section['description'] = '<p>'.get_field('daftar_harga_lain', 'option')['description'].'</p>';
        $i = 0;
        while ($inner_query->have_posts()) :
            $inner_query->the_post();
            $section['Items'][$i] = $post;
            $i++;
        endwhile;
        wp_reset_query();
        // using list type : part-price-list.php
        $section['list_type'] = 'price';
    ?>
    <?php include get_template_directory() . '/template-parts/flex-product.php' ?>

    <div class="container text-center alp-section">
        <p><?php echo get_field('daftar_harga_lain', 'option')['bottom_description'] ?></p>

        <a href="<?php echo get_field('cta_daftar_harga', 'option') ?>" target="_blank">
            <picture>
              <img class="cta-download-daftarharga-bawah" 
                src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
                srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay"
                style="width: 150px;">
            </picture>
        </a>
    </div>
   
</div>

<?php 
function alp_lock_filter() {

    if (isset($_GET['app']) && $_GET['app']) {
        if (get_field('locked_key', 'option')) {
            if (get_field('locked_key', 'option') == $_GET['app']) {
                return true;
            }
        } else {
            return false;
        }
    } else {
        /* Its locked we will edit here (from web)
            - Unlock Product terlalir 
            - Lock All Category
        */
        if (get_field('lock_page')) {
            return false;
        } else {
            return true;
        }
    }
    
    
    // if true = from mobile
    
}
?>
<?php get_footer() ?>
