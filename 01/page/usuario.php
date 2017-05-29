<?php
require_once '../engine/ks.php';
if(User::logued()){
  if(isset($_REQUEST["act"])){
    $act = $_REQUEST["act"];
    if($act=="logoff"){
        echo "Você acaba de deslogar!";
        User::sair();
    }
    else{
      echo "Erro(01)!'act' não indefinido";
    }
  }
  else {
    ?>
      <input type="button" value="Sair" onclick="load('usuario','conteudo','act=logoff');load('menu','menu');"/>
      <hr>
    <?php
    $me = User::perfil();
    echo "<h3>Id: {$me["id"]}</h3>";
    echo "username: {$me["username"]}<br>";
    echo "email: {$me["email"]}<br>";
    echo "xp: 0,vitorias: 0, derrotas: 0<br>";

  }
  die();
}
if(isset($_REQUEST["act"])){
  $act = $_REQUEST["act"];
    if ($act=="newForm") {
      ?>
      <p>Preencha com seus dados e clique em criar.
      <p>Nick: <input type="text" id="user" value="" />
      <p>E-mail: <input type="text" id="email" value="" />
      <p>Pass: <input type="text" id="pass" value="" />
      <p>
        <input type="button" value="Criar" onclick="load('usuario','conteudo','act=newConfi&user=' + document.getElementById('user').value + '&email=' + document.getElementById('email').value +'&pass=' + document.getElementById('pass').value);"/>
      <?php
    }
    elseif ($act=="newConfi") {
      if(User::newUser($_REQUEST["user"],$_REQUEST["email"],$_REQUEST["pass"])){
          echo "Novo usuario criado";
      }
      else {
          echo "Erro ao criar usuario";
      }
    }
    elseif ($act=="logon") {
      if(User::logon($_REQUEST["user"],$_REQUEST["pass"])){
          echo "LogOn";
      }
      else {
          echo "senha ou email invadilo";
      }
    }
    elseif ($act=="logoff") {
      User::sair();
      echo "LogOff";
    }
    else{
      echo "Ato indefinido";
    }
}
else{
    ?>
    <p>E-mail: <input type="text" id="user" value="" />
    <p>Pass: <input type="text" id="pass" value="" />
    <p>
      <input type="button" value="Logar" onclick="load('usuario','conteudo','act=logon&user=' + document.getElementById('user').value + '&pass=' + document.getElementById('pass').value);load('menu','menu');"/>
      <input type="button" value="Novo" onclick="load('usuario','conteudo','act=newForm')"/>
    <?php
}
