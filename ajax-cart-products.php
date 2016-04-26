<?php
require_once 'inc/config.php';

if (empty($_SESSION['cart'])) {
	return;
}

$products_ids_array = array_keys($_SESSION['cart']);
$products_ids = implode(', ', $products_ids_array);

$products = $db->query('SELECT * FROM products WHERE id IN ('.$products_ids.')')->fetchAll();

$subtotal = 0;
foreach($products as $product) {

	$quantity = @$_SESSION['cart'][$product['id']] ?: 1;
?>
<li id="product-<?= $product['id'] ?>" title="<?= $product['name'] ?>">
	<span class="item">
		<span class="item-left">
			<img src="<?= getProductPicture($product['picture']) ?>" width="50" alt="" />
			<span class="item-info">
				<span><strong><?= cutString($product['name'], 20) ?></strong> <span class="badge"><?= $quantity ?></span></span>
				<span><?= $product['price'] * $quantity ?> €</span>
			</span>
		</span>
		<span class="item-right">
			<button class="btn-remove-cart-product" data-id="<?= $product['id'] ?>" class="btn btn-xs btn-danger pull-right">
				<span class="glyphicon glyphicon-trash"></span>
			</button>
		</span>
	</span>
</li>
<?php
	$subtotal += ($product['price'] * $quantity);
	$shipping = floor($subtotal * (5 / 100));
	$total = $subtotal + $shipping;
}
?>
<li class="divider"></li>
<li class="text-right">
	<span class="item">
		<span class="item-left">
			<strong>Subtotal</strong>
		</span>
		<span class="item-right">
			<span><?= formatAmount($subtotal) ?></span>
		</span>
	</span>
</li>
<li class="text-right">
	<span class="item">
		<span class="item-left">
			<strong>Shipping</strong>
		</span>
		<span class="item-right">
			<span><?= formatAmount($shipping) ?></span>
		</span>
	</span>
</li>
<li class="text-right">
	<span class="item">
		<span class="item-left">
			<strong>Total</strong>
		</span>
		<span class="item-right">
			<span><?= formatAmount($total) ?></span>
		</span>
	</span>
</li>
<li class="divider"></li>
<li><a class="text-center" href="cart-summary.php">View Cart</a></li>