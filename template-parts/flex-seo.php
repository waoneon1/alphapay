 <!-- SEO Content Section -->
 <div class="alp-seo container alp-section">
    <div class="alp-product--title alp-title">
        <h2><?php echo $section['title']; ?></h2>
        <?php echo $section['description'] ?>
    </div>
  	<!-- ON DESKTOP -->
    
 	<div class="row">
        <?php foreach ($section['choose_post'] as $key => $choose_post): ?>
            <div class="col-md-4 col-12 alp-seo--item alp-col">
                <a href="<?php echo get_permalink($choose_post['post']->ID) ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
                    <h2><?php echo $choose_post['post']->post_title ?></h2>
                    <?php echo alpay_blurb(20, $choose_post['post']->post_content) ?>
                 </a>
            </div>
        <?php endforeach ?>
 	</div>
 </div>
 <!-- <div class="alp-seo">
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
 </div> -->

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