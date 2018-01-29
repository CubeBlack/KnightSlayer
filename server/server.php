<?php

// ___________ exibir ou não os erros do sistema
//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);

function __autoload($className){
  $url = "engine/$className.class.php";
  require_once $url;
}
// variaveis globais
$config = new Config();
$dbl = new DBLocal();
//$db = new Database ();
//$user = new User();
//$gameObject = new GameObject();
//$world = new World();

//$grimorio = new Grimorio();


$term = New Terminal();
