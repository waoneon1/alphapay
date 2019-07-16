 <!-- SEO Content Section -->

 <div class="alp-testi container alp-section">
    <div class="alp-product--title alp-title">
        <h2><?php echo $section['title']  ?></h2>
        <?php if ($section['description']): ?>
            <p><?php echo $section['description'] ?></p> 
        <?php endif ?>
    </div>
  	<!-- ON DESKTOP -->
   
 	<div class="row">
        <?php foreach ($section['testimonial'] as $key => $testimonial): ?>
            <div class="col-md-4 col-12 alp-testi--item alp-col">
                <picture>
                    <source media="(min-width: 1200px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                    <source media="(min-width: 992px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_210x158'] ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                    <source media="(min-width: 0px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                    <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url( $testimonial['post']->ID, 'alpay_350x263') ?>" alt="">
                </picture>
               
            </div>
        <?php endforeach ?>
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