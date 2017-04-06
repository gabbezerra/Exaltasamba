<?php
$conteudo = "[teste]
writeable = yes
broseable = yes
path /home/ubuntu/test
valid users = ubuntu";

$arquivo = "'$conteudo'>> /etc/samba/smb.conf";
shell_exec($arquivo);
?>
