<?php
require_once '../engine/ks.php';
$list = User::listar();
//var_dump($list);
if(isset($_REQUEST["act"])){
    if($_REQUEST["act"]=="desafiar"){
        $id = $_REQUEST["id"];
        $desafio = Game::desafiar($id);
        if($desafio["gameId"]>0){
            echo "Você agora esta desafiando o usuario: $id";
        }
        else{
            echo "Erro ao slavar desafio. {$desafio["reason"]}";
        }
        die();
    }
}
//die();
//echo "<input type=\"button\" onClick=\"load('user','conteudo','act=desafiar&id=');\" value=\"Procurar Player\">";
$lista = Game::meGames();
echo "<p>";
if($lista){
    foreach ($lista as $key => $value) {
        $gamePlayer1Id = $value["player1"];
        $gamePlayer1Username = User::perfil($gamePlayer1Id)["username"];
        $gamePlayer2Id = $value["player2"];
        $gamePlayer2Username = User::perfil($gamePlayer2Id)["username"];
        $gameId =  $value["id"];
        echo "<input type=\"button\" onClick=\"load('jogo','conteudo','act=desafiar&id=$gameId');\" value=\"$gameId : $gamePlayer1Username x $gamePlayer2Username\">";
    }
}
else{
    echo "Nenum jogo ativo!";
}
foreach ($list as $key => $value) {
  $id = $value["id"];
  if ($id != User::getId()) {
    $username = $value["username"];
    echo "<hr>";
    echo "<h3>$id|$username <input type=\"button\" onClick=\"load('players','conteudo','act=desafiar&id=$id');\" value=\"Desafiar\"></h3>";
    echo "<p>xp, vitorias,  etc...";
    echo $value["username"];
  }
}
