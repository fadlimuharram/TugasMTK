<?php
namespace App\IntegrasiNumerik;


class Trapezioda{

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
    $hasil = $this->fx;
    $fAwal = reset($hasil);//mengambil fx awal
    $fAkhir = end($hasil);//mengambil fx akhir


    //menghitung dari no 2 hingga no n - 1
    array_shift($hasil); //menghapus elemen pertama
    array_pop($hasil); //menghapus elemen terakhir
    $jumlahFTengah = 0;
    foreach ($hasil as $key => $value) {
      $jumlahFTengah += $value;
    }

    return ($this->h/2)*($fAwal + (2 * $jumlahFTengah) + $fAkhir) ;
  }


  //mengembalikan string sebagai hasil nya
  public function getstrHasil(){
    $strhasil = $this->fx;
    $str = "";
    $fAwal = reset($strhasil);
    $fAkhir = end($strhasil);

    array_shift($strhasil);
    array_pop($strhasil);

    $str .= "($this->h/2)($fAwal + 2(";

    $lengthstrhasil = count($strhasil);
    $loop = 0;
    foreach ($strhasil as $key => $value) {
      $str .= "$value";
      if ($loop < $lengthstrhasil-1) {
        $str .= "+";
      }
      $loop++;
    }
    $str .= ") + $fAkhir)";

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
