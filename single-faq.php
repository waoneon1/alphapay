<?php /* Template Name: FAQ */ ?>
<?php get_header() ?>

<?php $current_post_id = $post->post_name ?>

<?php 
    $args = array(
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_type' => 'faq',
        'posts_per_page' => -1
    );
$query = new WP_Query( $args );

?>
<div class="alp-wrapper alp-faq">  

    <!-- Product Header Section -->
    <div class="alp-pheader container alp-section">
        <div class="row">
            <div class="alp-pheader--desc col-md-6 col-12 alp-col">
                <h1>Pertanyaan yang sering diajukan</h1>
               <!--  <p>Lorem Ipsum dolor do amet</p> -->
            </div>
            <div class="alp-pheader--imgwrap col-md-6 col-12 alp-col">
                <picture>
                    <img 
                    src="<?php echo get_template_directory_uri() ?>/assets/img/contactus.png" 
                    srcset="<?php echo get_template_directory_uri() ?>/assets/img/contactus@2x.png 2x" alt="alphapay"
                    class="alp-cta--image">
                </picture>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="accordion">
         
            <?php foreach ($query->posts as $key => $post): ?>
                <?php setup_postdata($post);  ?>
                <?php $iscurrent = $current_post_id == $post->post_name ?>
                <div class="card <?php echo $iscurrent ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapse<?php echo $key ?>">
                    <div class="card-header" id="<?php echo $post->post_name ?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link">
                                <?php the_title() ?>
                            </button>         
                            <span class="carat dashicons dashicons-arrow-down-alt2"></span>         
                        </h5>
                    </div>

                    <div id="collapse<?php echo $key ?>" class="collapse <?php echo $iscurrent ? 'show' : '' ?>" aria-labelledby="<?php echo $post->post_name ?>" data-parent="#accordion">
                        <div class="card-body">
                            <div class="wysiwyg">
                                <?php the_field('wysiwyg') ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>

    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var current = "#<?php echo $current_post_id ?>"
        $('html, body').animate({
            scrollTop: $(current).offset().top
        }, 1000);
    });
</script>

<?php get_footer() ?>