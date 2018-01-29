<?php
require_once 'Peca.php';
class Peca1 extends Peca{
  const me_color = "branco";
  const me_tipo = "Pião Branco";
  public function __construct($tabuleiro, $peca) {
      $this->baseContruct($tabuleiro, $peca);

      $yNew = $this->casaY+1;
      $xNew = $this->casaX;
      $primeiroM = false;
      if($this->posiblidadeAddXY($xNew, $yNew))
        $primeiroM = true;

      $yNew = $this->casaY+2;
      $xNew = $this->casaX;
      if ($this->situacao() == ""&&$primeiroM) {
        $this->posiblidadeAddXY($xNew, $yNew);
      }

      $yNew = $this->casaY+1;
      $xNew = $this->casaX+1;
      $this->capturaAddXY($xNew, $yNew);

      $yNew = $this->casaY+1;
      $xNew = $this->casaX-1;
      $this->capturaAddXY($xNew, $yNew);

  }
}
