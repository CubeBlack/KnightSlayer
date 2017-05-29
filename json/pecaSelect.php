<?php
require_once "../engine/engine.php";
$gameId = $_REQUEST["id"];
$peca = $_REQUEST["peca"];

$names = Game::peca($gameId, $peca);
echo json_encode($names,JSON_FORCE_OBJECT);
