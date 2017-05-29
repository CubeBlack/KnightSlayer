<?php
require_once "../engine/engine.php";
$playerId = $_REQUEST["id"];
if (Game::desafiar($playerId)) {
  echo "
  <p>Você acaba de desafialo</p>
  
  ";
}
else {
  echo "deu merda";
}
?>
