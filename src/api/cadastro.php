<?php
require_once "usuariosdb.php";

$login = $_POST['login'];
$senha = $_POST['senha'];
// $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
// $db = mysql_select_db('exaltasamba');
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
//$select = mysql_query($query_select,$connect);
// $array = mysql_fetch_array($select);
$userdb = new UsuarioDb();
$loggedUser = $userdb->create($login, $senha);
header("Location: ../public/cadastroefetuado.html")

// $logarray = $array['login'];
//
//   if($login == "" || $login == null){
//     echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
//
//     }else{
//       if($logarray == $login){
//
//         echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
//         die();
//
//       }else{
//         $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
//         $insert = mysql_query($query,$connect);
//
//         if($insert){
//           echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
//         }else{
//           echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
//         }
//       }
//     }
// ?>
