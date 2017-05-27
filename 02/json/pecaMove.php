<?php
require_once "../engine/engine.php";
$gameId = $_REQUEST["id"];
$peca = $_REQUEST["peca"];
$destino = $_REQUEST["destino"];

$names = Game::Move($gameId, $peca, $destino);
echo json_encode($names,JSON_FORCE_OBJECT);
