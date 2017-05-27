<?php
require_once "../engine/engine.php";
if (User::logued()) {
  if (isset($_REQUEST["act"])) {
    switch ($_REQUEST["act"]) {
      case 'sair':{
        User::sair();
        echo "Saiu de seu usuario. Volte sempre!";
        ?>
          <p>
            <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
        <?php
        break;
      }
      default:{
        Echo "Camarada, Algo errado não está certo. Ato '{$_REQUEST["act"]}' não reconhecido";
        ?>
          <p>
            <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
        <?php
      }
    }
  }
  else {
    $me = User::perfil();
    echo "<h3>Id: {$me["id"]}</h3>";
    echo "Nome: {$me["username"]}<br>";
    echo "E-mail: {$me["email"]}<br>";
    ?>
      <p>
        <input type="button" value="Sair" onclick="load('usuario','conteudo','act=sair')"/>
    <?php
  }
}
else {
  if (isset($_REQUEST["act"])) {
    switch ($_REQUEST["act"]) {
      case 'logon':{
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        if (User::logon($email,$pass)) {
          $username = User::username();
          echo "Camarada $username, você logou com sucesso.";
          ?>
          <p>
            <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
          <?php
        }
        else {
          echo "Camarada não foi posivel encontrar seu usuario, confira E-mail e Senha.";
          ?>
          <p>
            <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
          <?php
        }
        break;
      }
      case 'novoForm':{
        ?>
        <form >
          <p>Preencha com seus dados e clique em criar.
          <p>Nick <br>
            <input type="text" id="user" value="" />
          <p>E-mail <br>
              <input type="text" id="email" value="" />
          <p>Senha <br>
              <input type="text" id="pass" value="" />
          <p>
            <input type="submit" value="Criar" onclick="load('usuario','conteudo','act=novoSave&user=' + document.getElementById('user').value + '&email=' + document.getElementById('email').value +'&pass=' + document.getElementById('pass').value);"/>
        </form>
        <?php
        break;
      }
      case 'novoSave':{
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        $user = $_REQUEST["user"];

        if (User::add($user, $email, $pass)) {
          echo "Usuario cadastrado com sucesso. Prazer telo com nosco, nobre camarada.";
        }else {
          echo "Foi mal camarada, por algum motivo não foi posivel terminar seu cadastro.";
        }
        ?>
        <p>
          <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
        <?php
        break;
      }
      default:{
        Echo "Camarada, Algo errado não está certo. Ato '{$_REQUEST["act"]}' não reconhecido";
        ?>
          <p>
            <input type="button" value="OK" onclick="load('usuario','conteudo')"/>
        <?php
      }
    }
  }
  else {
    ?>
    <form>
      <p>E-mail<br> <input type="text" id="email" value="" />
      <p>Senha <br> <input type="password" id="pass" value="" />
      <p>
        <input type="submit" value="Logar" onclick="load('usuario','conteudo','act=logon&email=' + document.getElementById('email').value + '&pass=' + document.getElementById('pass').value);load('menu','menu');"/>
        <input type="button" value="Novo" onclick="load('usuario','conteudo','act=novoForm')"/>
    </form>

    <?php
  }
}
