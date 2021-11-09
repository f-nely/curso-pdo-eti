<?php

$dsn = 'mysql';
$host = 'mysql'; // localhost
$database = 'curso_php_pdo';
$user = 'root';
$password = 'root';
$port = 3306;

try {

  $pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  /* $name = 'Geladeira';
  $description = 'Brastemp';

  $sql = 'INSERT INTO products (name, description) VALUES (:name, :description)';
  $query = $pdo->prepare($sql);
  $query->bindParam(':name', $name);
  $query->bindParam(':description', $description);
  $query->execute();

  echo $pdo->lastInsertId(); */

  /* $query = $pdo->prepare('SELECT * FROM products');
  $query->execute();

  $qtd = $query->rowCount();
  if ($qtd > 0) {
    $products = $query->fetchAll();
    foreach ($products as $product) {
      echo "{$product['id']} - {$product['name']} - {$product['description']} <br>";
    }
  } else {
    echo 'Nenhum resultado...';
  } */

  var_dump(PDO::getAvailableDrivers());
  
} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}
