<?php
// Abre ou cria o arquivo exemplo1.txt
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen("/etc/samba/smb.conf", "a");

// Escreve "primeiro exemplo" no exemplo1.txt
$escreve = fwrite($fp, "primeiro exemplo");

// Fecha o arquivo
fclose($abre);
?>
