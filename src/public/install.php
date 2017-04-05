<?php
  $sql = file_get_contents("db.sql");
  $pdo = new PDO("mysql:host=localhost", "root", "abc123");
  echo $pdo->exec($sql);
  header("Location: cadastro.html");
?>
