<?php
/**
 *
 */
require_once "configDBS.php";
require_once "configDBL.php";
//-------------------------------
$dbl->valueCreat("userId");
$dbl->valueCreat("username");
//-------------------------------
class User
{
  static function add($nick = "",$email = "",$pass = ""){
    global $dbs;
    return $dbs->TableInsert("user", array(
      $nick,
      $email,
      $pass,
      "null",
      "null"
    ));
  }
  static function logued()  {
    global $dbl;
    if ($dbl->valueSelect("userId")) {
      return true;
    }
  }
  static function id()  {
    global $dbl;
    return $dbl->valueSelect("userId");
  }
  static function username($id="")  {
    global $dbl, $dbs;
    if ($id=="") {
      return $dbl->valueSelect("username");
    }
    return $dbs->tableSelectOne("User","username","WHERE id='$id'");
  }
  static function logon($email = "",$pass = "") {
    global $dbs, $dbl;
    if($tabela = $dbs->tableSelect("user","WHERE email = '$email' and password = '$pass'")){
        global $dl;
        $dbl->valueIncert("userId","{$tabela[0]["id"]}");
        $dbl->valueIncert("username","{$tabela[0]["username"]}");
        return true;
    }
  }
  static function perfil($id = ""){
    global $dbs;
    if($id==""){
        $id = User::id();
        return $dbs->tableSelect("user","WHERE id = '$id';")[0];
    }
    else {
      return $dbs->tableSelect("user","WHERE id = '$id';")[0];
    }
  }
  static function sair()
  {
    global $dbl;
    $dbl->destroy();
  }
  static function all(){
      global $dbs;
      $id = User::id();
    $retorno = $dbs->tableSelect("user","");
    return $retorno;
  }
}
