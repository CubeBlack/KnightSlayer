<?php
require_once '../engine/ks.php';
$idGame = $_REQUEST["id"];
$game = Game::getOne($idGame);
//var_dump($game);
echo "<a href=\"view.php?id=$idGame\"><input type=\"button\" value=\"Jogar\"></a>";
//"<input type="button" onClick="load('jogo');" value="Desesitir">"
echo "<hr>";
echo "<h2>Game: $idGame</h2>";
echo "<p>";
echo "etc";
