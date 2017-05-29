<?php
require_once 'Peca.php';
class Peca9 extends Peca{
  const me_color = "preto";
  const me_tipo = "Cavalo preto";
  public function __construct($tabuleiro,$peca) {
    $this->baseContruct($tabuleiro, $peca);
    //0
    $yNew = $this->casaY-2;
    $xNew = $this->casaX-1;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
    //1
    $yNew = $this->casaY-1;
    $xNew = $this->casaX-2;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
    //2
    $yNew = $this->casaY-2;
    $xNew = $this->casaX+1;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
    //3
    $yNew = $this->casaY-1;
    $xNew = $this->casaX+2;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
    //4
    $yNew = $this->casaY+2;
    $xNew = $this->casaX-1;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
    //5
    $yNew = $this->casaY+1;
    $xNew = $this->casaX-2;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    };
    //6
    $yNew = $this->casaY+2;
    $xNew = $this->casaX+1;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    };
    //7
    $yNew = $this->casaY+1;
    $xNew = $this->casaX+2;
    if ($this->capturaAddXY($xNew, $yNew) == -2) {
      $this->posiblidadeAddXY($xNew, $yNew);
    }
  }
}
