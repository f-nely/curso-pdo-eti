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

  /* $query = $pdo->query("SELECT * FROM products");
  $products = $query->fetchAll();
  foreach ($products as $product) {
    echo $product['name'] . '<br>';
  } */
  //var_dump($query->fetchAll());
  $name = 'Copo';
  $description = 'Descartável';
  $sql = "INSERT INTO products (name, description) VALUES ('{$name}', '{$description}');";
  $insert = $pdo->query($sql);
  var_dump($insert);

  
} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}