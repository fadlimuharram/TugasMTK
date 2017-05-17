<?php
require_once"vendor/autoload.php";
use App\Interpolasi\Lagrangian as lg;
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
