<?php
require_once "../engine/engine.php";
$meGames = Game::meGames();
if($meGames){
    foreach ($meGames as $key => $value) {
      $pl1 = User::perfil($value["player1"]);
      $pl2 = User::perfil($value["player2"]);
      echo "<a href=\"./view.php?{$value["id"]}\" >" ;
        echo "<input type=\"button\" value=\"{$value["id"]} : {$pl1["username"]} x {$pl2["username"]}\">";
      echo "</a>";
    }
}
else {
  echo "Sem jogos ativos mano. So clicar em Desafiar, em baixo no nome doscamaradas";
}
echo "<hr>";
//---------------------------
$users = User::all();
if($users&&is_array($users)){
    foreach ($users as $key => $value) {
      if ($value["id"]!=User::id()) {
        echo "<h2>";
        echo "{$value["username"]}";
        echo "<br>";
        echo "<input type=\"button\" onClick=\"load('playersDesafiar','conteudo','id={$value["id"]}');\" value=\"Desafiar\">";
        echo "</h2>";
        echo "<hr>";
      }
    }
}
else {
  echo "Não existem players";
}
