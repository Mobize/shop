<!DOCTYPE html>
<?php
require_once 'partials/header.php';

$id = 0;
if (!empty($_GET['id'])) {
    $id = intval($_GET['id']);
}

if (empty($id)) {
    //die('Undefined product id');
    header('Location: 404.php');
    exit();
}

$query = $db->prepare('SELECT * FROM products WHERE id = :id');
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$product = $query->fetch();
//debug($product);

if (empty($product)) {
    die('Undefined product with id ['.$id.']');
    //header('Location: 404.php');
    //exit();
}

$product_id = $product['id'];
$category = $product['category'];
$name = ucfirst(substr($product['name'], 0, 15)).'...';
$description = substr($product['description'], 0, 100).'[...]';
$price = $product['price'];
$picture = 'img/product/'.$product['picture'];
$rating = $product['rating'];
$date = $product['date'];

?>
        <div class="row">

            <?php include 'partials/sidebar-product.php' ?>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?= $picture ?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= $price ?></h4>
                        <h4><a href="#"><?= $name ?></a>
                        </h4>
                        <p>
                            <?= $description ?>
                        </p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                    <div class="btns text-center clearfix">
                        <a class="btn btn-success" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-primary">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

<?php require_once 'partials/footer.php' ?>