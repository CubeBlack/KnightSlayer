<?php
require_once "../engine/engine.php";
if (User::logued()) {
  $perfil = User::perfil();
  echo "<input type=\"button\" onClick=\"load('usuario');\" value=\"Perfil: {$perfil["username"]}\">";
  echo "<input type=\"button\" onClick=\"load('players');\" value=\"Jogos + Players\">";
}
else {
  echo "<input type=\"button\" onClick=\"load('usuario');\" value=\"Login\">";
}
