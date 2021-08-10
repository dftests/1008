<?php
class complex {
  private $aa,$ba,$ab,$bb;
  public function __construct($aa,$ab,$ba,$bb) {
    $this->aa = $aa;
    $this->ab = $ab;
    $this->ba = $ba;
    $this->bb = $bb;
  }
  public function addition() {
    return $this->result( ($this->aa+$this->ba), ($this->ab+$this->bb));
  }
  public function subtraction() {
    return $this->result( ($this->aa-$this->ba), ($this->ab-$this->bb));
  }
  public function multiplication() {
    return $this->result( ($this->aa*$this->ba), ($this->aa*$this->bb + $this->ab*$this->ba + $this->ab*$this->bb));
  }
  public function division() {
    $p = pow($this->ba, 2) +  pow($this->bb, 2);
    $a = ($this->aa*$this->ba + $this->ab*$this->bb) / $p;
    $b = ($this->ba*$this->ab - $this->aa*$this->bb) / $p;
    return $this->result( $a, $b);
  }
  private function result($a,$b) {
    $a = ($a==0) ? '' : $a;
    $b = ($b==0) ? '' : $b.'i';
    $znak = ($b<=0||$a=='') ? '' : '+';
    return $a.$znak.$b;
  }
} 
?>