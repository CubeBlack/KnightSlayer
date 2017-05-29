<?php
require_once "../engine/engine.php";
$gameId = $_REQUEST["id"];
$peca = $_REQUEST["peca"];
$destino = $_REQUEST["tipo"];

$names = Game::elevar($gameId, $peca, $destino);
echo json_encode($names,JSON_FORCE_OBJECT);
