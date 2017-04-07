<?php
  session_start();
  if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] === false)
    header('Location: login.html');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../public/css\bootstrap.min.css">
    <link rel="stylesheet" href="../public/css\style-principal.css">
  </head>
  <body>
    <img src="../public/img/exalt.jpg" alt="" class="exalt">
    <table id="statusTable">
      <thead>
        <th>Nome da pasta</th>
        <th>Caminho</th>
        <th>User</th>
      </thead>
      <tbody>
      </tbody>
    </table>
    <form action=../public/php/btn_apagar.php>
      <button type="submit" class="btn btn-danger">Apagar Compartilhamento</button>
    </form>

    <figure>
      <a href="../public/configuracoes.html"><img src="../public/img/configure.jpg" alt=""></a>
      <figcaption>Configurações</figcaption>
    </figure>

      <a href="../public/login.html"><button type="submit" class="btn btn-danger">     Sair         </button></a>
      <a href="../public/php/btn_reset.php"><button type="submit" class="btn btn-primary">Reiniciar Servidor </button></a>

<!-- Indicates a successful or positive action -->
    <script src="../public/js/tabela.js"></script>
    <footer>
    </footer>
  </body>
</html>
