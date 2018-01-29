<?php
require_once 'Peca.php';
class Peca5 extends Peca{
  const me_color = "branco";
  const me_tipo = "Rainha Branca";
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
    //----
    for ($Yb=0; $Yb < 8; $Yb++) {
      $yNew = $y-$Yb-1;
      $xNew = $x;
      $captura = $this->capturaAddXY($xNew, $yNew);
      if ($captura == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      if ($captura > -2) {
        break;
      }
    }
    for ($Yb=0; $Yb < 8; $Yb++) {
      $yNew = $y+$Yb+1;
      $xNew = $x;
      $captura = $this->capturaAddXY($xNew, $yNew);
      if ($captura == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      if ($captura > -2) {
        break;
      }
    }
    for ($xb=0; $xb < 8; $xb++) {
      $xNew = $x+$xb+1;
      $yNew = $y;
      $captura = $this->capturaAddXY($xNew, $yNew);
      if ($captura == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }
      if ($captura > -2) {
        break;
      }
    }
    for ($xb=0; $xb < 8; $xb++) {
      $xNew = $x-$xb-1;
      $yNew = $y;
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
