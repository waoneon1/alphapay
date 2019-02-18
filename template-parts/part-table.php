<?php if (get_field('products')): ?> 
    <?php $prod_detail  = get_field('products')[0]['operator'] ?>
    <?php $multiple     = count($prod_detail) ?>
    <div class="alp-flex_product">

        <!-- Use navigation if multiple table -->
        <?php if ($multiple > 1): ?>   
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
        <?php endif ?>

        <div class="tab-content">
            <?php foreach ($prod_detail as $key => $prod): ?>
                <?php $pill_id = strtolower($prod['title']) ?>
                <?php $active = ($key == 0) ? 'active show' : '' ?>
                <div id="<?php echo $pill_id ?>" class='<?php echo "tab-pane fade in $active" ?>'>
                    <h3><?php echo $prod['title'] ?></h3>
                    <table class="table strip">
                        <?php alpay_product_theader(get_field('products')[0]) ?>
                        <?php foreach ($prod['items'] as $key => $items): ?>
                           <tr>
                                <?php foreach ($items as $key => $item): ?>
                                    <td><?php echo $item ?></td>
                                <?php endforeach ?>
                           </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>