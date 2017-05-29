<?php
require_once 'Peca.php';
class Peca12 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
      $this->cor = "preto";

      $this->tipo = "Rei Preto";
      $y = Peca::nameForY($casa);
      $x = Peca::nameForX($casa);

      $yNew = $y-1;
      $xNew = $x;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y+1;
      $xNew = $x;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y-1;
      $xNew = $x-1;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y+1;
      $xNew = $x+1;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y-1;
      $xNew = $x+1;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y-0;
      $xNew = $x+1;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y+1;
      $xNew = $x-1;
      $this->posiblidadeAddXY($xNew, $yNew);

      $yNew = $y+0;
      $xNew = $x-1;
      $this->posiblidadeAddXY($xNew, $yNew);
  }
}
