<?php foreach ($post_start as $key => $post): ?>
    <?php setup_postdata($post);  ?>
    <?php $prod_detail  = get_field('products')[0]['operator'] ?>
    <?php $multiple     = count($prod_detail) ?>

    <?php if ($multiple > 1): ?>   
        <div class="row">
            <div class="col-12 alp-pcontent--bg-lightblue alp-pcontent--bg-padding alp-pcontent--bg-radius-left">
                <div class="row">
                    <div class="col-md-10 col-12">
                        <!-- Use navigation if multiple table -->
                        
                            <ul class="nav nav-pills" style="margin-left: 0;">
                                <?php foreach ($prod_detail as $key => $prod): ?>
                                    <?php $active = ($key == 0) ? 'active show' : '' ?>
                                    <?php $pill_id = '#'.strtolower($prod['title']) ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $pill_id ?>" data-toggle="pill" 
                                            class='<?php echo "nav-link $active" ?>'>
                                            <?php echo $prod['title'] ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        
                    </div>
                    <div class="col-md-2 col-12 alp-hideonmobile">
                        <div class="row align-items-center" style="height: 100%">
                            <div class="col-12 text-right" style="padding-top: 4px;">
                                <img class="svg alp-pcontent--bg-lightblue-svg" src="<?php echo get_template_directory_uri() . '/assets/img/table-triangle.svg' ?>" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endif ?>
    
    <?php break; ?>
<?php endforeach; ?>
<?php wp_reset_query(); ?>