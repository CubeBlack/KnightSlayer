<?php
/**
 *
 */
 require_once "configDBS.php";
 require_once "configDBL.php";
  //--------------- DBL -----------------
 $dbl->valueCreat("userId");
 $dbl->valueCreat("username");
 $dbl->valueCreat("userFacebookId");
 $dbl->valueCreat("userMessageId");
 //--------------- DBL -----------------
class User
{

  function __construct()
  {
    # code...
  }
  static function newUser($nick = "",$email = "",$pass = ""){
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
  static function getId()  {
    global $dbl;
    return $dbl->valueSelect("userId");
  }
  static function userMe($value='')  {
    global $dbl;
    return $dbl->valueSelect("username");
  }
  static function logon($email = "",$pass = "")  {
    global $dbs, $dbl;
    if($tabela = $dbs->tableSelect("user","WHERE email = '$email' and password = '$pass'")){
        global $dl;
        $dbl->valueIncert("userId",$tabela[0]["id"]);
        $dbl->valueIncert("username",$tabela[0]["username"]);
        return true;
    }
  }
  static function forceLogon($id, $tipo, $nick = ""){
    if($tipo = "face"){
        global $dbs, $dbl;
        $thisUsser = $dbs->tableSelect("user","WHERE id_facebook = '$id';");
        if($thisUsser){
            //$dbl->valueIncert("userId",$thisUsser[0]["id"]);
        }
        else{
            echo "usario não existe";
            $newUserId = $dbs->TableInsert("user", array(
                //id
                null,
                //nick
                null,
                //email
                null,
                //senha
                null,
                //grimorio
                null,
                //id_facebook
                $id,
                //id_message
                null,
                //id_skype
                null,
                //id_whatsapp
                null
            ));
            $dbl->valueIncert("userId",$newUserId);
        }
    }
}
static function perfil($id = ""){
    global $dbs, $dbl;
    if($id==""){
        $id = User::getId();
        $retorno = $dbs->tableSelect("user","WHERE id = '$id';")[0];
        return $retorno;
    }
    return $dbs->tableSelect("user","WHERE id = '$id';")[0];
}

static function sair()
  {
    global $dbl;
    $dbl->destroy();
  }
  static public function isNick($value='')
  {
    # code...
  }
  static function isEmail(){

  }
  static function isNew(){

  }
  static function newCheck(){
      global $dbs;
      $characters = '123456789qwertyuiopasdfghjklzxcvbnm';
      $key = "";
      for($i = 0; $i < 5; $i++){
          $rand = mt_rand(0, strlen($characters)-1);
          $key .= $characters[$rand];
      }
      $id = User::getId();
      $dbs->tableUpdateOne("user", "check",$key,"WHERE `id`='$id'");
      return $key;
  }
  static function listar(){
      global $dbs;
      $id = User::getId();
    $retorno = $dbs->tableSelect("user","");
    return $retorno;
  }
}
