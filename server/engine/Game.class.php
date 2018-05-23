<?php
class Game{
	public function __construct(){
		$this->inicio = array(
			"p1"=>"",
			"p1-acesso"=>"",
			"p2"=>"",
			"p2-acesso"=>"",
			"situacoes"=>array(
				array(
					"vez"=>1,
					"acao"=>"Inicia-se o Jogo",
					"pecas"=>array(
						array(
							"tipo"=>"torre-branco",
							"posicao"=>"a1"
						),
						array(
							"tipo"=>"cavalo-branco",
							"posicao"=>"a2"
						),
						array(
							"tipo"=>"bispo-branco",
							"posicao"=>"a3"
						),
						array(
							"tipo"=>"dama-branco",
							"posicao"=>"a4"
						),
						array(
							"tipo"=>"rei-branco",
							"posicao"=>"a5"
						),
						array(
							"tipo"=>"bispo-branco",
							"posicao"=>"a6"
						),
						array(
							"tipo"=>"cavalo-branco",
							"posicao"=>"a7"
						),
						array(
							"tipo"=>"torre-branco",
							"posicao"=>"a8"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b1"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b2"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b3"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b4"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b5"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b6"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b7"
						),
						array(
							"tipo"=>"piao-branco",
							"posicao"=>"b8"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g1"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g2"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g3"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g4"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g5"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g6"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g7"
						),
						array(
							"tipo"=>"piao-preto",
							"posicao"=>"g8"
						),
						array(
							"tipo"=>"torre-preto",
							"posicao"=>"h1"
						),
						array(
							"tipo"=>"cavalo-preto",
							"posicao"=>"h2"
						),
						array(
							"tipo"=>"bispo-preto",
							"posicao"=>"h3"
						),
						array(
							"tipo"=>"dama-preto",
							"posicao"=>"h4"
						),
						array(
							"tipo"=>"rei-preto",
							"posicao"=>"h5"
						),
						array(
							"tipo"=>"bispo-preto",
							"posicao"=>"h6"
						),
						array(
							"tipo"=>"cavalo-preto",
							"posicao"=>"h7"
						),
						array(
							"tipo"=>"torre-preto",
							"posicao"=>"h8"
						)
					)
				)
			)
		);
	}
	//deve ser statica, para que n'ao possa ser acessado do terminal
	//evitando que possa ser criado o jogo sem o desafio
	function novo($player1,$player2){
		global $db;
		$nGame = $this->inicio;
		$nGame = json_encode($nGame);
		echo $sql = "INSERT INTO `ks_jogo` (`player1`, `player2`, `tabuleiro`) VALUES ('$player1', '$player2', '{$nGame}')";
		$db->query($sql);
		return "Ok";
	}
	function tabuleiro($idJogo){
		
	}
	function get($id){
		global $db,$user;
		$sql = "SELECT * FROM `ks_jogo` WHERE `id`={$id}";
		$pRetorno = $db->query($sql);
		$aRetorno = $pRetorno->fetchAll();
		$gRetorno = array();
		foreach($aRetorno as $u){
			$gRetorno["id"] = $u["id"];
			$gRetorno["player1"] = $u["player1"];
			$gRetorno["player2"] = $u["player2"];
			$gRetorno["tabuleiro"] = json_decode($u["tabuleiro"]);
			//$gRetorno["tabuleiro"] = $this->inicio;
		}
		$gRetorno = json_encode($gRetorno);
		return $gRetorno;
	}

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

EOT;
	}
}
