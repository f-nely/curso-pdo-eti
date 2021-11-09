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

  $name = 'Fogão';
  $description = '4 bocas';

  /* $sql = 'INSERT INTO products (name, description) VALUES (?, ?)';
  $query = $pdo->prepare($sql);
  $query->bindValue(1, $name);
  $query->bindValue(2, $description);
  var_dump($query->execute()); */

  $sql = 'INSERT INTO products (name, description) VALUES (:name, :description)';
  $query = $pdo->prepare($sql);
  $query->bindValue(':name', $name);
  $query->bindValue(':description', $description);
  var_dump($query->execute());
  
} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}
