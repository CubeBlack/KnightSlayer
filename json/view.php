<?php
require_once '../engine/ks.php';
header('Content-Type: application/json');
$id = $_REQUEST["id"];
$game =  Game::view($id);
$respostaArr["tabuleiro"] = $game["tabuleiro"];
$respostaArr["msg"] = $game["msg"];
$respostaArr["vez"] = $game["vez"];
$respostaJson = json_encode($respostaArr);
echo $respostaJson;
