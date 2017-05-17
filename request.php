<?php
session_start();
require_once"vendor/autoload.php";

/*
$taz = ["0"=>"0","10"=>"227.04","15"=>"362.78","20"=>"517.35","22.5"=>"602.97","30"=>"901.62"];

// data array, F(x)
$a = new lg($taz,"16");
echo "<pre>";
print_r($a->getSortArray());
echo "</pre>";
echo "<pre>";
print_r($a->hasil());
echo "</pre>";
echo $a->FX_Hasil();
*/

function unsetsession(){
  if (isset($_SESSION['sorted_data']) || isset($_SESSION['errdata']) || isset($_SESSION['datainput'])) {
    session_unset();
  }
}

if (isset($_POST['kirimLagrangian'])) {
  unsetsession();
  $xdata = $_POST['xdata'];
  $ydata = $_POST['ydata'];

  if (count($xdata) == count($ydata)) {

    $data = [];
    for ($i=0; $i < count($xdata); $i++) {
      $data[$xdata[$i]] = $ydata[$i];
    }

    $LG = new App\Interpolasi\Lagrangian($data,$_POST['datafx']);
    $LG->hitung();

    $_SESSION['datainput'] = $data;
    $_SESSION['sorted_data'] = $LG->getSortArray();
    $_SESSION['tigaAngkaDekat'] = $LG->getTigaAngka();
    $_SESSION['hasil'] = $LG->FX_Hasil();
  }else {
    $_SESSION['errdata'] = "Harap Masukan Dengan Benar";
  }

  header('Location: index.php?halaman=hasillagrangian');
}

 ?>
