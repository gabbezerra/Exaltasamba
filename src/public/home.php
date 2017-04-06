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
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style-principal.css">
  </head>
  <body>
    <img src="img/exalt.jpg" alt="" class="exalt">
    <table>
          <tr>
          <td>Nome da pasta</td>
          <td>Caminho</td>
          <td>Permissões</td>
        </tr>
        <tr>
          <td>pasta-compartilhada</td>
          <td>/home/ubuntu</td>
          <td>rwx</td>
        </tr>
        <tr>
          <td>Comp</td>
          <td>/var/www</td>
          <td>rw</td>
        </tr>
        <tr>
          <td>Test</td>
          <td>/root</td>
          <td>r</td>
        </tr>

    </table>
    <button type="button" class="btn btn-danger">Apagar Compartilhamento</button><br>

    <img src="img/configure.jpg" alt="">
    <img src="img/locker.jpg" alt="">

    <button type="button" class="btn btn-danger">Parar Servidor</button>
    <button type="button" class="btn btn-primary">Reiniciar Servidor</button>

<form action=funcao_btn.php method=get >
    <input type=submit value='Meu Botão' />
</form>
  </body>
</html>
