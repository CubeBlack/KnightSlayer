<?php
require_once "../engine/engine.php";
$gameId = $_REQUEST["id"];
$names = Game::tabuleiro($gameId);
echo json_encode($names,JSON_FORCE_OBJECT);
