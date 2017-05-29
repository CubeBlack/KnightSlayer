<?php
require_once 'Peca.php';
class Peca3 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
      $this->cor = "branco";

      $this->tipo = "Cavalo Branco";
      $y = Peca::nameForY($casa);
      $x = Peca::nameForX($casa);

      //0
      $yNew = $y-2;
      $xNew = $x-1;
      $this->posiblidadeAddXY($xNew, $yNew);
      //1
      $yNew = $y-1;
      $xNew = $x-2;
      $this->posiblidadeAddXY($xNew, $yNew);
      //2
      $yNew = $y-2;
      $xNew = $x+1;
      $this->posiblidadeAddXY($xNew, $yNew);
      //3
      $yNew = $y-1;
      $xNew = $x+2;
      $this->posiblidadeAddXY($xNew, $yNew);
      //4
      $yNew = $y+2;
      $xNew = $x-1;
      $this->posiblidadeAddXY($xNew, $yNew);
      //5
      $yNew = $y+1;
      $xNew = $x-2;
      $this->posiblidadeAddXY($xNew, $yNew);
      //6
      $yNew = $y+2;
      $xNew = $x+1;
      $this->posiblidadeAddXY($xNew, $yNew);
      //7
      $yNew = $y+1;
      $xNew = $x+2;
      $this->posiblidadeAddXY($xNew, $yNew);
  }
}
