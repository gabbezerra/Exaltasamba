<?php
  $sql = file_get_contents("../public/db.sql");
  $pdo = new PDO("mysql:host=localhost", "root", "abc123");
  echo $pdo->exec($sql);
  header("Location: ../public/cadastro.html");
?>
