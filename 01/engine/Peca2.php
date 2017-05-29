<?php
require_once 'Peca.php';
class Peca2 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
      $this->cor = "branco";
      $this->tipo = "Torre Branca";
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
