<!-- Not include this partial outside of displayProduct() -->

<div class="thumbnail">
    <img src="<?= $picture ?>" alt="<?= $name ?>">
    <div class="caption">
        <h4 class="pull-right"><?= $price ?></h4>
        <h4><a href="#"><?= $name ?></a>
        </h4>
        <p><?= $description ?></p>
    </div>
    <div class="ratings">
        <p class="pull-right">15 reviews</p>
        <p>
            <?php
            $rounded_rating = round($rating);
            for($i = 1; $i <= 5; $i++) {

                $rating_class = 'glyphicon-star-empty';
                if ($i <= $rounded_rating) {
                    $rating_class = 'glyphicon-star';
                }
            ?>
            <span class="glyphicon <?= $rating_class ?>"></span>
            <?php } ?>
            <?= $rating ?> stars
        </p>
    </div>
    <div class="btns clearfix">
        <a class="btn btn-info pull-left" href="product.php?id=<?= $product_id ?>"><span class="glyphicon glyphicon-eye-open"></span> View</a>
        <a class="btn btn-primary pull-right" href="product.php"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
    </div>
</div><!-- /.thumbnail -->