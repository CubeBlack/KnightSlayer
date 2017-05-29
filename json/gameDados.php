<?php
require_once '../engine/ks.php';
//header('Content-Type: application/json');
$id = $_REQUEST["id"];
$gameArr =  Game::view($id);
//------------------------------player1 dados
$player1Id = $gameArr["dados"]["player1"];
$player1Perfil = User::perfil($player1Id);
$player1Username = $player1Perfil["username"];
//------------------------------player2 dados
$player2Id = $gameArr["dados"]["player2"];
$player2Perfil = User::perfil($player2Id);
$player2Username = $player2Perfil["username"];
//-------------------------- Make resposta
$respostaArr = [
  "id" => $gameArr["dados"]["id"],
  "status" => $gameArr["dados"]["status"],
  "player1" => [
      "id" => $player1Id,
      "username" => $player1Username
  ],
  "player2" => [
      "id" => $player2Id,
      "username" => $player2Username
  ]
];
//------------------------ Echo
$respostaJson = json_encode($respostaArr);
echo $respostaJson;
