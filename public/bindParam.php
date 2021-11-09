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

  $name = 'Lençol';
  $description = 'Solteiro';

  $sql = 'INSERT INTO products (name, description) VALUES (:name, :description)';
  $query = $pdo->prepare($sql);
  $query->bindParam(':name', $name);
  $query->bindParam(':description', $description);
  var_dump($query->execute());
  
} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}
