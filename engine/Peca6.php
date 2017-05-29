<?php
require_once 'Peca.php';
class Peca6 extends Peca{
  const me_color = "branco";
  const me_tipo = "Rei branco";
  public function __construct($game,$casa) {
      $this->baseContruct($game,$casa);

      $y = $this->casaY;
      $x = $this->casaX;

      $yNew = $y-1;
      $xNew = $x;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y+1;
      $xNew = $x;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y-1;
      $xNew = $x-1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y+1;
      $xNew = $x+1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y-1;
      $xNew = $x+1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y-0;
      $xNew = $x+1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y+1;
      $xNew = $x-1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $y+0;
      $xNew = $x-1;
      if ($this->capturaAddXY($xNew, $yNew) == -2) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }
  }
}
