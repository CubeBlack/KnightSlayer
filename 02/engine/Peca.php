<?php
require_once "Game.php";
class Peca{
    private $tabuleiro;
    public $movimento;
    public $captura;
    private $casa;
    private $playerColor;
    public $casaX;
    public $casaY;

    public function __construct($tabuleiro) {
      //$this->baseContruct($game,$casa);
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
      $pecaOfCasa = $this->pecaOfCasa($x,$y);
      if ($pecaOfCasa == null)
        if($y>0&&$y<9&&$x>0&&$x<9){
          if(!is_array($this->movimento))
            $this->movimento[0] = Peca::nameOfPosition($x, $y);
          else
            array_push($this->movimento,Peca::nameOfPosition($x, $y));
          return true;
        }
    }
    public function capturaAddXY($x,$y){
      $pecaOfCasa = $this->pecaOfCasa($x,$y);
      if ($pecaOfCasa != null){
        $objName = "peca".$pecaOfCasa->tipo;
        if($objName::me_color != $this::me_color){
          if($y>0&&$y<9&&$x>0&&$x<9){
            if(!is_array($this->captura)){
              $this->captura[0] = Peca::nameOfPosition($x, $y);
              $retorno = 1;
            }
            else{
              array_push($this->captura,Peca::nameOfPosition($x, $y));
              $retorno = 2;
            }
          }
          else{
            $retorno = 0;
          }
        }
        else {
          $retorno = -1;
        }
      }
      else {
        $retorno = -2;
      }
      return $retorno;
    }
    public function baseContruct($tabuleiro, $peca){
      $this->tabuleiro = $tabuleiro;
      $this->casa = $tabuleiro["pecas"]->$peca->posicao;
      $this->casaX = $this->nameForX($this->casa);
      $this->casaY = $this->nameForY($this->casa);
      $this->playerColor = Game::meCor($tabuleiro["id"]);
    }
    public function pecaOfCasa($x, $y){
      foreach ($this->tabuleiro["pecas"] as $key => $value) {
        if($value->posicao == Peca::nameOfPosition($x, $y)){
          return $value;
        }
      }
    }
    public function situacao(){
      $peca = $this->pecaOfCasa($this->casaX,$this->casaY);
      return $peca->situacao;
    }
}
