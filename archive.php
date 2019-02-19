<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphapay
 */

get_header();
?>

<?php $arc_nav = get_field('archive_navigation', 'option'); ?>
<!-- archive header nav -->
<div class="alp-archive--header">
	<div class="container">
		<ul>
			<?php foreach ($arc_nav as $key => $term): ?>
				<li>
					<a href="<?php echo get_category_link($term->term_id) ?>">
						<?php echo $term->name ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>

<!-- Banner Carosel -->
<div class="alp-banner alp-sec-margin">
	<div class="alp-banner--bg container">
		
		<div id = "carouselwithIndicators" class = "carousel slide" data-ride = "carousel">
            <ol class = "carousel-indicators">
               <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
               <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
               <li data-target = "#carouselExampleIndicators" data-slide-to = "2s"></li>
            </ol>
            
            <div class =" carousel-inner">
               <div class = "carousel-item active">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide1.png" 
                     alt = "First slide">
               </div>
               
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide2.png" 
                     alt = "Second slide">
               </div>
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                     src = "https://www.tutorialspoint.com/bootstrap/images/slide3.png" 
                     alt = "Third slide">
               </div>
            </div>
            
            <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#carouselwithIndicators" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
        </div>

	</div>
</div>


<div class="alp-wrapper">

	<div class="alp-content container">
		<div class="row">
			<div class="col-md-8 col-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
				 				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>	
				 				<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
					 			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>		
					 			<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
				 				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>	
				 				<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
					 			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>		
					 			<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
				 				<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>	
				 				<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="alp-card">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/contentseo1.png' ?>">
							<div class="alp-card--content">
								<h2>How to Manage Your Audience in AlphaPay</h2>
					 			<p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do </p>		
					 			<a href="#" class="alp-card--btn">Baca Selanjutnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>

</div>

<?php
get_footer();
