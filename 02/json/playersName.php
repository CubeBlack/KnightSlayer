<?php
require_once "../engine/engine.php";
$gameId = $_REQUEST["id"];
$names = Game::playersName($gameId);
echo json_encode($names,JSON_FORCE_OBJECT);
