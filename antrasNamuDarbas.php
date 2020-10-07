<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$aktoriausVardas1 = 'Keanu';
$atoriausPavarde1 =  'Reeves';
if (strlen($aktoriausVardas1) < strlen($atoriausPavarde1)) {
    echo $aktoriausVardas1;
} else {
    echo $atoriausPavarde1;
}
echo "<br>";
echo "<br>";

//antra uzduotis
echo "--------------------------antra uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$aktoriausVardas2 = 'Keanu';
echo $aktoriausVardas2;
echo "<br>";
$atoriausPavarde2 = 'Reeves';
echo $atoriausPavarde2;
echo "<br>";
$aktoriausVardas2 = strtoupper($aktoriausVardas2);
$atoriausPavarde2 = strtolower($atoriausPavarde2);
echo $aktoriausVardas2;
echo "<br>";
echo $atoriausPavarde2;
echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$aktoriausVardas3 = 'Keanu';
$atoriausPavarde3 =  'Reeves';
$inicialai3 = 0;
$pirmaVardoRaide3 = substr($aktoriausVardas3, 0, -4);
$pirmaPavardesRaide3 = substr($atoriausPavarde3, 0, -5);
echo "pirma vardo raide - $pirmaVardoRaide3";
echo "<br>";
echo "pirma pavardes raide - $pirmaPavardesRaide3";
echo "<br>";
$inicialai3 = $pirmaVardoRaide3 . $pirmaPavardesRaide3;
echo "inicialai - $inicialai3"; 
echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$aktoriausVardas4 = 'Keanu';
$atoriausPavarde4 =  'Reeves';
$atvirkstiniaiInicialai4 = 0;
$paskutineVardoRaide4 = substr($aktoriausVardas4, -3);
$paskutinePavardesRaide4 = substr($atoriausPavarde4, -3);
echo "paskutine vardo raide - $paskutineVardoRaide4";
echo "<br>";
echo "paskutine pavardes raide - $paskutinePavardesRaide4";
echo "<br>";
$atvirkstiniaiInicialai4 = $paskutineVardoRaide4 . $paskutinePavardesRaide4;
echo "atvirkstiniai inicialai - $atvirkstiniaiInicialai4"; 
echo "<br>";
echo "<br>";


//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$stringas5 = 'An American in Paris';
echo $stringas5;
echo "<br>";
$pakeistasStringas5 = str_replace("a", "*", $stringas5);
$pakeistasStringas5 = str_replace("A", "*", $pakeistasStringas5);
echo $pakeistasStringas5;
echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$stringas6 = 'An American in Paris';
echo $stringas6;
echo "<br>";
$raidziuSkaicius6 = 0;
$a6 = substr_count($stringas6,"a");
$b6 = substr_count($stringas6,"A");
echo "mazuju a raidziu kiekis = $a6";
echo "<br>";
echo "dydziuju A raidziu kiekis = $b6";
echo "<br>";
$raidziuSkaicius6 = $a6 + $b6;
echo "a raidziu suma = $raidziuSkaicius6";
echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$stringas71 = 'An American in Paris';
$stringas72 = "An American in Paris's";
$stringas73 = '2001: A Space Odyssey';
$stringas74 = "It's a Wonderful Life";
echo $stringas71;
echo "<br>";
echo $stringas72;
echo "<br>";
echo $stringas73;
echo "<br>";
echo $stringas74;
echo "<br>";
$stringas71 = preg_replace("/[AaEeIiUuOoYy]/", '', $stringas71);
echo $stringas71;
echo "<br>";
$stringas72 = preg_replace("/[AaEeIiUuOoYy]/", '', $stringas72);
echo $stringas72;
echo "<br>";
$stringas73 = preg_replace("/[AaEeIiUuOoYy]/", '', $stringas73);
echo $stringas73;
echo "<br>";
$stringas74 = preg_replace("/[AaEeIiUuOoYy]/", '', $stringas74);
echo $stringas74;
echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$stringas8 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $stringas8;
echo "<br>";
$str = preg_replace('/\D/', '', $stringas8);
echo "Epizodo numeris: $str";
echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$stringas9 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo $stringas9;
echo "<br>";
$zodziuIlgis9 = str_word_count($stringas9);
echo "Bendras zodziu kiekis: $zodziuIlgis9";
$tikTrumpi9 = preg_replace("~\S{6,}\b~", "", $stringas9);
$atskiriZodziai9 = explode(" ", $tikTrumpi9);
echo "<br>";
$zodziuIlgis9 = str_word_count($tikTrumpi9);
echo "Skaicius zodziu, kuriu ilgis <= 5: $zodziuIlgis9";

echo "<br>";
echo "<br>";
$stringas91 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
echo $stringas91;
echo "<br>";
$zodziuIlgis91 = str_word_count($stringas91);
echo "Bendras zodziu kiekis: $zodziuIlgis91";
$tikTrumpi91 = preg_replace("~\S{6,}\b~", "", $stringas91);
$atskiriZodziai91 = explode(" ", $tikTrumpi91);
echo "<br>";
$zodziuIlgis91 = str_word_count($tikTrumpi91);
echo "Skaicius zodziu, kuriu ilgis <= 5: $zodziuIlgis91";
echo "<br>";
echo "<br>";

//desimta uzduotis
echo "--------------------------desimta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

$raides10 = 'qwertyuiopasdfghjklzxcvbnm';

for ($i = 0; $i <= 2; $i++) {
    $random10 = rand(0, 24);
    Echo $raides10[$random10];
}
echo "<br>";
echo "<br>";

//11 uzduotis
echo "--------------------------venuolikta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
// $sakinys1 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale ";
// $sakinys2 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
// $sakinys3 = $sakinys1 . $sakinys2;
// $zodziai = $parts = explode(' ', $sakinys3);
// echo count($zodziai);
// echo "<br>";
// $skaiciai = [];
// $random = rand(0,23);
// $times = 23;
// while($times-- > 0)
// {
//    while(in_array($random, $skaiciai))$random = rand(0,23);
//    $skaiciai[] = $random;
// }
// // for ($i = 0; $i <= 23; $i++) {
// //     echo $skaiciai[$i];
// //     echo "<br>";
// // }

// for ($i = 0; $i <= 10; $i++) {
//     echo $zodziai[$skaiciai[$i]];
//     echo "<br>";
// }