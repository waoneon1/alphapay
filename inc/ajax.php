<?php

/**
 * TAXONOMY - JENIS PRODUK - POST SEARCH
 */
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}

( function($) {
	$(document).ready(function () {
		console.log($('.alp-search-post').length);
		$( 'body .alp-search-post' ).on('click', function( e ) {
  			e.preventDefault();
			console.log('click');
			console.log($(this).data('postid'));
		})
	});
} )(jQuery);

</script>

<?php
}

add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'post' ) );

    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
            <h2><div class="alp-search-post" data-postid="<?php the_ID() ?>"><?php the_title();?></div></h2>

        <?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}