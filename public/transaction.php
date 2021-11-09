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

  $pdo->beginTransaction();
  $name = 'Geladeira';
  $description = 'Brastemp';

  $sql = 'INSERT INTO products (name, description) VALUES (:name, :description)';
  $query = $pdo->prepare($sql);
  $query->bindValue(':name', $name);
  $query->bindValue(':description', $description);
  $insert = $query->execute();

  if ($insert) {
    $pdo->commit();
  } else {
    $pdo->rollBack();
  }
  
} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}
