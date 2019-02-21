<?php

/**
 * Plugin class
 **/
if ( ! class_exists( 'CT_TAX_META' ) ) {

class CT_TAX_META {

  public function __construct() {
    //
  }
 
 /*
  * Initialize the class and start calling our hooks and filters
  * @since 1.0.0
 */
 public function init() {
   add_action( 'jenis_produk_add_form_fields', array ( $this, 'add_category_image' ), 10, 2 );
   add_action( 'created_jenis_produk', array ( $this, 'save_category_image' ), 10, 2 );
   add_action( 'jenis_produk_edit_form_fields', array ( $this, 'update_category_image' ), 10, 2 );
   add_action( 'edited_jenis_produk', array ( $this, 'updated_category_image' ), 10, 2 );
   add_action( 'admin_enqueue_scripts', array( $this, 'load_media' ) );
   add_action( 'admin_footer', array ( $this, 'add_script' ) );
 }

public function load_media() {
  wp_enqueue_media();
}
 
 /*
  * Add a form field in the new category page
  * @since 1.0.0
 */
 public function add_category_image ( $taxonomy ) { ?>

   <div class="form-field term-group">
     <label for="category-image-id"><?php _e('Image SVG URL', 'hero-theme'); ?></label>
     <input type="text" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
   </div>
   <div class="form-field term-group">
     <label for="product-object-id"><?php _e('Produk Page', 'hero-theme'); ?></label>
     <select name="product-object-id">
        <option> - select produk - </option>
        <?php 
              $query = new WP_Query(array(
                  'post_type' => 'produk'
              ));

              while ($query->have_posts()) :
                $query->the_post(); ?>

                <option value="<?php the_ID() ?>">
                  <?php the_title() ?>
                </option>


              <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </select>

   </div>
  <?php
 }
 
 /*
  * Save the form field
  * @since 1.0.0 
 */
 public function save_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     add_term_meta( $term_id, 'category-image-id', $image, true );
    }
    if ( isset( $_POST['product-object-id'] ) && '' !== $_POST['product-object-id'] ) {
     $prod  = $_POST['product-object-id'];
     add_term_meta( $term_id, 'product-object-id', $prod, true );
    }
 }
 
 /*
  * Edit the form field
  * @since 1.0.0
 */
 public function update_category_image ( $term, $taxonomy ) { ?>
   <tr class="form-field term-group-wrap">
     <th scope="row">
       <label for="category-image-id"><?php _e( 'Image SVG URL', 'hero-theme' ); ?></label>
     </th>
     <td>
       <?php $image_id = get_term_meta ( $term -> term_id, 'category-image-id', true ); ?>
          <input type="text" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
          <p class="description">Input the svg file name. Upload on assets/img/</p>
     </td>
   </tr>
   <tr class="form-field term-group-wrap">
     <th scope="row">
        <label for="product-object-id"><?php _e('Produk Page', 'hero-theme'); ?></label>
     </th>
     <td>
        <?php $prod_id = get_term_meta ( $term -> term_id, 'product-object-id', true ); ?>
        <select name="product-object-id">
           <option> - select produk - </option>
           <?php 
              $query = new WP_Query(array(
                 'post_type' => 'produk'
              ));

              while ($query->have_posts()) :
               $query->the_post(); ?>

               <option value="<?php the_ID() ?>" <?php echo ($prod_id == $query->post->ID) ? 'selected="selected"' : '' ?>>
                 <?php the_title() ?>
               </option>

              <?php endwhile; ?>
           <?php wp_reset_query(); ?>
        </select>
     </td>
   </tr>
 <?php
 }

/*
 * Update the form field value
 * @since 1.0.0
 */
 public function updated_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     update_term_meta ( $term_id, 'category-image-id', $image );
   } else {
     update_term_meta ( $term_id, 'category-image-id', '' );
   }

   if( isset( $_POST['product-object-id'] ) && '' !== $_POST['product-object-id'] ){
     $image = $_POST['product-object-id'];
     update_term_meta ( $term_id, 'product-object-id', $image );
   } else {
     update_term_meta ( $term_id, 'product-object-id', '' );
   }
 }

/*
 * Add script
 * @since 1.0.0
 */
 public function add_script() { ?>
   <script>
     jQuery(document).ready( function($) {
       function ct_media_upload(button_class) {
         var _custom_media = true,
         _orig_send_attachment = wp.media.editor.send.attachment;
         $('body').on('click', button_class, function(e) {
           var button_id = '#'+$(this).attr('id');
           var send_attachment_bkp = wp.media.editor.send.attachment;
           var button = $(button_id);
           _custom_media = true;
           wp.media.editor.send.attachment = function(props, attachment){
             if ( _custom_media ) {
               $('#category-image-id').val(attachment.id);
               $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
               $('#category-image-wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
             } else {
               return _orig_send_attachment.apply( button_id, [props, attachment] );
             }
            }
         wp.media.editor.open(button);
         return false;
       });
     }
     ct_media_upload('.ct_tax_media_button.button'); 
     $('body').on('click','.ct_tax_media_remove',function(){
       $('#category-image-id').val('');
       $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
     });
     // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
     $(document).ajaxComplete(function(event, xhr, settings) {
       var queryStringArr = settings.data.split('&');
       if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
         var xml = xhr.responseXML;
         $response = $(xml).find('term_id').text();
         if($response!=""){
           // Clear the thumb image
           $('#category-image-wrapper').html('');
         }
       }
     });
   });
 </script>
 <?php }

  }
 
$CT_TAX_META = new CT_TAX_META();
$CT_TAX_META -> init();
 
}