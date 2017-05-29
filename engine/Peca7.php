<?php
require_once 'Peca.php';
class Peca7 extends Peca{
  const me_color = "Preto";
  const me_tipo = "Pião preto";
  public function __construct($game,$casa) {
        $this->baseContruct($game,$casa);

        $y = Peca::nameForY($casa);
        $x = Peca::nameForX($casa);

        $yNew = $y-1;
        $xNew = $x;
        $this->posiblidadeAddXY($xNew, $yNew);

        $yNew = $y-2;
        $xNew = $x;
        $this->posiblidadeAddXY($xNew, $yNew);

        $index = 0;
        $yNew = $y-1;
        $xNew = $x+1;
        $this->capturaAddXY($xNew, $yNew);

        $yNew = $y-1;
        $xNew = $x-1;
        $this->capturaAddXY($xNew, $yNew);
    }
}
