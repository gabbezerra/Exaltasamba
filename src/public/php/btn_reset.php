
<?php
$connection = ssh2_connect('localhost', 22);
ssh2_auth_password($connection, 'ubuntu', 'ubuntu');
$stream = ssh2_exec($connection, 'sudo service smbd restart');
$stream1 = ssh2_exec($connection, 'sudo service nmbd restart');
stream_set_blocking($stream, true);
stream_set_blocking($stream1, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$output = stream_get_contents($stream_out);
echo "<pre>{$output}</pre>";
header("Location: ../../api/home.php")
?>
