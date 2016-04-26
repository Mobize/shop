<?php
require_once 'partials/header.php';

$query = $db->query('SELECT * FROM products ORDER BY date DESC LIMIT 6');
$last_products = $query->fetchAll();
//debug($last_products);
?>

        <div class="row">

            <?php include 'partials/sidebar-home.php' ?>

            <div class="col-md-9">

                <?php include 'partials/slider.php' ?>

                <div class="row">

                    <?php foreach($last_products as $key => $product) { ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <?= displayProduct($product) ?>
                    </div>
                    <?php } ?>

                </div><!-- /.row -->

            </div><!-- col-md-9 -->

        </div><!-- /.row -->

<?php require_once 'partials/footer.php' ?>