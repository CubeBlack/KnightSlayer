<?php
function __autoload($className){
  $url = "engine/$className.class.php";
  require_once $url;
}
// variaveis globais
$config = new Config();
$dbl = new DBLocal();

try {
	$db = new PDO("mysql:host={$config->db_host};dbname={$config->db_name}", $config->db_user, $config->db_password);
	
} catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "\n";
}


$user = new User();

//$grimorio = new Grimorio();
$help = "Variaveis Globais
________________
* config:
* user:
________________
";
$vars = array("config","user","dado","db","help","dbl");
$term = New Terminal($vars);