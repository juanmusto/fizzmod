<?php
$productId = intval($_GET['productId']);

require_once "DB.php";
require_once "Product.php";
// $productId
if(is_int($productId) && $productId != 0 ) {
  $product = new Product;
  $productInfo = $product->getProduct($productId);
  echo json_encode($productInfo);
  return;
} else {
  $error = 'El id debe ser numerico';
  echo $error;
}
?>
