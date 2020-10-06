<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$vardas ='Giedrius';
$pavarde = 'Tavaras';
$gimimoMetai = 1990;
$siemMetai = 2020;
$metuSkaicius = $siemMetai - $gimimoMetai;
$atsakymas = "Aš esu $vardas $pavarde. Man yra $metuSkaicius metų. ";
echo $atsakymas;
echo "<br>";
echo "<br>";

//antra uzduotis
echo "--------------------------antra uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$vienasKintamasis = rand(0, 4);
$antrasKintamasis = rand(0, 4);
echo $vienasKintamasis;
echo "<br>";
echo $antrasKintamasis;
echo "<br>";
if ($vienasKintamasis == 0 || $antrasKintamasis == 0) {
    echo "dalyba is nulio negalima";
} else if ($vienasKintamasis / $antrasKintamasis >= 1) {
    $dalyba = $vienasKintamasis / $antrasKintamasis;
    echo round($dalyba, 2);
} else if ($antrasKintamasis / $vienasKintamasis >=1) {
    $dalyba = $antrasKintamasis / $vienasKintamasis;
    echo round($dalyba, 2);
}
echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
echo "pirmas skaicius: $pirmas";
echo "<br>";
echo "antras skaicius: $antras";
echo "<br>";
echo "trecias skaicius: $trecias";
echo "<br>";
// $skaiciai = array($pirmas, $antras, $trecias);
// sort($skaiciai);
// echo $skaiciai[1];
if ($pirmas > $antras && $antras > $trecias || $pirmas < $antras && $antras < $trecias) {
    echo "vidurinysis skaicius: $antras";
} else if ($antras > $pirmas && $pirmas > $trecias || $antras < $pirmas && $pirmas < $trecias) {
    echo "vidurinysis skaicius: $pirmas";
}else if ($pirmas > $trecias && $trecias > $antras || $pirmas < $trecias && $trecias < $antras) {
    echo "vidurinysis skaicius: $trecias";
}
echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$a = rand(0, 10);
$b = rand(0, 10);
$c = rand(0, 10);
if ($b + $a >= $a && $a + $c >= $b && $c + $b >= $a) {
    echo "galima sujungti i trikampi, krastiniu ilgiai: $a, $b, $c.";
}  else {
    echo "negalima sujungti i trikampi, krastiniu ilgiai: $a, $b, $c.";
}
echo "<br>";
echo "<br>";

//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$pirmasKintamasis = rand(0, 2);
$antrasKintamasis = rand(0, 2);
$treciasKintamasis = rand(0, 2);
$ketvirtasKintamasis = rand(0, 2);

echo "Pirmas kintamasis: $pirmasKintamasis";
echo "<br>";
echo "Antras kintamasis: $antrasKintamasis";
echo "<br>";
echo "Trecias kintamasis: $treciasKintamasis";
echo "<br>";
echo "Ketvirtas kintamasis: $ketvirtasKintamasis";
echo "<br>";

$a = 0;
if ($pirmasKintamasis == 0) {
    $a++;
}
if ($antrasKintamasis == 0) {
    $a++;
}
if ($treciasKintamasis == 0) {
    $a++;
}
if ($ketvirtasKintamasis == 0) {
    $a++;
}

$b = 0;
if ($pirmasKintamasis == 1) {
    $b++;
}
if ($antrasKintamasis == 1) {
    $b++;
}
if ($treciasKintamasis == 1) {
    $b++;
}
if ($ketvirtasKintamasis == 1) {
    $b++;
}

$c = 0;
if ($pirmasKintamasis == 2) {
    $c++;
}
if ($antrasKintamasis == 2) {
    $c++;
}
if ($treciasKintamasis == 2) {
    $c++;
}
if ($ketvirtasKintamasis == 2) {
    $c++;
}
echo "Iskrito: nuliu: $a vnt, vieneru: $b vnt, dvejetu: $c vnt.";
echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$skaicius = rand(1, 6);
echo '<h1>'.$skaicius.'</h1>';
echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$pirmasKintamasis = rand(-10, 10);
$antrasKintamasis = rand(-10, 10);
$treciasKintamasis = rand(-10, 10);

if ($pirmasKintamasis < 0) {
    echo '<h1 style=color:#33cc33>'.$pirmasKintamasis.'</h1>';
} else if ($pirmasKintamasis == 0) {
    echo '<h1 style=color:#ff3300>'.$pirmasKintamasis.'</h1>';
} else if ($pirmasKintamasis > 0) {
    echo '<h1 style=color:#3333ff>'.$pirmasKintamasis.'</h1>';
}
if ($antrasKintamasis < 0) {
    echo '<h1 style=color:#33cc33>'.$antrasKintamasis.'</h1>';
} else if ($antrasKintamasis == 0) {
    echo '<h1 style=color:#ff3300>'.$antrasKintamasis.'</h1>';
} else if ($antrasKintamasis > 0) {
    echo '<h1 style=color:#3333ff>'.$antrasKintamasis.'</h1>';
}
if ($treciasKintamasis < 0) {
    echo '<h1 style=color:#33cc33>'.$treciasKintamasis.'</h1>';
} else if ($treciasKintamasis == 0) {
    echo '<h1 style=color:#ff3300>'.$treciasKintamasis.'</h1>';
} else if ($treciasKintamasis > 0) {
    echo '<h1 style=color:#3333ff>'.$treciasKintamasis.'</h1>';
}
echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$zvakiuSkaicius = rand(5, 3000);
$kaina = 0; 
$nuolaida = 0;
if ($zvakiuSkaicius <= 1000) {
    $kaina = $zvakiuSkaicius;
} else if ($zvakiuSkaicius > 1000 && $zvakiuSkaicius <= 2000) {
    $nuolaida = $zvakiuSkaicius*0.03;
    $kaina = $zvakiuSkaicius - $nuolaida;
}  else if ($zvakiuSkaicius > 2000) {
    $nuolaida = $zvakiuSkaicius*0.04;
    $kaina = $zvakiuSkaicius - $nuolaida;
}
echo "Nupirkta zvakiu: $zvakiuSkaicius$, moketina suma: $kaina$, nuolaida: $nuolaida$";
echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$pirmasKintamasis = rand(0, 100);
$antrasKintamasis = rand(0, 100);
$treciasKintamasis = rand(0, 100);
echo "Pirmas kintamasis: $pirmasKintamasis";
echo "<br>";
echo "Antras kintamasis: $antrasKintamasis";
echo "<br>";
echo "Trecias kintamasis: $treciasKintamasis";
echo "<br>";
$aritmetinisVidurkis = ($pirmasKintamasis+$antrasKintamasis+$treciasKintamasis)/3;
$apvalintasVidurkis = 0;
$patobulintasApvalintasVidurkis = 0;
$patobulinasAritmetinisVidurkis = 0;
$apvalintasVidurkis = round($aritmetinisVidurkis, 0);
echo "Apvalintas aritmetinis vidurkis: $apvalintasVidurkis";
echo "<br>";
$c = 0;
$d = 0;
if ($pirmasKintamasis > 10 && $pirmasKintamasis < 90) {
    $d += $pirmasKintamasis;
    $c++;
}
if ($antrasKintamasis > 10 && $antrasKintamasis < 90) {
    $d += $antrasKintamasis;
    $c++;
}
if ($treciasKintamasis > 10 && $treciasKintamasis < 90) {
    $d += $treciasKintamasis;
    $c++;
}
echo "Naujas kintmajusu skaicius: $c";
echo "<br>";
echo "Nauja kintamuju suma: $d";
echo "<br>";
$patobulinasAritmetinisVidurkis = $d / $c;
$patobulintasApvalintasVidurkis = round($patobulinasAritmetinisVidurkis, 0);
echo "Suapvalintas naujas vidurkis: $patobulintasApvalintasVidurkis";
echo "<br>";
echo "<br>";

echo "--------------------------desimta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$valandos = rand(0, 23);
$minutes = rand(1, 59);
$sekundes = rand(1, 59);
$papildomosSekundes = rand(0, 300);
$sekundziuSuma = 0;
$naujosValandos = 0;
$naujosMinutes = 0;
$naujosSekundes = 0;
echo "Papildomos sekundes: $papildomosSekundes";
$visasLaikasSekundemis = ($valandos * 60 + $minutes) * 60 + $sekundes;
echo "<br>";
echo "Sugeneruotas laikas sekundemis: $visasLaikasSekundemis";
$sekundziuSuma = $visasLaikasSekundemis + $papildomosSekundes;
echo "<br>";
echo "Laikas: valandos: $valandos h, minutes: $minutes min, sekundes: $sekundes s";
echo "<br>";
echo "Sekundziu suma: $sekundziuSuma";
echo "<br>";
$naujosMinutes = $sekundziuSuma / 60;
$naujosValandos = $naujosMinutes / 60;
$h = floor($naujosValandos);
$naujosMinutes = ($naujosValandos - floor($naujosValandos)) * 60;
$m = floor($naujosMinutes);
$naujosSekundes = ($naujosMinutes - floor($naujosMinutes)) * 60;
$s = floor($naujosSekundes);
echo "Naujas laikas: valandos: $h h, minutes: $m min, sekundes: $s s";
// echo "<br>";
// echo "<br>";

// echo "--------------------------venuolikta uzduotis---------------------------------------";
// echo "<br>";
// echo "<br>";
// $a11 = rand(1000, 9999);
// $b11 = rand(1000, 9999);
// $c11 = rand(1000, 9999);
// $d11 = rand(1000, 9999);
// $e11 = rand(1000, 9999);
// $f11 = rand(1000, 9999);
// $skaicius = $a11 . $b11 . $c11 . $d11 . $e11 . $f11;
// echo $skaicius;
// echo $skaicius[0];
