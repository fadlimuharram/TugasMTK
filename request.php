<?php
session_start();
require_once"vendor/autoload.php";

if (isset($_SESSION['sorted_data']) || isset($_SESSION['errdata']) || isset($_SESSION['datainput']) || isset($_SESSION['getfxReiman'])) {
  session_unset();
}

if (isset($_POST['kirimLagrangian'])) {

  $xdata = $_POST['xdata'];
  $ydata = $_POST['ydata'];

  if (count($xdata) == count($ydata)) {

    $data = [];
    for ($i=0; $i < count($xdata); $i++) {
      $data[$xdata[$i]] = $ydata[$i];
    }

    $LG = new App\Interpolasi\Lagrange($data,$_POST['datafx']);
    $LG->hitung();

    $_SESSION['datainput'] = $data;
    $_SESSION['sorted_data'] = $LG->getSortArray();
    $_SESSION['tigaAngkaDekat'] = $LG->getTigaAngka();
    $_SESSION['hasil'] = $LG->FX_Hasil();
    $_SESSION['XDicari'] = $_POST['datafx'];
  }else {
    $_SESSION['errdata'] = "Harap Masukan Dengan Benar";
  }

  header('Location: index.php?halaman=hasilLagrange');
}

if (isset($_POST['hitungkelompok'])) {
  $n = $_POST['ninput'];
  $a = $_POST['ainput'];
  $b = $_POST['binput'];

  $reiman = new App\IntegrasiNumerik\Reimann($n,$b,$a);
  $trapezioda = new App\IntegrasiNumerik\Trapezioda($n,$b,$a);

  $_SESSION['getfxReiman'] = $reiman->getFX();
  $_SESSION['getfxTrapezioda'] = $trapezioda->getFX();

  $_SESSION['getstrHasilReiman'] = $reiman->getstrHasil();
  $_SESSION['getstrHasilTrapezioda'] = $trapezioda->getstrHasil();

  $_SESSION['hasilReiman'] = $reiman->hasil();
  $_SESSION['hasilTrapezioda'] = $trapezioda->hasil();

  $_SESSION['getHReiman'] = $reiman->getH();
  $_SESSION['getNReiman'] = $reiman->getN();
  $_SESSION['getBReiman'] = $reiman->getAtas();
  $_SESSION['getAReiman'] = $reiman->getBawah();

  $_SESSION['getHTrapezioda'] = $trapezioda->getH();
  $_SESSION['getNTrapezioda'] = $trapezioda->getN();
  $_SESSION['getBTrapezioda'] = $trapezioda->getAtas();
  $_SESSION['getATrapezioda'] = $trapezioda->getBawah();

  header('Location: index.php?halaman=hasilkelompok');
}

/*
$tez = new App\IntegrasiNumerik\Reimann(10,8,3);
$tez2 = new App\IntegrasiNumerik\Trapezioda(10,8,3);
echo'<pre>';
print_r($tez->getFX());
echo'</pre>';
echo '<hr />';
echo $tez->hasil();
echo '<hr />';
echo'<pre>';
print_r($tez2->getFX());
echo'</pre>';
echo $tez2->hasil();
echo '<hr />';
echo $tez2->getstrHasil();
echo '<hr />';
echo $tez->getstrHasil();
*/
 ?>
