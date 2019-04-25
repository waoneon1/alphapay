<?php 

/* Template Name: Contact Us */
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

get_header();
?>

<!-- Content -->
<div class="alp-wrapper alp-contactus">

    <!-- Product Header Section -->
    <div class="alp-pheader container alp-section">
    	<div class="row">
	    	<div class="alp-pheader--desc col-md-6 col-12 alp-col">
                <h1>Hubungi Kami</h1>
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
    <style type="text/css">
    	.bgbluebox {
    		background-color: #F7F8FC;
    		width: 100%;
    		height: 85%;
    		position: absolute;
    		z-index: -1;
    		padding-top: 30px;
    	}
    </style>

    <!-- Our Journey -->
    <div class="alp-pcontent alp-section">
    	<div class="bgbluebox"></div>
    	<div class="container alp-padding">
	    	<div class="text-center">
	    		<h2>Layanan Pelanggan</h2>
	    		<p>Jika Anda mengalami kendala terkait transaksi di AlphaPay, Anda bisa langsung menghubungi layanan pelanggan (Customer Service) kami melalui:  </p>
	    	</div>
	        <div class="row">
	           <div class="col-md-4 col-12">
	               <div class="alp-boxnshadow">
	                    <h4>Jam Operational</h4>
	                    <p>07.00 - 23.00 WIB</p>
	               </div>
	           </div>
	           <div class="col-md-4 col-12">
	               <div class="alp-boxnshadow">
	                    <h4>Email</h4>
	                    <p>info@alphapay.id</p>
	               </div>
	           </div>
	           <div class="col-md-4 col-12">
	               <div class="alp-boxnshadow">
	                    <h4>Live Chat</h4>
	                    <p>Tersedia di aplikasi.</p>
	               </div>
	           </div>
	        </div>
	    </div>
    </div>
    

    <!-- Follow -->
    <div class="fullwidth-content">
	    <div class="alp-subsc row alp-section alp-follow">
	    	<div class="col-md-6 col-12 alp-subsc--left alp-row">
	    		<div>
	    			<h2>Follow kita di:</h2>
	    			<div class="alp-subsc--form alp-form">
	    				<div class="row">
	    					<div class="col-10 alp-boxnshadow">
		    					<div class="row">
		    						<div class="col-md-4">
						    			<span class="alp-roundshadow icon-fb">
						    				<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-fb.svg">
						    			</span>
		    						</div>
		    						<div class="col-md-8" style="padding-top: 12px;"><span>alphapay.id</span></div>
		    					</div>
		    				</div>
		    				<div class="col-10 alp-boxnshadow">
		    					<div class="row">
		    						<div class="col-md-4">
						    			<span class="alp-roundshadow icon-ig">
											<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-ig.svg">
						    			</span>
		    						</div>
		    						<div class="col-md-8" style="padding-top: 12px;"><span>alphapay.id</span></div>
		    					</div>
		    				</div>
		    				<div class="col-10 alp-boxnshadow">
		    					<div class="row">
		    						<div class="col-md-4">
						    			<span class="alp-roundshadow icon-gm">
											<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-gm.svg">
						    			</span>
		    						</div>
		    						<div class="col-md-8" style="padding-top: 12px;"><span>info@alphapay.id</span></div>
		    					</div>
		    				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6 col-12 alp-follow--right d-none d-md-block">
	    		&nbsp;
	    	</div>
	    </div>
	</div>
    
    <!-- Contact  -->
    <div class="alp-pcontent container alp-section">
        <div class="row">
        	<div class="col-md-5">
        		<h2>Kirim Pesan untuk Tim Kami</h2>
	    		<p>Jika Anda memiliki kritik, saran, atau penawaran kerja sama dengan AlphaPay, silakan kirimkan pesan untuk kami melalui form di samping.</p>
        	</div>
        	<div class="col-md-1"></div>
        	<div class="col-md-6">
        		<div class="alp-subsc--form alp-form">
        			<?php echo do_shortcode('[contact-form-7 id="442" title="Contact Us"]') ?>
        		</div>
        	</div>
    	</div>
    </div>

</div>
<!-- /End Content -->

<?php
get_footer();
