<?php
require_once "../engine/engine.php";
$playerId = $_REQUEST["id"];
$novoID = Game::desafiar($playerId);
if ($novoID) {
  echo "
  <p>Você acaba de desafialo</p>
  <a href=\"./view.php?{$novoID}\" > ;
      <input type=\"button\" value=\"jogar\">
  </a>
  ";
}
else {
  echo "deu merda";
}
?>
