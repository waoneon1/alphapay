<?php if (get_field('products')): ?> 
    <?php $prod_detail  = get_field('products')[0]['operator'] ?>
    <?php $tr = 7 ?>
    <?php $td = 3 ?>

    <div class="alp-table">

        <div class="tab-content alp-table-locked">
            <?php foreach ($prod_detail as $key => $prod): ?>
                <?php $pill_id = strtolower($prod['title']) ?>
                <?php $active = ($key == 0) ? 'active show' : '' ?>
                <div id="<?php echo $pill_id ?>" class='<?php echo "tab-pane fade in $active" ?>'>
                    <table class="table strip alp-table__in alp-bg-bluepurple">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <?php for ($i=0; $i < $tr; $i++): ?>
                           <tr>
                                <?php for ($y=0; $y < $td; $y++): ?>
                                    <td class="<?php echo 'alp-table__td--'.$key ?>">
                                        content
                                    </td>
                                <?php endfor ?>
                           </tr>
                        <?php endfor ?>
                    </table>
                </div>
            <?php endforeach ?>

            <div class="alp-table-locked__inner alp-bg-bluring"></div>
            <div class="alp-table-locked__inner row align-items-center no-gutters">
                <div class="col-12 text-center">
                    <h2><?php echo get_field('locked', 'option')['title'] ?></h2>
                    <p><?php echo get_field('locked', 'option')['description'] ?></p>

                    <a href="<?php echo get_field('cta_daftar_harga', 'option') ?>" class="alp-btn btn alp-btn-blue btn-effect cta-download-daftarharga-atas">
                        <?php echo get_field('locked', 'option')['cta_text'] ?>
                    </a>
                </div>
            </div>
        </div>

    </div>

<?php endif ?>

<style type="text/css">
    .alp-table-locked { position: relative; }
    .alp-table-locked__inner, 
    .alp-table-locked__inner p {
        color: #fff;
    }
    .alp-table-locked__inner {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }
    .alp-bg-bluring {
        opacity: 0.95;
        border-radius: 15px;
        background-color: #070e1b;
    }
</style>
