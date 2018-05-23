<?php
class User{
	const pDesvinculado = 0;
	const pNormal = 1;
	const pTester = 2;
	const pDesenvolvedor = 3;
	const pAdm = 5;
	
	public function __construct(){
		global $dbl;
		$this->id = 0;
		$this->nick = "Anonymous";
		$this->email = "asdf@qwer.zx";
		$this->poder = 0;
		$this->titulo = $this->fTitulo();
		
		if(!$dbl->get("user")){
			$dbl->clear();
			$dbl->set("user",$this);
		}
		else{
			$tUser = $dbl->get("user");
			$this->id = $tUser->id;
			$this->nick = $tUser->nick;
			$this->email = $tUser->email;
			$this->poder = $tUser->poder;
			$this->titulo = $this->fTitulo();
		}
	}
	public function get($rTipo=""){
		if($rTipo == "json")
			return json_encode($this);
		return $this;
	}
	public function listar($rTipo=""){
		global $db, $dbl;
		$sql = "SELECT * FROM `ks_user`";
		$retorno = $db->query($sql);
		$retorno = $retorno->fetchAll();
		if($rTipo=="json"){
			return json_encode($retorno);
		}
		return $retorno;
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
			$this->poder = $u["poder"];
			$this->titulo = $this->fTitulo();
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
			return "Ok!";
		}
	}
	public function novo($nick,$email,$pass){
		//INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`) VALUES (1, 'asdf', 'asdf@asdf', 'asdf');
	}
	public function sair(){
		global $dbl;
		$dbl->clear();
		return "Ok!";
	}
	public function setPower($id,$valor){
		
	}
	//0 para desafiar todo mundo
	//so desafia se n'ao ouver jogo ativo, e se n'ao ouver desafio pendente
	// para  pessoa em questao
	public function desafiar($id=0){
		global $post;
		//tipo de postage 1, para desafio;
		if($this->id == 0){
			return "Voce n'ao pode desafiar, crio um novo usuario ou logue no sistema";
		}
		$post->adicionar("Esta desafiando $id",$id,1);
	}
	public function recusarDesafio($id){
		
	}
	//mensagem de erro caso o desafio em quest'ao n'ao exista
	function aceitarDesafio($id){
		global $post,$game;
		//verificar se o desafio existe
		$post->drop($id);
		$game->novo($user->id,0);
		return "Ok!";
	}
	public function fTitulo(){
		if($this->poder == User::pDesvinculado){
			return "Sr.";
		}
		if($this->poder == User::pNormal){
			return "Player";
		}
		if($this->poder == User::pTester){
			return "PlayerMaster";
		}
		if($this->poder >= User::pDesenvolvedor){
			return "G-Developer";
		}
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
.get([$rTipo:json/])
.novo([nick],[email],[senha])
.sair()
.setPower([id],[valor])
.desafiar([id]);

EOT;
	}
}