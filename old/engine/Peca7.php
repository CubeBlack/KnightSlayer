<?php
require_once 'Peca.php';
class Peca7 extends Peca{
  const me_color = "preto";
  const me_tipo = "Pião preto";
  public function __construct($game,$casa) {
        $this->baseContruct($game,$casa);

        $y = $this->casaY;
        $x = $this->casaX;

        $yNew = $y-1;
        $xNew = $x;
        $primeiroM = false;
        if($this->posiblidadeAddXY($xNew, $yNew))
          $primeiroM = true;


        $yNew = $y-2;
        $xNew = $x;
        if ($this->situacao() == ""&&$primeiroM) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }

        $index = 0;
        $yNew = $y-1;
        $xNew = $x+1;
        $this->capturaAddXY($xNew, $yNew);

        $yNew = $y-1;
        $xNew = $x-1;
        $this->capturaAddXY($xNew, $yNew);
    }
}
