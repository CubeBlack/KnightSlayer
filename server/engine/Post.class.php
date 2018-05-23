<?php
class Post{
	const tDesafio=1;
	function adicionar($msg,$para=0,$tipo=2){
		global $user;
		$msg = urlencode($msg);
		$para = urlencode($para);
		$tipo = urlencode($tipo);
		//INSERT INTO `ks_post` (`de`, `para`, `msg`, `tipo`) VALUES ('$de', '$para', '$msg', 'tipo');
		global $db;
		if($msg==""){
			return "Erros: N'ao exite mensagem";
		}
		//$dado=urlencode($dado);
		$sql = "INSERT INTO `ks_post` (`de`, `para`, `msg`, `tipo`) VALUES ('{$user->id}', '$para', '$msg', '$tipo')";
		$db->query($sql);
		return "Ok";
	}
	function drop($id){
		//"DELETE FROM `cubeblack`.`ks_post` WHERE `ks_post`.`id` = 1"
		global $db;
		$sql = "DELETE FROM `ks_post` WHERE `ks_post`.`id` = $id";
		$db->query($sql);
		return "Ok";
	}
	static function msgSys($msg){
		
	}
	function listar($rTipo){
		global $db, $dbl;
		$sql = "SELECT * FROM `ks_post`";
		$retorno = $db->query($sql);
		if(!$retorno){
			return "Enpty!";
		}
		$retorno = $retorno->fetchAll();
		$retorno2 = array();
		foreach($retorno as $linha){
			$nLinha["msg"] = urldecode($linha["msg"]);
			$nLinha["id"] = $linha["id"];
			$nLinha["de"] = $linha["de"];
			$nLinha["para"] = $linha["para"];
			$nLinha["tipo"] = $linha["tipo"];
			$nLinha["msg"] = urldecode($linha["msg"]);
			$retorno2[] = $nLinha;
		}
		if($rTipo=="json"){
			return json_encode($retorno2);
		}
		return $retorno;
	}
	public function help(){
		return <<<'EOT'
>> User(user) - Dados e funções de usuario
tipos de postagem
0 - Mensagem do sistema
1 - Desafio
2 - Mensagem

Tipos de destinatario
0 - Para todos
>0 - Pra o usuario e igual ID

.adicionar();
.modificar();
.listar();
.apagar();
EOT;
	}
}