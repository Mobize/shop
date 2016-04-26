<?php

$query = $db->prepare('SELECT * FROM products WHERE category = :category AND id != :id ORDER BY RAND() LIMIT 3');
$query->bindValue(':category', $category, PDO::PARAM_INT);
$query->bindValue(':id', $product_id, PDO::PARAM_INT);
$query->execute();
$related_products = $query->fetchAll();
?>

            <div id="sidebar-product" class="col-md-3">

                <?php include 'partials/sidebar-categories.php' ?>

                <p class="lead">Related products</p>
                <?php
                foreach($related_products as $product) {
                    echo displayProduct($product);
                }
                ?>

            </div><!-- #sidebar-product -->