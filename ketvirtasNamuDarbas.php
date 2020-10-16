<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$masyvas = [];

for ($i = 0; $i <= 29; $i++) {
    $skaicius = rand(5, 25);
    $masyvas [] = $skaicius;

}
print_r($masyvas);
echo "<br>";
echo "<br>";

//antra uzduotis a 
echo "--------------------------antra uzduotis a---------------------------------------";
echo "<br>";
echo "<br>";
//a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$c = 0;
foreach ($masyvas as $index => $value) {
    if ($value > 10) {
        $c++;
    }
}
echo "Masyve skaiciu didesniu nei 10 yra: $c";
echo "<br>";
echo "<br>";

//antra uzduotis b
echo "--------------------------antra uzduotis b ---------------------------------------";
echo "<br>";
echo "<br>";

//Raskite didžiausią masyvo reikšmę;
// sort($masyvas);
echo max($masyvas);

echo "<br>";
echo "<br>";

//antra uzduotis c
echo "--------------------------antra uzduotis c ---------------------------------------";
echo "<br>";
echo "<br>";

//c)	Suskaičiuokite visų reikšmių sumą;
$suma = 0;
foreach ($masyvas as $index => $value) {
    $suma += $value;
}
echo "Masyvo reiksmiu suma = $suma";

echo "<br>";
echo "<br>";

//antra uzduotis d
echo "--------------------------antra uzduotis d ---------------------------------------";
echo "<br>";
echo "<br>";
//Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas; sukurti nauja

// $masyvas2d = [];

// for ($i = 0; $i <= 29; $i++) {
//     $skaicius = rand(5, 25);
//     $masyvas2d [] = $skaicius;

// }
// print_r($masyvas2d);

$reiksmeMinusIndexas = [];
foreach ($masyvas as $index => $value) {
    $reiksmeMinusIndexas [] = $value - $index;
    // echo "Reiksme minus indexas yra lygu: $reiksmeMinusIndexas";
    // echo "<br>";
}

echo "<br>";
echo "<br>";
print_r($reiksmeMinusIndexas);
echo "<br>";
echo "<br>";

//antra uzduotis e
echo "--------------------------antra uzduotis e ---------------------------------------";
echo "<br>";
echo "<br>";
//e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas2d padidėtų iki indekso 39;
for ($i = 0; $i <= 9; $i++) {
    $skaicius2e = rand(5, 25);
    $masyvas [] = $skaicius2e;
}
print_r($masyvas);

echo "<br>";
echo "<br>";

//antra uzduotis f
echo "--------------------------antra uzduotis f ---------------------------------------";
echo "<br>";
echo "<br>";
//f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
$PorninisMasyvas = [];
$NeporninisMasyvas = [];
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
        $PorninisMasyvas [] = $value;
    } else {
        $NeporninisMasyvas [] = $value;
    }
}
print_r($PorninisMasyvas);
echo "<br>";
echo "<br>";
print_r($NeporninisMasyvas);

echo "<br>";
echo "<br>";

//antra uzduotis g
echo "--------------------------antra uzduotis g ---------------------------------------";
echo "<br>";
echo "<br>";
//Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
foreach ($PorninisMasyvas as $index => $value) {
    if ($value > 15) {
        $PorninisMasyvas [$index] = 0;
    }
}

foreach ($PorninisMasyvas as $index => $value) {
    echo "$value, "; '<br>'; 
}
echo "<br>";
echo "<br>";

//antra uzduotis h
echo "--------------------------antra uzduotis h ---------------------------------------";
echo "<br>";
echo "<br>";
//h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
foreach ($masyvas as $index => $value) {
    if ($value > 10) {
        echo "$index, "; '<br>'; 
    break;
    }
}

echo "<br>";
echo "<br>";

//antra uzduotis i
echo "--------------------------antra uzduotis i ---------------------------------------";
echo "<br>";
echo "<br>";
// Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
foreach ($masyvas as $index => $value) {
    if ($index % 2 == 0) {
        unset($masyvas[$index]);
    } 
}
foreach ($masyvas as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$atsitiktinesRaides = 'ABCD';
$masyvas3 = [];
$a = 0;
$b = 0;
$c = 0;
$d = 0;
for ($i = 0; $i <= 199; $i++) {
    $random3 = rand(0, 3);
    $masyvas3[] = $atsitiktinesRaides[$random3];
}
$A = 'A';
$B = 'B';
$C = 'C';
$D = 'D';
foreach ($masyvas3 as $index => $value) {
    if ($value == $A) {
        $a++;
    } else if ($value == $B) {
        $b++;
    } else if ($value == $C) {
        $c++;
    } else if ($value == $D) {
        $d++;
    } 
}
echo "Raidziu A yra: $a, raidziu B yra: $b, raidziu C yra: $c, raidziu D yra: $d,";
echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
sort($masyvas3);
foreach ($masyvas3 as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "<br>";

//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.

$atsitiktinesRaides5 = 'ABCD';
$masyvas5a = [];
$masyvas5b = [];
$masyvas5c = [];
$masyvas5mix = [];

for ($i = 0; $i <= 199; $i++) {
    $random5a = rand(0, 3);
    $random5b = rand(0, 3);
    $random5c = rand(0, 3);
    $masyvas5a[] = $atsitiktinesRaides5[$random5a];
    $masyvas5b[] = $atsitiktinesRaides5[$random5b];
    $masyvas5c[] = $atsitiktinesRaides5[$random5c];
}
for ($i=0; $i <count($masyvas5a) ; $i++) { 
    array_push($masyvas5mix,$masyvas5a[$i].$masyvas5b[$i].$masyvas5c[$i]);
}

// print_r($masyvas5mix);
foreach ($masyvas5mix as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo '<br>';
print_r(array_count_values($masyvas5mix));


echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

$masyvas6a = [];
$masyvas6b = [];

echo "spausdinamas masyvas6a";
echo "<br>";
echo "<br>";
// $masyvas6a=range(100, 999);
$masyvas6a=range(0, 10);
shuffle($masyvas6a);
// $masyvas6a=array_slice($masyvas6a, 0,100);
$masyvas6a=array_slice($masyvas6a, 0,10);
// print_r($masyvas6a);
foreach ($masyvas6a as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";

echo "spausdinamas masyvas6b";
echo "<br>";
echo "<br>";
// $masyvas6b=range(100, 999);
$masyvas6b=range(0, 10);
shuffle($masyvas6b);
// $masyvas6b=array_slice($masyvas6b, 0,100);
$masyvas6b=array_slice($masyvas6b, 0,10);
// print_r($masyvas6b);
foreach ($masyvas6b as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}

echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.

$nukopijuotasMasyvas6a = [];
$nukopijuotasMasyvas6a = $masyvas6a; 

echo "nukopijuotas masyvas6a";
echo "<br>";
foreach ($nukopijuotasMasyvas6a as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";

$masybasBePasikartojanciuElementusuMasyvu6b = [];

$nukopijuotasMasyvas6a;
$masyvas6b;
$masybasBePasikartojanciuElementusuMasyvu6b = array_diff($nukopijuotasMasyvas6a, $masyvas6b);
echo "nukopijuota masyvas6a dalis kurioje nera reiksmiu is masyvo6b:";
echo "<br>";
echo "<br>";
foreach ($masybasBePasikartojanciuElementusuMasyvu6b as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
$masyvasKuriameKartojasMasyvo6aIr6b = [];
echo "grazina tik tas reiksmes kurios yra identiskos ir kuriu indexai taip pat kartojasi:";
echo "<br>";
echo "<br>";
$masyvasKuriameKartojasMasyvo6aIr6b  = array_intersect_assoc($masyvas6a, $masyvas6b);
foreach ($masyvasKuriameKartojasMasyvo6aIr6b as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "grazina visas reiksmes kurios kartojasi nepriklausomai nuo indexu:";
echo "<br>";
echo "<br>";
$masyvasKuriameKartojasMasyvo6aIr6b  = array_intersect($masyvas6a, $masyvas6b);
foreach ($masyvasKuriameKartojasMasyvo6aIr6b as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
$kombinuotasMasyvas = [];

$kombinuotasMasyvas = array_combine($masyvas6a, $masyvas6b);
foreach ($kombinuotasMasyvas as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
echo "<br>";
echo "<br>";

//desimta uzduotis
echo "--------------------------desimta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
$masyvas10 = [];

for ($i = 0; $i <= 1; $i++){
    $skaicius = rand(5, 25);
    $masyvas10 [] = $skaicius;
}
for($i=2;$i<=10;$i++) {
    $masyvas10 [] = $masyvas10[$i-2] + $masyvas10[$i-1];
}
foreach ($masyvas10 as $index => $value) {
    echo "indexas: $index ir reiksme: $value, ";
    echo "<br>";
}
