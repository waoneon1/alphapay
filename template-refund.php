<?php /* Template Name: Refund */ ?>
<?php get_header() ?>

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alphapay
 */

get_header();

function splb_image_article() {
  global $post;

  $return['img_l']    = get_the_post_thumbnail_url($post->ID, 'alpay_1240x540');
  $return['img_m']    = get_the_post_thumbnail_url($post->ID, 'alpay_991x434');
  $return['img_s']    = get_the_post_thumbnail_url($post->ID, 'alpay_787x344');
  $return['thumbnail_id'] = get_post_thumbnail_id( $post->ID );
  $return['alt']      = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);

  return $return;
} 
$img = splb_image_article()
?>

<div class="alp-wrapper alp-single-promo">

  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-12">

        <!-- Banner Carosel -->
        <div class="alp-promobanner">
          <div class="alp-singlebanner--bg fullwidth-content">
            <div class="row">
              <picture>
                <source media="(min-width: 1200px)" srcset="<?php echo $img['img_l'] ?>">
                <source media="(min-width: 768px)" srcset="<?php echo $img['img_m'] ?>">
                <source media="(min-width: 0px)" srcset="<?php echo $img['img_s'] ?>">
                <img class="d-block w-100" src="<?php echo $img['img_l'] ?>" alt="">
              </picture>
            </div>
          </div>
        </div>

        <div class="inner-content"  style="margin-bottom: 30px;">
          <?php yoast_breadcrumb( '<nav aria-label="breadcrumb" class="alp-breadcrump">','</nav>' ); ?>
          <h1 class="promo-h1"><?php the_title() ?></h1>

          <!-- Content Here -->
          <div id="primary" class="content-area">
            <main id="main" class="site-main">
              <div class="wysiwyg">
               <?php the_content() ?>
              </div>
            </main>
          </div>
        </div>

      </div>

    </div>
  </div>

</div>

<?php
get_footer();
