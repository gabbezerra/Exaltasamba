<?php
require_once "database.php";
class UsuarioDb extends Database {

  public function create($login, $senha){
    $senha = md5($senha);
    $sql = "insert into usuarios (login, senha)".
            " values ('{$login}', '{$senha}');";
    return $this->connection->exec($sql);
  }

  public function readAll(){
    $sql = "select * from usuarios";
    $result = $this->connection->query($sql);
    return $result->fetchAll();
  }

  public function readByLoginSenha($login, $senha){
    $senha = md5($senha);
    $sql = "select * from usuarios WHERE login = '{$login}' and senha = '{$senha}'";
    $result = $this->connection->query($sql);
    // var_dump($sql);
    if($result === false)
      return false;
    else
      return $result->fetch();
  }
}
