<!-- SEO Content Section -->

<div class="alp-testi bg-grey-absolute">
    <div class="container alp-section">
     
        <div class="testimonial-slider">
            <?php foreach ($section['testimonial'] as $key => $testimonial): ?>     
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2><?php echo 'Testimonial'  ?></h2>
                        <p class="alp-paragraph"><?php echo $testimonial['content'] ?></p> 
                        <h4><?php echo $testimonial['name'] ?></h4>
                    </div>
                    <div class="col-md-6">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                            <source media="(min-width: 992px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_210x158'] ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                            <source media="(min-width: 0px)" srcset="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>">
                            <img class="d-block w-100" src="<?php echo $testimonial['picture']['sizes']['alpay_350x263'] ?>" alt="">
                        </picture>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <div class="row alp-dotted">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                 <span class="image-slider__dots js-slider__dots"></span>
            </div>
        </div>
        <div class="row align-items-center">
           <div class="col-12">
                <?php if ($section['link_text']) {
                    $class = $section['link_class'];
                    echo '<a href="'.$section['link'].'" class="alp-btn btn alp-btn-blue btn-effect '.$class.'">'.
                        $section['link_text'].
                    '</a>';
                } ?>
           </div>
        </div>

    </div>
</div>


<script type="text/javascript">
   jQuery(document).ready(function($){
      $('.testimonial-slider').slick({
        infinite: true,
        dots: true,
        nextArrow:$('.tenav-next'),
        prevArrow:$('.tenav-prev'),
        appendDots:$('.js-slider__dots')
      });
    });
</script>