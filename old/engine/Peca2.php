<?php
require_once 'Peca.php';
class Peca2 extends Peca{
  const me_color = "branco";
  const me_tipo = "Torre Branca";
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);

      for ($Yb=0; $Yb < 8; $Yb++) {
        $yNew = $this->casaY-$Yb-1;
        $xNew = $this->casaX;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
      }
      for ($Yb=0; $Yb < 8; $Yb++) {
        $yNew = $this->casaY+$Yb+1;
        $xNew = $this->casaX;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
      }
      for ($xb=0; $xb < 8; $xb++) {
        $xNew = $this->casaX+$xb+1;
        $yNew = $this->casaY;
        $captura = $this->capturaAddXY($xNew, $yNew);
        if ($captura == -2) {
          $this->posiblidadeAddXY($xNew, $yNew);
        }
        if ($captura > -2) {
          break;
        }
      }
      for ($xb=0; $xb < 8; $xb++) {
        $xNew = $this->casaX-$xb-1;
        $yNew = $this->casaY;
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
