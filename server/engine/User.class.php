<?php
class User{
	public function __construct(){
		global $dbl;
		$this->id = 0;
		$this->nick = "Anonymus";
		$this->email = "nome@hoster.com";
		
		if(!$dbl->get("user"))
			$dbl->set("user",$this);
		else{
			$tUser = $dbl->get("user");
			$this->id = $tUser->id;
			$this->nick = $tUser->nick;
			$this->email = $tUser->email;
		}
	}
	public function login($login,$senha){
		global $db, $dbl;
		//evitar ingeção msql
		$login = urlencode($login);
		$senha = urlencode($senha);
		//SELECT * FROM `ks_user` WHERE (`nick`='asdf' or `email`='asdf') AND `senha`='asdf'
		$sql = "SELECT * FROM `ks_user` WHERE (`nick`='$login' or `email`='$login') AND `senha`='$senha';";
		$retorno = $db->query($sql);
		$retorno = $retorno->fetchAll();
		foreach($retorno as $u){
			$this->id = $u["id"];
			$this->nick = $u["nick"];
			$this->email = $u["email"];
		}
		//return $tRetorno;
		if($this->id != 0){
			$dbl->set("user",$this);
			return "Ok!";
			
		}
		return "Fail!";
	}
	public function logued(){
		if($this->id !=0){
			return "ok";
		}
	}
	public function novo($nick,$email,$pass){
		//INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`) VALUES (1, 'asdf', 'asdf@asdf', 'asdf');
	}
	public function sair(){
		global $dbl;
		$dbl->clear();
		return "ok";
	}
	public function setPower($id,$valor){
		
	}
	//---------- help ---------------//
	public function help(){
		return <<<'EOT'
>> User(user) - Dados e funções de usuario
.id
.nick
.email

.login([user/email],[password])
.logued()
.novo([nick],[email],[senha])
.sair()
.setPower([id],[valor])

EOT;
	}
}