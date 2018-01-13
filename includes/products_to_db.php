<?php
  require_once "DB.php";
  require_once "Product.php";

  //Route of json
  $path_to_file = "../pub/products.json";

  //New Object Product
  $foo = new Product();

  //insert products
  $foo->insertProducts(json_decode($foo->readFile($path_to_file)));
  echo "Productos cargados en la base de datos correctamente";
?>
