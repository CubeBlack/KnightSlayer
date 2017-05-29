<?php
require_once '../engine/ks.php';
//header('Content-Type: application/json');
$id = $_REQUEST["id"];
$game =  Game::view($id);
$gameJson = json_encode($game);
echo $gameJson;
