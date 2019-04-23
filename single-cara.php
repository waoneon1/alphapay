<?php /* Template Name: How To */ ?>

<?php get_header() ?>

<?php $is_child     = $post->post_parent ?>
<?php $parent_obj   = get_post($post->post_parent) ?>

<!-- TOP TITLE -->
<?php 

    $current_active = $post;

    if ($is_child) {
        $post = $parent_obj;
        setup_postdata($post); 
    }  
        $postid     = $post->ID;
        $titleH1    = get_field('title');
        $titleH2    = get_field('subtitle');

    if ($is_child) wp_reset_query();

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
    <div class="alp-pheader container alp-section">
    	<div class="row">
	    	<div class="alp-pheader--desc col-md-6 col-12 alp-col">
                <h1><?php echo $titleH1 ?></h1>
                <p><?php echo $titleH2 ?></p>
	    	</div>
	    	<div class="alp-pheader--imgwrap col-md-6 col-12 alp-col">
                <picture>
                    <img 
                    src="<?php echo get_template_directory_uri() ?>/assets/img/howto.png" 
                    srcset="<?php echo get_template_directory_uri() ?>/assets/img/howto@2x.png 2x" alt="alphapay"
                    class="alp-cta--image">
                </picture>
	    	</div>
    	</div>
    </div>

    <!-- Content Section -->
    <div class="bluebox">
        <div class="alp-pcontent container">
            <div class="row justify-content-md-center">
                <?php $i = 0 ?>
                <?php foreach ($childrens as $key => $post): ?>

                    <?php $current_active = (!$is_child && $i == 0) ? $post : $current_active ?>
                    <?php setup_postdata( $post ) ?>
                    <?php $active = ($post->ID == $current_active->ID) ? 'active' : '' ?>

                    <?php if ($post): ?>
                        <div class="col-md-3 col-12 alp-col-tabs">
                            <a href="<?php the_permalink() ?>#howto">
                                <div class="alp-tabs <?php echo $active ?>">
                                    <h4><?php the_title() ?></h4>
                                </div>
                            </a>
                        </div>
                    <?php endif ?>
                <?php $i++; endforeach ?>
                <?php wp_reset_query(); ?>
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

        <?php $post = $current_active ?>
        <?php setup_postdata( $post ) ?>
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
            <?php endforeach ?>
        <?php endif ?>
        <?php wp_reset_query() ?>

    </div>
    
    
</div>

<?php get_footer() ?>