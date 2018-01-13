<?php
require_once "DB.php";
require_once "Product.php";
// $productId

$product = new Product;
$products = $product->getAllProducts();
echo json_encode($products);
return;

?>
