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

    <!-- Content Section -->
    <div class="alp-pcontent container alp-subloc">
        <div class="row">
           <div class="col-md-6 col-12">
               <div class="alp-boxnshadow">
                    <picture>
                        <img 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/ben_sub.png"
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/ben_sub.png" >
                    </picture>
                    <h4>Berlangganan Newsletter AlphaPay</h4>
                    <p>Jadilah yang pertama untuk mengetahui info terkini bisnis pulsa dan PPOB dari AlphaPay dengan berlangganan newsletter secara GRATIS.</p>
                    <div class="alp-form-wrap">
                        <div class="alp-form">
                            <?php echo do_shortcode(get_field('shortcode')) ?>
                        </div>
                    </div>
               </div>
           </div>
           <div class="col-md-6 col-12">
                <div class="alp-boxnshadow">
                    <picture>
                        <img 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/ben_loc.png"
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/ben_loc@2x.png 2x" >
                    </picture>
                    <h4>Kantor Cabang AlphaPay di Kota Anda</h4>
                    <p style="margin-bottom: 25px;">Kunjungi kantor cabang AlphaPay terdekat di kota Anda untuk mendapatkan informasi yang dibutuhkan.</p>
                    <div class="alp-form-wrap">
                        <div class="alp-form form-group">
                            <select class="form-control" id="alp-city">
                                <option value=""> Pilih Kota </option>
                                <?php foreach (get_field('list_alamat') as $key => $list_alamat) : ?>
                                    <option value="<?php echo strtolower($list_alamat['city']) ?>">
                                        <?php echo $list_alamat['city'] ?>    
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                   
                    <?php foreach (get_field('list_alamat') as $key => $list_alamat): ?>
                        <p class="alp-loc" id="<?php echo strtolower($list_alamat['city']) ?>">
                            <?php echo $list_alamat['address'] ?>     
                        </p>
                    <?php endforeach ?>
                </div>
           </div>
        </div>
    </div>

</div>

<?php get_footer() ?>