<?php 

/* Template Name: About Us */
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
<div class="alp-wrapper">
    <!-- 1. Static Page Title -->
    <div class="container-fluid d-flex section-static-title">
        <div class="row align-self-center m-auto">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
    <!-- /End 1. Static Page Title -->

    <div class="container section-static-content">
       <?php the_content() ?>
    </div>
</div>

<style type="text/css">
	.section-static-title {
		background: #2384DD;
		color: #FFF;

		min-height: 130px;
		margin-bottom: 30px;
	}
		.section-static-title h1 {
			font-size: 55px;
			font-family: 'SourceSansPro-SemiBold', sans-serif;
			font-weight: 500;
		}

	.section-static-content {
		margin-bottom: 30px;
	}
	.section-static-content h2 {
		font-size: 28px;
		font-family: 'SourceSansPro-SemiBold', sans-serif;
		font-weight: 500;
	}

	/* ------ static mobile ------ */
	@media (max-width: 767px) {
		.section-static-title h1 {
			font-size: 46px;
		}
	}
</style>
<!-- /End Content -->

<?php
get_footer();
