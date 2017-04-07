<?php

	$result = [];
	$smbConf = file_get_contents("/etc/samba/smb.conf");

	$regex = "/path = (.+)\n/";
	preg_match($regex, $smbConf, $matches);
	$result["path"] = $matches[1];

	$path = explode("/", $result["path"]);
	$result["shared"] = $path[sizeof($path)-1];


	$regex = "/valid users = (.+)\n/";
	preg_match($regex, $smbConf, $matches);
	$result["user"] = $matches[1];

	header("Content-type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Origin: *");
	echo json_encode($result);

// if($_GET['info'] == "nPasta") {
// 	$regex = "/path = (.+)\n/";
// 	preg_match($regex, $smbConf, $matches);
// 	$result["j_path"] = $matches[1];
// }
?>
