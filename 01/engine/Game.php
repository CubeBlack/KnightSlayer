<?php
require_once 'User.php';
Class Game{
    public $peca;
    public $view;
    public function __construct($id) {
        require_once "Peca.php";
        for($p = 1; $p <= 12; $p++){
           require_once "Peca$p.php";
        }
        $game = Game::view($id);
        $this->view = $game;
        foreach ($game["tabuleiro"]->pecas as $key => $value) {
            $classTipo = "Peca" . $value->tipo;
            $posicao = $value->posicao;
            $this->peca[$key] = new $classTipo($id,$posicao);
        }
    }
    static function view($id){
        global $dbs;
        $retorno["dados"] = $dbs->tableSelect("jogo","WHERE id = '$id'")[0];
        $retorno["tabuleiro"] = json_decode($retorno["dados"]["tabuleiro"]);
        ///-----------------------------------------------
        if($retorno["dados"]["player1"] == User::getId()){
          $retorno["msg"] =   $retorno["dados"]["player1msg"];
          $retorno["numPlayer"] = 1;
          $retorno["color"] = "preto";
        }
        elseif($retorno["dados"]["player2"] == User::getId()){
          $retorno["msg"] =   $retorno["dados"]["player2msg"];
          $retorno["numPlayer"] = 2;
          $retorno["color"] = "branco";
        }
        else {
          $retorno["msg"] =  "Você é a penas espectador";
          $retorno["numPlayer"] = 0;
          $retorno["color"] = "red";
        }
        ///------------------------------------------------------
        if($retorno["dados"]["vez"]== $retorno["numPlayer"]){
          $retorno["vez"] = "minha";
        }
        else {
          $retorno["vez"] = "other";
        }
        return $retorno;
    }
    static function desafiar($id){
        global $dbs;
        $tabuleiroArr = null;
        require_once 'pecasArr.php';
        if (!User::logued()) {
          $retornoArr = [
            "gameId" => -1,
            "reason" => "Você deve primeiro efetuar login"
          ];
          return $retornoArr;
        }
        if ($id == User::getId()) {
          $retornoArr = [
            "gameId" => -2,
            "reason" => "Você não pode desafiar a si mesmo"
          ];
          return $retornoArr;
        }
        $tabuleiroJson = json_encode($tabuleiroArr,JSON_FORCE_OBJECT);
        $reason = "";
        $newGameId = $dbs->TableInsert("jogo", array(
            "null",
            $tabuleiroJson,
            User::getId(),
            "Você é o Player 1. Peças pretas. Aguarde o movimeto das brancas.",
            $id,
            "Faça seu movimeto. Você é o Player2, Paças brancas.",
            "Jogo Desafiado",
            "desafiando",
            2
        ));
        if(!$newGameId){
          $reason = "Promlema no banco de dadoss";
        }
        $retornoArr = [
          "gameId" => $newGameId,
          "reason" => $reason
        ];
        return $retornoArr;
    }
    static function meGames(){
        global $dbs;
        $id = User::getId();
        $retorno = $dbs->tableSelect("jogo","WHERE player1 = '$id' or player2 = '$id'");
        return $retorno;
    }
    static function getOne($id){
        global $dbs;
        $id = User::getId();
        $retorno = $dbs->tableSelect("jogo","")[0];
        return $retorno;
    }
    static function peca($gameId,$peca){
        $retorno = null;
        $gameObj = new Game($gameId);
        //ar_dump($gameObj["vez"]);
        if (Game::view($gameId)["vez"] == "minha") {
          if ($gameObj->peca[$peca]->cor == $gameObj->view["color"]) {
            Game::msgSet(
              $gameId,
              $gameObj->view["numPlayer"],
              "Selecionado a peca $peca"
            );
            if (is_array($gameObj->peca[$peca]->movimento))
              foreach ($gameObj->peca[$peca]->movimento as $key => $value){
                  $retorno["movimento"][$key] = $gameObj->peca[$peca]->movimento[$key];
              }
            if (is_array($gameObj->peca[$peca]->captura) )
              foreach ($gameObj->peca[$peca]->captura as $key => $value){
                  $retorno["captura"][$key] = $gameObj->peca[$peca]->captura[$key];
              }
          }
          else {
            Game::msgSet(
              $gameId,
              $gameObj->view["numPlayer"],
              "Não é sua peça!"
            );
          }
        }
        else {
          Game::msgSet(
            $gameId,
            $gameObj->view["numPlayer"],
            "Não é sua Vez, espere seu oponente jogar"
          );
        }
        $retorno["tipo"] = $gameObj->peca[$peca]->tipo;
        return $retorno;
    }
    static function move($game,$pecaNum,$destino) {
      global $dbs;
      $pecaObj = Game::peca($game,$pecaNum);
      $gameView = Game::view($game);
      if ($gameView["vez"] == "minha") {
        $a=1;
        $gameView["tabuleiro"]->pecas->$pecaNum->posicao = $destino;
        $tabuleiroJson = json_encode($gameView["tabuleiro"],JSON_FORCE_OBJECT);
        $dbs->tableUpdateOne(
          "jogo",
          "tabuleiro",
          $tabuleiroJson,
          "WHERE id = '$game'");
          //----
          Game::passarVez($game);
      }
      else {
        Game::msgSet(
          $gameId,
          $gameObj->view["numPlayer"],
          "Não é sua vez!"
        );
      }
    }
    static function capture($game,$pecaNum,$destino)
    {
      $destino;
      global $dbs;
      $gameview = Game::view($game);
      foreach ($gameview["tabuleiro"]->pecas as $key => $value) {
        if($value->posicao == $destino) continue;
        if($key == $pecaNum){
          $value->posicao = $destino;
        }
        $newPecas[$key] = $value;
      }
      $tabuleiroJson = json_encode(array ("pecas" =>$newPecas),JSON_FORCE_OBJECT);
      $dbs->tableUpdateOne(
        "jogo",
        "tabuleiro",
        $tabuleiroJson,
        "WHERE id = '$game'"
      );
      Game::passarVez($game);
    }
    static function msgSet($gameId,$numPlayer,$msg){
      global $dbs;
      $dbs->tableUpdateOne(
        "jogo",
        "player{$numPlayer}msg",
        "$msg",
        "WHERE id = '$gameId'"
      );
    }
    static function passarVez($game){
      global $dbs;
      $gameView = Game::view($game);
      if($gameView["numPlayer"] == 1){
        $newVez = 2;
      }
      else{
        $newVez = 1;
      }
      $dbs->tableUpdateOne(
        "jogo",
        "vez",
        $newVez,
        "WHERE id = '$game'");
    }
}
