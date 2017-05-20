<?php
namespace App\IntegrasiNumerik;


class Reimann{

  private $n, $h, $atas, $bawah;
  private $fx = array();

  public function __construct($n,$b,$a){
      $this->n = $n;
      $this->atas = $b;
      $this->bawah = $a;
      $this->h = ($this->atas - $this->bawah)/$this->n;
      $this->hitungFX();
  }

  //fungsi untuk soal
  private function soal($x){
    return pow($x,2) + 4;
  }

  //fungsi untuk menghitung fx secara looping, di mulai dari titik bawah hingga titik atas
  //tergantung dengan n yang di berikan
  public function hitungFX(){
    for ($i=$this->bawah; $i <= $this->atas ; $i+=$this->h) {
      $this->fx[(string)$i] = $this->soal($i);
    }
  }

  //fungsi untuk mengembalikan fx berupa array key dan value
  public function getFX(){
    return $this->fx;
  }

  public function hasil(){
    $fxTotal  = 0;
    foreach ($this->fx as $key => $value) {
        $fxTotal += $value;
    }

    return $this->h * $fxTotal;
  }

//mengembalikan sebagai string
  public function getstrHasil(){
    $str  = "$this->h(";
    $lenghtFX = count($this->fx);
    $loop = 0;
    foreach ($this->fx as $key => $value) {
        $str .= "$value";
        if ($loop < $lenghtFX - 1) {
          $str .= "+";
        }
        $loop++;
    }
    $str .= ")";
    return $str;
  }

  public function getAtas(){
    return $this->atas;
  }

  public function getBawah(){
    return $this->bawah;
  }

  public function getH(){
    return $this->h;
  }

  public function getN(){
    return $this->n;
  }
}
