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
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
						<span class="navbar-toggler-icon">
			           		<img class="svg" src="<?php echo get_template_directory_uri() ?>/assets/img/burger.svg" alt="">
						</span>
					</button>

					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
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
		                    <li class="nav-item">
                                <a href="<?php the_field('top_button_link', 'option') ?>" class="nav--border nav-link">
                                	<?php the_field('top_button', 'option') ?>
                                </a>
                            </li>
	                    </ul>
					</div>

				</div>
			</nav>
		</div>

