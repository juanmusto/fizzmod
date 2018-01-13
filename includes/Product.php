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

  public function insertProducts($products)
  {
    $this->truncateTable();
    $status = true;
    foreach($products as $product) {
      $sql = "INSERT INTO products (id, name, price, status) VALUES (:id, :name, :price, :status) ";
      $stmt = DB::getStatement($sql);
      $stmt->bindParam(':id', $product->id);
      $stmt->bindParam(':name', $product->name);
      $stmt->bindParam(':price', $product->price);
      $stmt->bindParam(':status', $status);
      $stmt->execute();
    }
    return "Productos cargados.";
  }
  private function truncateTable()
  {
    $sql = "TRUNCATE products";
    $stmt = DB::getStatement($sql);
    $stmt->bindParam(':id', $product->id);
    $stmt->bindParam(':name', $product->name);
    $stmt->bindParam(':price', $product->price);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    return;
  }

  public function getAllProducts()
  {
    $status = true;
    $sql = "SELECT * FROM products WHERE status=:status ORDER BY id DESC";
    $stmt = DB::getStatement($sql);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  public function getProduct($id)
  {
    $status = true;
    $sql = "SELECT * FROM products WHERE id=:id AND status=:status";
    $stmt = DB::getStatement($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    $product = $stmt->fetchObject();
    return $product;
  }

  public function deleteProduct($id)
  {
    try {
      $status = -1;
      $sql = "UPDATE products SET status=:status  WHERE id=:id";
      $stmt = DB::getStatement($sql);
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':status', $status);
      $stmt->execute();
      return 'Producto eliminado';
    } catch (\Exception $e) {
      return $e;
    }
  }
}
?>
