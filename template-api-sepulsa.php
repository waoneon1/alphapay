<?php /* Template Name: API Template */ ?>

<?php get_header() ?>

<div class="container">
	<div class="col-12">
		<h1 class="text-center">This is API</h1>
		<!-- wawan-wawan-wawan-wawan -->
		<?php $data_api = call_api('https://www.sepulsa.com/blog/wp-json/wp/v2/posts?per_page=3') ?>
		<!-- wawan-wawan-wawan-wawan -->

		<?php //print_r($data_api); ?>
	</div>
	<div class="row">
		<?php foreach ($data_api as $key => $obj): ?>
			<div class="col-md-4">
				<?php $img = call_api('https://www.sepulsa.com/blog/wp-json/wp/v2/media/'.$obj->featured_media) ?>
				<?php 
					$img_url = (isset($img->media_details->sizes->medium->source_url) && $img->media_details->sizes->medium->source_url) 
					? $img->media_details->sizes->medium->source_url 
					: $img->source_url;
				?>
				<img 
					src="<?php echo $img_url ?>" 
					alt="<?php echo $img->alt_text ?>"
				>
				<h4><?php echo $obj->title->rendered ?></h4>
				<?php echo $obj->excerpt->rendered ?>
				<a href="<?php echo $obj->link ?>">readmore >></a>
			</div>
		<?php endforeach ?>
	</div>
</div>

<?php 

function call_api($url) {

	//  Initiate curl
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Time out
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);

	// Execute
	$json=curl_exec($ch);

	// Closing
	curl_close($ch);

	$obj = json_decode($json);

	return $obj;
}
?>

<?php get_footer() ?>