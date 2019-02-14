<?php get_header() ?>
<?php $flex_content = get_field('flexible_section') ?>

<div class="alp-wrapper">
    
    <!-- CTA Download Section -->
    <div class="alp-cta container alp-section">
    	<div class="row">
	    	<div class="alp-cta--desc col-md-5 col-12 alp-col">
	    		<h1><?php the_field('title') ?></h1>
	    		<?php print_r(get_field('subtitle')) ?>
	    		<a href="<?php the_field('cta_link') ?>" class="alp-btn btn alp-btn-yellow">
	    			<?php the_field('cta') ?>
	    		</a>
	    	</div>
	    	<div class="alp-cta--imgwrap col-md-7 col-12 alp-col">
	    		<img src="<?php echo get_template_directory_uri() . '/assets/img/homepage.png' ?>" class="alp-cta--image">
	    		<img src="<?php echo get_template_directory_uri() . '/assets/img/homepage-bg.png' ?>" class="alp-cta--homebg">
	    	</div>
    	</div>
    </div>



	<?php foreach ($flex_content as $key => $flex): ?>
		<?php alpay_layout($flex) ?>
	<?php endforeach ?>



    <!-- Benefit Section -->]
   <!--  <div class="alp-benefit container alp-section">
		<div class="alp-benefit--title alp-title">
			<h1>Yuk Join AlphaPay dan Kembangkan Bisnis Kamu</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="alp-benefit--content">
			<div class="row">
				<?php for ($i=0; $i<3; $i++): ?>
					<?php $logo = ['lamp', 'gift', 'book'] ?>
					<div class="col-md-4 col-12 alp-col alp-benefit--item">
						<img src="<?php echo get_template_directory_uri().'/assets/img/'.$logo[$i].'.png' ?>">
						<h4>Custom Design</h4>
						<p>We're built in the cloud. Our API is always available, continuously upgraded,and auto-scales to meet your needs.</p>
					</div>
				<?php endfor ?>
			</div>
		</div>
    </div> -->

    <!-- Product Section -->
    <div class="alp-product container alp-section">
    	<div class="alp-product--title alp-title">
    		<h1>Daftar Produk AlphaPay</h1>
    		<p>We offer a wide range of products and services that help our clients achieve their ambitions. Get to know our products further.</p>
    	</div>
    	<div class="alp-product--lists">
    		<div class="row justify-content-center">
    			<?php for ($i=0; $i<10; $i++): ?>
    				<?php $y = $i + 1 ?>
	    			<div class="alp-product--list col-lg-3 col-md-4 col-sm-6 col-12 alp-col">
	    				<div class="alp-product--box">
	    						<div class="alp-product--box_title">
	    							<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/p'.$y.'.svg' ?>"> 
	    						<span>Pulsa</span>
	    						</div>
	    					<p>We're built in the cloud. Our API is always available, continuously upgraded</p>
	    				</div>
	    				<div class="alp-product--link">
	    					<a href="">
	    						Lihat Lebih Lanjut 
	    						<span class="dashicons dashicons-arrow-right-alt"></span> 
	    					</a>
	    				</div>
	    			</div>
    			<?php endfor ?>
    		</div>
    	</div>
    </div>

	
	<div class="fullwidth-content">	
		<!-- Registrasi Section -->
		<div class="alp-reg row alp-section">
			<div class="alp-reg--left bg-grey alp-col d-none d-md-block">
                <div class="alp-reg--cover">
                	<?php for ($i=1; $i <= 3; $i++): ?>
	                	<?php $init_img = ($i == 1) ? 'active' : '' ?>
	                    <img class="<?php echo "alp-reg--image$i alp-reg--image $init_img" ?>" 
	                    src="<?php echo get_template_directory_uri() . '/assets/img/mreg'.$i.'.png' ?>" />
                	<?php endfor ?>
                </div>
			</div>
			<div class="alp-reg--right">
				<h1>3 Langkah Mudah untuk Jadi Agen AlphaPay:</h1>
				<p>We offer a wide range of products and services that help our clients achieve their ambitions. Get to know our products further.</p>
				<!-- On PC -->
				<ul class="alp-reg--lists d-none d-md-block">
					<li class="active" data-image="alp-reg--image1">
						<div class="alp-reg--number reg-type1">
							<span>1</span>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
						</div>
						<h4>Download Aplikasi AlphaPay</h4>
						<p>Download aplikasi AlphaPay secara gratis melalui Google Play (khusus smartphone Android).</p>
					</li>
					<li data-image="alp-reg--image2">
						<div class="alp-reg--number reg-type2">
							<span>2</span>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
						</div>
						<h4>Registrasikan Akun Anda</h4>
						<p>Buat akun di AlphaPay dengan menggunakan nomor ponsel yang aktif, email, dan nama lengkap Anda. Registrasi tidak dikenakan biaya apapun.</p>
					</li>
					<li data-image="alp-reg--image3">
						<div class="alp-reg--number reg-type3">
							<span>3</span>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
						</div>
						<h4>Isi Saldo Deposit</h4>
						<p>Isi deposit minimal Rp100.000 dan langsung mulai jualan pulsa, paket data dan pembayaran online lainnya.</p>
					</li>
				</ul>

				<!-- ON Mobile -->
				<ul class="reg-slider d-md-none">
               		<li>
               			<div class="alp-reg--simg">
               				<img class="alp-reg--image" src="<?php echo get_template_directory_uri() . '/assets/img/mreg1.png' ?>" />
               			</div>
               			<div class="alp-reg--content">
               				<div class="alp-reg--number reg-type1">
               					<span>1</span>
               					<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
               				</div>
               				<h4>Download Aplikasi AlphaPay</h4>
               				<p>Download aplikasi AlphaPay ssecara gratis melalui Google Play (khusus smartphone Android).</p>
               			</div>
               		</li>
               		<li>
               			<div class="alp-reg--simg">
               				<img class="alp-reg--image" src="<?php echo get_template_directory_uri() . '/assets/img/mreg2.png' ?>" />
               			</div>
               			<div class="alp-reg--content">
               				<div class="alp-reg--number reg-type1">
               					<span>2</span>
               					<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
               				</div>
               				<h4>Registrasikan Akun Anda</h4>
               				<p>Buat akun di AlphaPay dengan menggunakan nomor ponsel yang aktif, email, dan nama lengkap Anda. Registrasi tidak dikenakan biaya apapun.</p>
               			</div>
               		</li>
               		<li>
               			<div class="alp-reg--simg">
               				<img class="alp-reg--image" src="<?php echo get_template_directory_uri() . '/assets/img/mreg3.png' ?>" />
               			</div>
               			<div class="alp-reg--content">
               				<div class="alp-reg--number reg-type1">
               					<span>3</span>
               					<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
               				</div>
               				<h4>Isi Saldo Deposit</h4>
               				<p>
               					Isi deposit minimal Rp100.000 dan langsung mulai jualan pulsa, paket data dan pembayaran online lainnya.
               				</p>
               			</div>
               			
               		</li>
				</ul>

			</div>
		</div>
		<script type="text/javascript">
		   jQuery(document).ready(function($){
		      $('.reg-slider').slick({
		        dots: true,
		        infinite: true,
		        speed: 300,
		        slidesToShow: 1,
		        adaptiveHeight: true
		      });
		    });
		</script>

		<!-- Subscribe Section -->
		<div class="alp-subsc row alp-section">
			<div class="col-md-6 col-12 alp-subsc--left alp-row">
				<div>
					<h1>Daftar Produk AlphaPay</h1>
	    			<p>We offer a wide range of products and services that help our clients achieve their ambitions. Get to know our products further.</p>
	    			<div class="alp-subsc--form alp-form">
	    				<input type="email" name="email" placeholder="Email Address">
		    			<input type="text" name="nohp" placeholder="Nomor handphone Anda">
		    			<a class="alp-btn btn alp-btn-yellow" href="">Daftarkan Saya</a>
	    			</div>
				</div>
			</div>
			<div class="col-md-6 col-12 alp-subsc--right d-none d-md-block">
				&nbsp;
			</div>
		</div>
	</div>

	<!-- SEO Content Section -->
    <div class="alp-seo container alp-section">
    	<!-- ON DESKTOP -->
		<div class="row">
			<div class="col-md-4 col-12 alp-seo--item alp-col d-none d-md-block">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
				<h4>How to Manage Your Audience in AlphaPay</h4>
				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>
			</div>
			<div class="col-md-4 col-12 alp-seo--item alp-col">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo2.png' ?>">
				<h4>AlphaPay Has a New Look</h4>
				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut abore</p>
			</div>
			<div class="col-md-4 col-12 alp-seo--item alp-col">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo3.png' ?>">
				<h4>New GDPR Forms, Improved Contact Management, and More</h4>
				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut abore</p>
			</div>
		</div>
    </div>
    <div class="alp-seo">
    	
    	<div class="content-slider d-md-none">
    		<div class="alp-seo--item alp-col">
    			<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
    			<h4>How to Manage Your Audience in AlphaPay</h4>
    			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>
    		</div>
    		<div class="alp-seo--item alp-col">
    			<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo2.png' ?>">
    			<h4>AlphaPay Has a New Look</h4>
    			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut abore</p>
    		</div>
    		<div class="alp-seo--item alp-col">
    			<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo3.png' ?>">
    			<h4>New GDPR Forms, Improved Contact Management, and More</h4>
    			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut abore</p>
    		</div>
    	</div>
    </div>

    <script type="text/javascript">
	   jQuery(document).ready(function($){
	      $('.content-slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows:false
	      });
	    });
	</script>

    <!-- Download Section -->
    <div class="fullwidth-content bg-grey">
	    <div class="alp-download container alp-section alp-last-section">
			<div class="row">
				<div class="col-md-5 col-12 alp-download--phone alp-col d-none d-md-block">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/phone.png' ?>">
				</div>
				<div class="col-md-7 col-12 alp-download--content">
					<h4>Download Aplikasi AlphaPay</h4>
					<p>Nikmati kemudahan bertransaksi hanya dari Smartphonemu</p>
					<a href="">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/google-play-badge.png' ?>">
					</a>
				</div>
			</div>	
		</div>
	</div>

</div>

<?php get_footer() ?>