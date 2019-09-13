 <!-- Registrasi Section -->


<?php  
    if ($section['theme'] == 2) {
        $theme['num_img']   = 'regbg@2x.png';
        $theme['cta']       = 2;
    } else {
        $theme['num_img']   = 'btn-reg1@2x.png';
        $theme['cta']       = true;
    }
?> 
<div class="alp-reg row alp-section align-items-center <?php echo 'alp-theme-'.$section['theme'] ?> bg-grey" id="alp-register">
	<div class="alp-reg--left alp-col d-none d-md-block">
        <div class="alp-reg--bg">
           
        </div>
        <div class="alp-reg--cover">
        	<?php foreach ($section['Items'] as $key => $item): ?>
                <?php $i = $key + 1 ?>
            	<?php $init_img = ($i == 1) ? 'active' : '' ?>
                <img class="<?php echo "alp-reg--image$i alp-reg--image $init_img" ?>" 
                src="<?php echo $item['image']['url'] ?>" />
        	<?php endforeach ?>
            <img class="regbg regbg1" src="<?php echo get_template_directory_uri() . '/assets/img/regbg.png' ?>">
            <img class="regbg regbg2" src="<?php echo get_template_directory_uri() . '/assets/img/regbg.png' ?>">
            <img class="regbg regbg3" src="<?php echo get_template_directory_uri() . '/assets/img/regbg.png' ?>">
        </div>
	</div>
	<div class="alp-reg--right">
		<h2><?php echo $section['title'] ?></h2>

		<?php if ($section['description']): ?>
            <span><?php echo $section['description'] ?></span>
        <?php endif ?>
       
        <div style="margin-top: 30px;"></div>
		<!-- On PC -->
		<ul class="alp-reg--lists d-none d-md-block">
            <?php foreach ($section['Items'] as $key => $item): ?>
                <?php $i = $key + 1 ?>
                <?php $init_list = ($i == 1) ? 'active' : '' ?>
                <li class="<?php echo $init_list ?>" data-image="<?php echo "alp-reg--image$i" ?>">
                    <div class="alp-reg--number <?php echo "reg-type$i" ?>">
                        <span><?php echo $i ?></span>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/'.$theme['num_img'] ?>">
                    </div>
                    <h3><?php echo $item['title'] ?></h3>
                    <?php echo $item['description'] ?>
                </li>
            <?php endforeach ?>
		</ul>

		<!-- ON Mobile -->
		<ul class="reg-slider<?php echo $flex_count ?> d-md-none">
            <?php foreach ($section['Items'] as $key => $item): ?>
                <?php $i = $key + 1 ?>
        		<li>
        			<div class="alp-reg--simg">
        				<img class="alp-reg--image" src="<?php echo $item['image']['url'] ?>" />
        			</div>
        			<div class="alp-reg--content">
        				<div class="alp-reg--number <?php echo "reg-type$i" ?>">
        					<span><?php echo $i; ?></span>
        					<img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
        				</div>
        				<h3><?php echo $item['title'] ?></h3>
        				<?php echo $item['description'] ?>
        			</div>
        		</li>
            <?php endforeach ?>
		</ul>

        <?php if ($theme['cta'] === 2): ?> 
            <a href="<?php the_field('cta_link') ?>" class="js-fbpixle alp-btn btn alp-btn-blue btn-effect cta-download cta-download-<?php echo $post->post_name ?>-desktop-tengah">
                <img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/android.svg' ?>">
                Download Sekarang
            </a>
        <?php else: ?>
            <a href="<?php the_field('cta_link') ?>" class="js-fbpixle cta-download cta-download-homepage-desktop-tengah">
                <img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/android.svg' ?>">
                Download Sekarang
            </a>
        <?php endif ?>

	</div>
</div>

<style type="text/css">
    .alp-theme-2 .alp-reg--right,
    .alp-theme-2.bg-grey {
        background-color: transparent;
        background: transparent;
    }
    .alp-theme-2 h1,
    .alp-theme-2 h2,
    .alp-theme-2 h3,
    .alp-theme-2 span,
    .alp-theme-2 p {
        color: #19345E;
        z-index: 1;
    }
    .alp-theme-2 .alp-reg--number span {
        color: #2384DD;
    }
    .alp-theme-2 .alp-reg--number img {
        opacity: 0.22;
    }
    .alp-theme-2 .alp-reg--image {
        border: 0;
        border-radius: none;
        box-shadow: none;
    }
    .alp-theme-2 .alp-reg--image.active {
        width: auto;
    }
</style>

<script type="text/javascript">
   jQuery(document).ready(function($){
      $('.reg-slider<?php echo $flex_count ?>').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false
      });      
    });
</script>