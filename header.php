<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alphapay
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M2P594T');</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60070578-14"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-60070578-14');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- mailchimp -->
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/8eda164af89fe159f3143f721/662e507cf31202bbc94ac2ad4.js");</script>
</head>

<body <?php body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2P594T"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="app">
		<div class="app-container">

		<?php if (alpay_navigation('primary') ): ?>
			<?php foreach (alpay_navigation('primary') as $object): ?>
				<?php 
					if($object->menu_item_parent == 0) {
						$primary_parent[] = $object;
					} else {
						$primary[$object->menu_item_parent][] = $object;
					}
				?>
			<?php endforeach ?>
		<?php endif ?>
		
		<div class="container navbar-w100">
			<nav class="navbar navbar-expand-md" id="navbar">
				<div class="container" style="padding: 0;">

					<a class="navbar-brand" href="<?php echo get_site_url() ?>"> 
						<picture>
						  <img 
						  	src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" 
						  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/logo@2x.png 2x" alt="alphapay">
						</picture>
					</a>

					<!-- BURGER -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</button>

					<!-- SEARCH -->
					<?php if (is_singular('post') || is_category() || is_page('blog')): ?>
						<a href="" class="nav-search-m">
							<picture class="alp-btn-search" id="alp-header-search">
							  <img 
							  	src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" 
							  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/search@2x.png 2x" alt="search" >
							</picture>
						</a>
					<?php endif ?>

					<script type="text/javascript">
						jQuery(document).ready(function($){
							$('#nav-icon3').click(function(){
								$(this).toggleClass('open');
							});
						});
					</script>
					<style type="text/css">
						.navbar-nav {
							position: relative;
						}
						.wrap-nav-megamenu {
							position: unset;
						}
						.nav-megamenu {
							width: 100%;
							padding-left: 10px;
							padding-right: 10px;	
						}
					</style>
					<div class="collapse navbar-collapse alp-navbarcollapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<?php if (is_singular('post') || is_category() || is_page('blog')): ?>
								<li class="nav-search">
									<a href="">
										<picture class="alp-btn-search" id="alp-header-search">
										  <img 
										  	src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" 
										  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/search@2x.png 2x" alt="search" >
										</picture>
									</a>
								</li>
							<?php endif ?>
	                    	<?php foreach ($primary_parent as $key => $pparent): ?>
	                    		<?php if(isset($primary[$pparent->ID]) || $pparent->title == 'Blog') : ?>
	                    			<?php $megamenu = ($pparent->title == 'Blog') ? 'nav-megamenu' : '' ?>
			                        <li class="nav-item dropdown <?php echo "wrap-$megamenu" ?>">
			                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			                                <?php echo $pparent->title ?>
			                                <img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/ceret.svg" alt="">
			                            </a>

			                            <!-- HARDCODE PRODUCT CHILD -->
			                            <?php if ($pparent->post_title == 'Produk'): ?>

			                            	<?php 
			                            	$product_list = get_terms([
			                            	    'taxonomy' => 'jenis_produk',
			                            	    'hide_empty' => false,
			                            	]);
			                            	?>
			                            	<div class="dropdown-menu at-dropdown--menu">
				  								<?php foreach ($product_list as $prod): ?>
				  									<?php $prod_id = get_term_meta($prod->term_id, 'product-object-id', true) ?>
													<a class="dropdown-item" href="<?php echo get_permalink($prod_id) ?>">
													    <span class="ic-nav-dropdown">
													        <!-- - -->
													    </span>
													   <?php echo $prod->name ?>
													</a>
												<?php endforeach ?>
			                            	</div>
			                            <?php elseif($pparent->title == 'Blog') : ?>
			                            	<div class="dropdown-menu at-dropdown--menu <?php echo "$megamenu" ?>">
												<div class="row">
													<?php $all_cat = get_categories() ?>
													<?php foreach ($all_cat as $key => $cat): ?>
														<div class="col-md-3 col-6">
															<a class="dropdown-item" href="<?php echo get_permalink($cat->term_id) ?>">
															    <span class="ic-nav-dropdown">
															     	<?php echo $cat->name ?>
															    </span>
															</a>
														</div>
													<?php endforeach ?>
												</div>
			                            	</div>
			                            <?php else : ?>
			                            	<div class="dropdown-menu at-dropdown--menu">
				  								<?php foreach ($primary[$pparent->ID] as $p): ?>
													<a class="dropdown-item" href="<?php echo $p->url ?>">
													    <span class="ic-nav-dropdown">
													        <!-- - -->
													    </span>
													   <?php echo $p->title ?>
													</a>
												<?php endforeach ?>
			                            	</div>
			                            <?php endif ?>
			                            <!-- -|-|-|-|-|- -->

			                        </li>
		                        <?php else: ?>
		                        	 <li class="nav-item">
	                            		<a href="<?php echo $pparent->url ?>" class="nav-link"> 
	                            			<?php echo $pparent->title ?>
	                            		</a>
	                        		</li>
		                        <?php endif ?>
		                    <?php endforeach ?>
	                    </ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="alp-search">
			<div class="alp-searchinner">
				<form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" autocomplete="off">
					<picture class="alp-s">
					  <img 
					  	src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" 
					  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/search@2x.png 2x" alt="search" >
					</picture>
					<input type="text" class="alp-search--input" placeholder="Search" name="s" id="alp-search--input"/>
					<picture class="alp-s" id="alp-btn-close">
					  <img 
					  	src="<?php echo get_template_directory_uri() ?>/assets/img/cross.png" 
					  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/cross@2x.png 2x" alt="search" >
					</picture>
				</form>
			</div>
		</div>


