<?php 

/* Template Name: About Us */
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

get_header
();
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
		height: 50%;
		position: relative;
	}
	.alp-timeline .line-bottom:after {
		content: '';
		display: block;
		position: absolute;
		right: -7px;
		top: -4px;
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
                <p>Bergabung menjadi Agen Alphapay</p>
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
    		<h2>Our Journey thus far</h2>
    		<p>We offer a wide range of products and services that help our clients achieve their ambitions. Get to know our products further.</p>
    	</div>
    	<!-- loop -->
    	<div class="row text-left timeline-loop timeline-loop">
    		<div class="col-6 left first">
    			<div class="row">
    				<div class="col-10">
    					<div class="row">
    						<div class="col-md-9">
    							<h3>AlphaPay berdiri pada tahun 2018</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed adipiscing elit, sed</p>
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
								  	src="<?php echo get_template_directory_uri() ?>/assets/img/h-channel.png" 
								  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/h-channel@2x.png 2x" alt="alphapay">
								</picture>
    						</div>
    						<div class="col-md-9">
    							<h3>Channel Alphapay</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed adipiscing elit, sed</p>
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
    							<h3>Visi & Misi Alphapay</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed adipiscing elit, sed</p>
    						</div>
    						<div class="col-md-3">
    							<picture>
								  <img 
								  	src="<?php echo get_template_directory_uri() ?>/assets/img/h-visi.png" 
								  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/h-visi@2x.png 2x" alt="alphapay">
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
    		<div class="col-md-4"></div>
    		<div class="col-md-4 text-center">
    			<h2>Produk di AlphaPay</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    		</div>
    		<div class="col-md-4"></div>
    	</div>
    </div>

    <!-- MAP -->
    <div class="alp-map container">
    	<div class="row">
    		<div class="col-md-6">
    			<img class="svg w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/indonesia.svg">
    		</div>
    		<div class="col-md-6">
    			<h2>Lorem ipsu dolor do amet</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    			<a href="https://goo.gl/maps/sV4V465wPSAEMJ8S8" target="_blank" class="btn alp-btn-trans">Lihat Gmaps</a>
    		</div>
    	</div>
    </div>
</div>


<!-- /End Content -->

<?php
get_footer();
