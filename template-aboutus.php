<?php 

/* Template Name: About Us */
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

get_header();
?>
<style type="text/css">
	.alp-timeline {
		text-align: center;
	}
	.alp-timeline .timeline-loop h3 {
		font-size: 18px;
	}
	.alp-timeline .left {
		border-right: 3px solid #D0D3E0;
	}
	.alp-timeline .line-bottom {
		border-bottom: 3px solid #D0D3E0;
		height: 30px;
		position: relative;
	}
	.alp-timeline .line-bottom:after {
		content: '';
		display: block;
		position: absolute;
		right: -7px;
	    top: 22px;
		border-radius: 50%;
		width: 12px;
		height: 12px;
		background-color: #2196F3;
		border: 2px solid #fff;
	}
	.alp-timeline .right .line-bottom:after {
		left: -7px;
	}
	.alp-timeline .timeline-loop .first  {
		padding-top: 40px;
	}
	.alp-bluebg {
		background-color: #F7F8FC;
	}
	.alp-bluebg,
	.alp-map {
		padding: 50px 25px;
	}

</style>

<!-- Content -->
<div class="alp-wrapper alp-about">
    <!-- Product Header Section -->
    <div class="alp-pheader container alp-section">
    	<div class="row">
	    	<div class="alp-pheader--desc col-md-6 col-12 alp-col">
                <h1>Tentang AlphaPay</h1>
                <p>Kami menyediakan solusi praktis bagi Anda yang ingin berbisnis pulsa & PPOB.</p>
	    	</div>
	    	<div class="alp-pheader--imgwrap col-md-6 col-12 alp-col">
                <picture>
                    <img 
                    src="<?php echo get_template_directory_uri() ?>/assets/img/about.png" 
                    srcset="<?php echo get_template_directory_uri() ?>/assets/img/about@2x.png 2x" alt="alphapay"
                    class="alp-cta--image">
                </picture>
	    	</div>
    	</div>
    </div>

    <!-- TIMELINE HISTORY -->
    <div class="alp-timeline container alp-section">
    	<div class="text-center">
    		<h2>Apa Itu AlphaPay?</h2>
    		<p>AlphaPay adalah sebuah perusahaan atau start up berbasis teknologi yang menyediakan platform berupa aplikasi untuk berjualan pulsa & PPOB khusus bagi Anda yang memiliki niat atau ingin memulai bisnis keagenan. </p>
    	</div>
    	<!-- loop -->
    	<div class="row text-left timeline-loop timeline-loop">
    		<div class="col-6 left first">
    			<div class="row">
    				<div class="col-10">
    					<div class="row">
    						<div class="col-md-9">
    							<h3>AlphaPay Didirikan Sejak 2018</h3>
    							<p>Sebelum resmi dirilis pada Desember 2018, kami sudah meluncurkan aplikasi keagenan untuk perorangan di beberapa wilayah di Indonesia. </p>
    						</div>
    						<div class="col-md-3">
    							<picture>
								  <img 
								  	src="<?php echo get_template_directory_uri() ?>/assets/img/h-story.png" 
								  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/h-story@2x.png 2x" alt="alphapay">
								</picture>
    						</div>
    					</div>
    				</div>
    				<div class="col-2 line-bottom"></div>
    			</div>
    		</div>
    		<div class="col-6 right"></div>
    	</div>
    	<!-- loop -->
    	<div class="row text-left timeline-loop">
    		<div class="col-6 left"></div>
    		<div class="col-6 right">
    			<div class="row">
    				<div class="col-2 line-bottom"></div>
    				<div class="col-10">
    					<div class="row">
    						<div class="col-md-3">
    							<picture>
								  <img 
								  	src="<?php echo get_template_directory_uri() ?>/assets/img/h-visi.png" 
								  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/h-visi@2x.png 2x" alt="alphapay">
								</picture>
    						</div>
    						<div class="col-md-9">
    							<h3>Visi & Misi Kami</h3>
    							<p>Melihat besarnya antusiasme serta pangsa pasar pulsa & PPOB, kami bertujuan menyediakan satu platform dengan banyak produk, yang dapat memudahkan banyak orang dari berbagai kalangan untuk memulai bisnis pulsa & PPOB. Modal minimal, untung maksimal!</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- loop -->
    	<div class="row text-left timeline-loop">
    		<div class="col-6 left">
    			<div class="row">
    				<div class="col-10">
    					<div class="row">
    						<div class="col-md-9">
    							<h3>Platform & Layanan Kami</h3>
    							<p>Per Desember 2018, AlphaPay resmi dirilis di Google Play Store dan dapat diunduh secara gratis. Kami menyediakan berbagai produk digital dengan sistem deposit untuk transaksi.</p>
    						</div>
    						<div class="col-md-3">
    							<picture>
								  <img 
								  	src="<?php echo get_template_directory_uri() ?>/assets/img/h-channel.png" 
								  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/h-channel@2x.png 2x" alt="alphapay">
								</picture>
    						</div>
    					</div>
    				</div>
    				<div class="col-2 line-bottom"></div>
    			</div>
    		</div>
    		<div class="col-6 right"></div>
    	</div>
    </div>

    <!-- PRODUCT ALPHAPAY -->
    <div class="alp-bluebg container-flued">
    	<div class="row">
    		<div class="col-md-4">
    			<img src="<?php echo get_template_directory_uri() ?>/assets/img/prod-about-1.svg" />
    		</div>
    		<div class="col-md-4 text-center alp-bluebg--title">
    			<h2>Berbagai Produk di AlphaPay</h2>
    			<p>Mulai dari pulsa, paket data & roaming, token PLN, voucher game, hingga aneka pembayaran BPJS Kesehatan, Telkom, PDAM, cicilan,listrik, hingga telepon pascabayar.</p>
    		</div>
    		<div class="col-md-4">
    			<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/prod-about-2.svg" />
    		</div>
    	</div>
    </div>

    <!-- MAP -->
    <div class="alp-map container">
    	<div class="row">
    		<div class="col-md-6">
    			<img class="svg w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/indonesia.svg">
    		</div>
    		<div class="col-md-6">
    			<h2>Kantor AlphaPay</h2>
    			<p>Saat ini, kantor cabang AlphaPay ada di beberapa kota: Tangerang, Malang, Kediri, Karawang, Sidoarjo, Probolinggo, dan Serang.</p>
    			<!-- <a href="https://goo.gl/maps/sV4V465wPSAEMJ8S8" target="_blank" class="btn alp-btn-trans">Lihat Gmaps</a> -->
    		</div>
    	</div>
    </div>
</div>


<!-- /End Content -->

<?php
get_footer();
