<!-- SEO Content Section -->

<div class="alp-testi bg-grey-absolute">
    <div class="container alp-section">
     
        <div class="testimonial-slider">
            <?php foreach ($section['testimonial'] as $key => $testimonial): ?>     
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2><?php echo 'Testimonial'  ?></h2>
                        <p><?php echo $testimonial['content'] ?></p> 
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

<style type="text/css">
    .alp-testi {
        padding: 20px;
        position: relative;
    }
    .bg-grey-absolute:after {
        content: ' ';
        display: block;
        position: absolute;
        background-color: #f1f7fa;
        width: 100%;
        height: 100%;
        top: 0;
        left: -50px;
        z-index: -1;
    }
    .testimonial-slider {
        text-align: left;
    }
    .testimonial-slider.slick-dotted.slick-slider {
        margin-bottom: 5px;
    }
    .testimonial-slider .row.slick-slide {
        display: flex;
        padding-right: 30px;
        outline: none;
    }
    

    .image-slider__dots .slick-dots { 
        position: relative;
        bottom: 0;
        right: 0;
        width: auto;
        width: auto;
        text-align: left;
    }
    .image-slider__dots .slick-dots li { margin: 0 }
    .image-slider__dots .slick-dots li button:before { 
        color: transparent;
        background-color: #CCE7FF;
        opacity: 1;
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }
    .image-slider__dots .slick-dots li.slick-active button:before {
        color: transparent; 
        background-color: #2384DD;
        opacity: 1;
    }
    @media (max-width: 767px) {
        .alp-testi {
            margin-left: -15px;
            margin-right: -15px;
        }
        .bg-grey-absolute:after {
            content: ' ';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .slick-prev:before, .slick-next:before {
            color:#2884dd;
        }
    }

</style>


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