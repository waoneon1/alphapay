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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
		
		<div class="container">
			<nav class="navbar navbar-expand-md">
				<div class="container">

					<a class="navbar-brand" href="<?php echo get_site_url() ?>"> 
						<picture>
						  <img 
						  	src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" 
						  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/logo@2x.png 2x" alt="alphapay">
						</picture>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
						<span class="navbar-toggler-icon">
			           		<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/burger.svg" alt="">
						</span>
					</button>

					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li>
								<a href="">
									<picture class="alp-btn-search" id="alp-header-search">
									  <img 
									  	src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" 
									  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/lsearch@2x.png 2x" alt="search" >
									</picture>
								</a>
							</li>
	                    	<?php foreach ($primary_parent as $key => $pparent): ?>
	                    		<?php if(isset($primary[$pparent->ID])) : ?>
			                        <li class="nav-item dropdown">
			                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			                                <?php echo $pparent->title ?>
			                                <img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/ceret.svg" alt="">
			                            </a>
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


		<style type="text/css">
			.alp-searchwrapper {
				height: 0;
				width: 100%;
				position: fixed; /* Stay in place */
				z-index: 9999; /* Sit on top */
				left: 0;
				top: 0;
				background-color: rgb(0,0,0); /* Black fallback color */
				background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
				overflow-x: hidden; /* Disable horizontal scroll */
				transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay */
			}
			.alp-search {
				padding: 0;
				transition: all 0.3s ease;
				background-color: #fff;
				height: 0;
				position: fixed;
				top: 27px;
				width: 100%;
				overflow: hidden;
			}
			.alp-searchwrapper.active .alp-search {
				padding: 30px 40px;
				height: auto;
				position: fixed;
				top: 0;
				width: 100%;
			}
			body.admin-bar .alp-searchwrapper.active .alp-search {
				top: 28px;
			}
			.alp-searchwrapper.active {
				height: 100%;
			}
			.alp-searchinner {
				width: 70%;
				margin:0 auto;
				text-align: center;
			}
			.alp-search input {
			    width: 70%;
			    font-size: 35px;
			    color: #D9D9D9;
			    border: 0;
			    outline: 0;
			}
			.alp-search ::-webkit-input-placeholder {
			  	color: #D9D9D9;
			}
			.alp-search .alp-s {
				position: relative;
				top: -5px;
			}
		</style>
		<div class="alp-searchwrapper">
			<div class="alp-search">
				<div class="alp-searchinner">
					<form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
						<picture class="alp-s">
						  <img 
						  	src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" 
						  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/search@2x.png 2x" alt="search" >
						</picture>
						<input type="text" class="alp-search--input" placeholder="Search" name="s" />
						<picture class="alp-s" id="alp-btn-close">
						  <img 
						  	src="<?php echo get_template_directory_uri() ?>/assets/img/cross.png" 
						  	srcset="<?php echo get_template_directory_uri() ?>/assets/img/cross@2x.png 2x" alt="search" >
						</picture>
					</form>
				</div>
			</div>
		</div>