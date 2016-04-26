<?php

function debug($tableau) {
	echo '<pre>'.print_r($tableau, true).'</pre>';
}

function formatAmount($amount, $currency = '&euro;') {
    return number_format($amount, 2, ',', '&nbsp;').' '.$currency;
}

function getProductPicture($picture = '') {

    if (!empty($picture)) {
        $img_path = 'img/product/'.$picture;
        if (file_exists($img_path)) {
            return $img_path;
        }
    }
    return 'http://placehold.it/320x150';
}

function displayProduct($product) {

	$product_id = $product['id'];
    $category = $product['category'];
    $name = ucfirst(substr($product['name'], 0, 15)).'...';
    $description = substr($product['description'], 0, 100).'[...]';
    $price = formatAmount($product['price']);
    $picture = getProductPicture($product['picture']);
    $rating = $product['rating'];
    $date = $product['date'];

    include 'partials/product-thumbnail.php';
}