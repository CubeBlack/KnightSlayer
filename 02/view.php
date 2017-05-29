<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>knigth Slayer</title>
    <script type="text/javascript" src="view/js/main.js"></script>
    <link rel="stylesheet" href="page/css/page.css">
    <link rel="stylesheet" href="view/css/view.css">
  </head>
  <body onload="load();">
    <div id="page">
      <div id="menu">
        <h2>
          <a href="./"><input type="button" value="Voltar"></a>
          KS <span id = "gameId"></span> .
          <span id="pl1Username"></span> X  <span id="pl2Username"></span>
          <input type="button" onClick="load('players');" value="Desistir">
        </h2>
      </div>
      <hr>
      <svg id="screen" width="100%" height="100%">
        <image id="tabuleiro" xlink:href="view/img/tabuleiro.svg" x="0" y="0" height="450" width="450"/>
        <g id="pecas"></g>
        <g id="peliculas"></g>
      </svg>
      <div id="msg"></div>
    </div>
    <div id="rodape">
      <a href="../">Dannke</a> by Daniel Lima
    </div>
  </body>

</html>
