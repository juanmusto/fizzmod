<?php
require_once "DB.php";
require_once "Product.php";

$productId = (int)$_POST["productId"];
$product = new Product;
$response = $product->deleteProduct($productId);
echo json_encode($response);
?>
