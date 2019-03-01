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
            <h1>Tentang Kami</h1>
        </div>
    </div>
    <!-- /End 1. Static Page Title -->

    <div class="container section-static-content">
        <h2>AlphaPay berdiri pada tahun 2018</h2>
        <p>Menawarkan cara yang modern dengan berbagai kelebihan kepada agen yang ingin mengembangkan bisnisnya dalam berjualan pulsa dan pembayaran online lainnya, hanya dengan melalui aplikasi AlphaPay yang tersedia gratis di Google PlayStore dan App Store.</p>

        <h2>Keuntungan</h2>
        <p>AlphaPay memberikan keuntungan bagi Anda yang bergabung menjadi agen AlphaPay, seperti pendaftaran yang tidak dipungut biaya alias gratis, harga yang murah sehingga memaksimalkan keuntungan Anda, serta proses transaksi yang cepat di aplikasi AlphaPay.</p>

        <h2>Maksimalkan Keuntungan</h2>
        <p>Pengguna AlphaPay dibagi menjadi dua yaitu, agen reguler dan agen premium. Dengan menjadi agen premium AlphaPay, Anda bisa lebih memaksimalkan keuntungan yang didapat.</p>

        <h2>Perluas Jangkauan</h2>
        <p>Program Agen premium AlphaPay memungkinkan para agennya memperluas jaringan bisnis dengan mencantumkan kode referral yang bisa memberikan Anda kesempatan untuk meraih keuntungan yang berlipat-ganda. Download aplikasi AlphaPay secara gratis sekarang, dan mulai dapatkan keuntungan setiap harinya bersama kami!</p>
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
