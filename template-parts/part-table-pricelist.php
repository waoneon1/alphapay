<?php if (get_field('products')): ?> 
    <?php $prod_detail  = get_field('products')[0]['operator'] ?>
    <?php $multiple     = count($prod_detail) ?>

    <div class="alp-table">

        <div class="tab-content">
            <?php foreach ($prod_detail as $key => $prod): ?>
                <?php $pill_id = strtolower($prod['title']) ?>
                <?php $active = ($key == 0) ? 'active show' : '' ?>
                <div id="<?php echo $pill_id ?>" class='<?php echo "tab-pane fade in $active" ?>'>
                    <table class="table strip alp-table__in alp-bg-bluepurple">
                        <thead>
                            <?php alpay_product_theader(get_field('products')[0]) ?>
                        </thead>
                        <?php foreach ($prod['items'] as $key => $items): ?>
                           <tr>
                                <?php foreach ($items as $k => $item): ?>
                                    <td class="<?php echo 'alp-table__td--'.$k ?>">
                                        <?php echo $item ?>
                                    </td>
                                <?php endforeach ?>
                           </tr>
                        <?php endforeach ?>
                            <tr>
                                <td colspan="3">
                                    <small style="color: #a5a5a5"><span style="color: red"> * </span>Harga dapat berubah sewaktu-waktu tanpa pemberitahuan</small>
                                </td>
                            </tr>
                    </table>
                </div>
            <?php endforeach ?>
        </div>
    </div>

<?php endif ?>
