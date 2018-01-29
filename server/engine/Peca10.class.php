<?php
require_once 'Peca.php';
class Peca10 extends Peca{
  const me_color = "preto";
  const me_tipo = "Bispo preta";
  public function __construct($game,$casa) {
    $this->baseContruct($game,$casa);

    $y = $this->casaY;
    $x = $this->casaX;

    for ($b=0; $b < 8; $b++) {
        $yNew = $y-$b-1;
        $xNew = $x-$b-1;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y+$b+1;
        $xNew = $x+$b+1;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y+$b+1;
        $xNew = $x-$b-1;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
    }
    for ($b=0; $b < 8; $b++) {
        $yNew = $y-$b-1;
        $xNew = $x+$b+1;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
    }
  }
}
