<?php /* Template Name: Landing - Sobat Retail */ ?>

<?php get_header() ?>


<!-- TOP TITLE -->
<?php 

    $postid     = $post->ID;
    $args = array(
        'post_parent' => $postid,
        'post_type'   => 'cara', 
        'numberposts' => -1,
        'order'       => 'ASC',
        'orderby'     => 'menu_order',
        'post_status' => 'publish'
    );
    $childrens = get_children( $args );
?>

<div class="alp-wrapper alp-howto">
    <!-- Product Header Section -->

    <div class="alp-fb-blue" style="padding: 20px 0 100px;
    background-color: rgba(27,117,187,.06);">
        <!-- Product Header Section -->
        <div class="alp-pheader container">
            <div class="row">
                <div class="alp-pheader--imgwrap col-md-5 col-12 alp-col">
                    <picture>
                        <img 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/howto.png" 
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/howto@2x.png 2x" alt="alphapay"
                        class="alp-cta--image">
                    </picture>
                </div>
                <div class="alp-pheader--desc col-md-7 order-md-first col-12 alp-col">
                    <h1><?php the_field('title') ?></h1>
                    <?php the_field('subtitle') ?>
                    <a href="<?php the_field('cta_download') ?>" target="_blank" 
                        class="<?php the_field('cta_classes') ?>">
                        <picture class="alp-pheader--android">
                            <img 
                            src="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge.png" 
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/gplay-badge@2x.png 2x" alt="download alphapay">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="alp-pcontent container alp-section" id="howto" style="max-width: 900px">
        <div class="row">
            <div class="col-md-12 col-12 alp-cara-howto" style="text-align: center;">
                <?php echo get_field('howto_title') ? '<h2>'.get_field('howto_title').'</h2>' : '' ?>
                <?php echo get_field('excerpt') ?>
            </div>
        </div>

        <?php $hows = get_field('how') ?>
        <?php if ($hows): ?>
            <?php foreach ($hows as $key => $how): ?>
                <?php $num = $key + 1; ?>
                <div class="row alp-cara-howto-loop">
                    <div class="col-md-6 alp-cara-howto-content <?php echo ($key%2) ? 'order-md-last' : '' ?>">
                        <div class="alp-reg--number large <?php echo "reg-type1" ?>">
                            <span><?php echo $num ?></span>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/btn-howto@2x.png' ?>">
                        </div>
                        <div class="double-column-meet">
                            <div class="deskrip-alterran">
                                <h3><?php echo $how['title'] ?></h3>
                                <?php echo $how['desc'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 <?php echo ($key%2) ? '' : 'order-md-first' ?>"></div>
                    <div class="col-md-5 <?php echo ($key%2) ? 'order-md-first' : 'order-md-last' ?>">
                        <div class="double-column-meet">
                            <div class="img-alterran">
                                <picture>
                                    <img src="<?php echo $how['image']['url'] ?>" 
                                         alt="<?php echo $how['image']['alt'] ?>">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($num != count($hows)): ?>
                    <div class="animate-arrow bounce alp-arrow">
                        <span class="dashicons dashicons-arrow-down-alt2"></span>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>
        <?php wp_reset_query() ?>

    </div>
    
    
</div>

<?php get_footer() ?>