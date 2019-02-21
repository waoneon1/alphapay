 <!-- Registrasi Section -->
<div class="alp-reg row alp-section">
	<div class="alp-reg--left bg-grey alp-col d-none d-md-block">
     <div class="alp-reg--cover">
     	<?php foreach ($section['Items'] as $key => $item): ?>
            <?php $i = $key + 1 ?>
        	<?php $init_img = ($i == 1) ? 'active' : '' ?>
            <img class="<?php echo "alp-reg--image$i alp-reg--image $init_img" ?>" 
            src="<?php echo $item['image']['url'] ?>" />
     	<?php endforeach ?>
     </div>
	</div>
	<div class="alp-reg--right">
		<h2><?php echo $section['title'] ?></h2>
		<p>We offer a wide range of products and services that help our clients achieve their ambitions. Get to know our products further.</p>
		<!-- On PC -->
		<ul class="alp-reg--lists d-none d-md-block">
            <?php foreach ($section['Items'] as $key => $item): ?>
                <?php $i = $key + 1 ?>
                <?php $init_list = ($i == 1) ? 'active' : '' ?>
                <li class="<?php echo $init_list ?>" data-image="<?php echo "alp-reg--image$i" ?>">
                    <div class="alp-reg--number <?php echo "reg-type$i" ?>">
                        <span><?php echo $i ?></span>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/btn-reg1@2x.png' ?>">
                    </div>
                    <h3><?php echo $item['title'] ?></h3>
                    <?php echo $item['description'] ?>
                </li>
            <?php endforeach ?>
		</ul>

		<!-- ON Mobile -->
		<ul class="reg-slider d-md-none">
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

	</div>
</div>
<script type="text/javascript">
   jQuery(document).ready(function($){
      $('.reg-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });
    });
</script>