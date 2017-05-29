
<?php
  require_once "../engine/ks.php";
  if(User::logued()){
    $perfil = User::perfil();
    echo "<input type=\"button\" onClick=\"load('usuario');\" value=\"Perfil: {$perfil["username"]}\">";
    echo "<input type=\"button\" onClick=\"load('players');\" value=\"Jogos + PLayers\">";
  }
  else {
    echo "<input type=\"button\" onClick=\"load('usuario');\" value=\"Login\">";
  }

?>
