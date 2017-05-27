<?php
require_once '../engine/ks.php';
//header('Content-Type: application/json');
$id = $_REQUEST["id"];
$peca = $_REQUEST["peca"];
$destino = $_REQUEST["destino"];
$game =  Game::capture($id,$peca,$destino);
$gameJson = json_encode($game);
echo $gameJson;
