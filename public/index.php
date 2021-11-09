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

  /* $sql = "INSERT INTO products (name, description) VALUES ('Copo', 'Descartável')";
  $insert = $pdo->exec($sql); */

  $name = 'Gravador';
  $description = 'Portátil';
  $update = $pdo->exec("UPDATE products SET name = '{$name}',description ='{$description}' WHERE id <> 5");
  var_dump($update);

} catch (Throwable | PDOException $e) {

  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}
