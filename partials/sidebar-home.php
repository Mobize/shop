<?php
$query = $db->query('SELECT * FROM products WHERE rating > 4 ORDER BY RAND() LIMIT 2');
$best_rated_products = $query->fetchAll();
?>
            <div id="sidebar" class="col-md-3">

                <?php include 'partials/sidebar-categories.php' ?>

                <p class="lead">Featured products</p>

                <?php
                foreach($best_rated_products as $product) {
                    echo displayProduct($product);
                }
                ?>

            </div><!-- #sidebar -->