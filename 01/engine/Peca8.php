<?php
require_once 'Peca.php';
class Peca8 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
      $this->cor = "preto";

      $this->tipo = "Torre preta";
      $y = Peca::nameForY($casa);
      $x = Peca::nameForX($casa);

      for ($Yb=0; $Yb < 8; $Yb++) {
        $yNew = $y-$Yb-1;
        $xNew = $x;
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      for ($Yb=0; $Yb < 8; $Yb++) {
        $yNew = $y+$Yb+1;
        $xNew = $x;
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      for ($xb=0; $xb < 8; $xb++) {
        $xNew = $x+$xb+1;
        $yNew = $y;
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      for ($xb=0; $xb < 8; $xb++) {
        $xNew = $x-$xb-1;
        $yNew = $y;
        $this->posiblidadeAddXY($xNew, $yNew);
      }
  }
}
