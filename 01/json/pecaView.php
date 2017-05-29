<?php
require_once '../engine/ks.php';
//header('Content-Type: application/json');
$id = $_REQUEST["id"];
$peca = $_REQUEST["peca"];
$game =  Game::peca($id,$peca);
$gameJson = json_encode($game);
echo $gameJson;
