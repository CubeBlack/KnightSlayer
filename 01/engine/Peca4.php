<?php
require_once 'Peca.php';
class Peca4 extends Peca{
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);
    $this->cor = "branco";

    $this->tipo = "Bispo Branco";
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
  }
}
