<?php

class Product {

  private $id;
  private $name;
  private $price;
  private $status;

  public function __construct($id = null, $name = null, $price = null, $status = null) {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->status = $price;
  }
  
  // Getters
  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function readFile($path_to_file)
  {
    $file = fopen($path_to_file, "r");
    $content = fread($file, filesize($path_to_file));
    fclose($file);
    return $content;
  }

  public function insertProducts ($products)
  {
    foreach($products as $product) {
      $sql = "INSERT INTO PRODUCTS (id, name, price) VALUES (:id, :name, :price) ";
      $stmt = DB::getStatement($sql);
      $stmt->bindParam(':id', $product->id);
      $stmt->bindParam(':name', $product->name);
      $stmt->bindParam(':price', $product->price);
      $stmt->execute();
    }
    return "Productos cargados.";
  }
}
?>
