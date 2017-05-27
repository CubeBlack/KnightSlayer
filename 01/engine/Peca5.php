<?php
require_once 'Peca.php';
class Peca5 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
    $this->cor = "branco";

    $this->tipo = "Rainha Branca";
    $y = Peca::nameForY($casa);
    $x = Peca::nameForX($casa);

    for ($b=0; $b < 8; $b++) {
        $yNew = $y-$b-1;
        $xNew = $x-$b-1;
        $this->posiblidadeAddXY($xNew, $yNew);
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y+$b+1;
        $xNew = $x+$b+1;
        $this->posiblidadeAddXY($xNew, $yNew);
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y+$b+1;
        $xNew = $x-$b-1;
        $this->posiblidadeAddXY($xNew, $yNew);
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y-$b-1;
        $xNew = $x+$b+1;
        $this->posiblidadeAddXY($xNew, $yNew);
    }
    //----
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
