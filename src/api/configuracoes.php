<?php
$arquivo = fopen('/etc/samba/smb.conf', 'a+');
if (isset($_POST['usuario'])){
  $usuario = $_POST['usuario'];
  $usuariocolchete = "[{$usuario}]\n";

  fwrite($arquivo, $usuariocolchete);
}

if (isset($_POST['caminho'])){
  $caminho = $_POST['caminho'];
  $pathfull = "path = {$caminho}\n";

  fwrite($arquivo, $pathfull);
}

if (isset($_POST['validU'])){
  $valid = $_POST['validU'];
  $validU = "valid users = $valid\n";

  $arquivo = fopen('/etc/samba/smb.conf', 'a+');
  fwrite($arquivo, $validU);
}
fclose($arquivo);

header("Location: ../../api/home.php")
?>
