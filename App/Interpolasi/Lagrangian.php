<?php
namespace App\Interpolasi;

class Lagrangian{

  private $data = array();
  private $dataFx;
  private $getTigaAngka = array();

  function __construct(array $data,$dataFx){
    ksort($data);
    $this->data = $data;
    $this->dataFx = $dataFx;
  }

  function hitung(){
    $this->isExistBetween();
    $this->cariTigaAngka();
  }

  function getTigaAngka(){
    return $this->getTigaAngka;
  }

  function getSortArray(){
    return $this->data;
  }

  function isExistBetween(){
    $min = min(array_keys($this->data));
    $max = max(array_keys($this->data));
    if ($this->dataFx >= $min && $this->dataFx <= $max) {
      return true;
    }else {
      return false;
    }
  }


  //return array yang sudah di sort pada saat construct
  function getSortedArray(){
    return $this->data;
  }


  //convert array 1d menjadi 2d
  function makearray(){
    $arr = array();
    foreach ($this->data as $key => $value) {
      $arr[] = array($key=>$value);
    }
    return $arr;
  }

  //mencari 3 angka yang berdekatan
  function cariTigaAngka(){
    if ($this->isExistBetween()) {
      $mkarray = $this->makearray();

      //mencari index 3 angka
      $arrindex = [];
      foreach ($mkarray as $key => $value) {

        foreach ($value as $keyDalam => $valueDalam) {
          if ($this->dataFx > $keyDalam) {
            $arrindex[0] = $key - 1;
            $arrindex[1] = $key;
            $arrindex[2] = $key + 1;
          }
        }

      }


      //mendapatkan index 3 angka
      foreach ($arrindex as $key => $value) {
        foreach ($mkarray[$value] as $keyDalam => $valueDalam) {
          $this->getTigaAngka[$keyDalam] = $valueDalam;
        }
      }
    }
  }



  function Li($i,$data_i){
    $hitung = count($this->getTigaAngka);
    if ($hitung == 3) {

      $total = 1;
      $j = 0;
      foreach ($this->getTigaAngka as $key => $value) {
        if ($j != $i) {
          $total *= ( ($this->dataFx - $key) / ($data_i - $key) );
        }
        $j++;
      }

      return $total;

    }
    return false;
  }

  function FX_Hasil(){
    $hitung = count($this->getTigaAngka);
    if ($hitung == 3) {
      $i = 0;
      $hasil = 0;
      foreach ($this->getTigaAngka as $key => $value) {
        $hasil += $this->Li($i,$key) * $value;
        $i++;
      }
      return $hasil;
    }
    return false;
  }

}
 ?>
