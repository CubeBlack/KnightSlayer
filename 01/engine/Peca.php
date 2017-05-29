<?php
require_once "Game.php";
class Peca{
    public $game;
    public $tipo;
    public $movimento;
    public $captura;
    public $posicao;
    public $cor;
    public $gameView;

    public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
    }
    static function nameForY($name){
        return preg_replace("/[^0-9]/", "", $name);
    }
    static function nameForX($name){
        $nameLetra = $name[0];
        $retorno = ord($nameLetra) - 96;
        return $retorno;
    }
    static function nameOfPosition($x,$y){
        $retorno = sprintf("%c%d",$x + 96,$y);
        return $retorno;
    }
    public function posiblidadeAddXY($x,$y){
      if($y>0&&$y<9&&$x>0&&$x<9)
        if(!is_array($this->movimento))
          $this->movimento[0] = Peca::nameOfPosition($x, $y);
        else
          array_push($this->movimento,Peca::nameOfPosition($x, $y));
    }
    public function capturaAddXY($x,$y){
      $pecaOfCasa = $this->pecaOfCasa($x,$y);
      if ($pecaOfCasa != null){
        $objName = "peca".$pecaOfCasa->tipo;
        if($objName::me_color != $this::me_color){
          if($y>0&&$y<9&&$x>0&&$x<9)
            if(!is_array($this->captura))
              $this->captura[0] = Peca::nameOfPosition($x, $y);
            else
              array_push($this->captura,Peca::nameOfPosition($x, $y));
        }
      }

    }
    public function baseContruct($game,$casa){
      $this->casa = $casa;
      $this->game = $game;
      $this->gameView = Game::view($game);
    }
    public function pecaOfCasa($x, $y){
      foreach ($this->gameView["tabuleiro"]->pecas as $key => $value) {
        if($value->posicao == Peca::nameOfPosition($x, $y)){
          return $value;
        }
      }
    }
}
