<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
$masyvas = [];

for ($i = 0; $i <= 9; $i++) {
    $masyvas [$i] = [];
    for ($j=0; $j < 5; $j++) { 
        $skaicius = rand(5, 25);
        $masyvas[$i][] = $skaicius;
    }
}
print_r($masyvas);
echo "<br>";
echo "<br>";

//antra uzduotis a 
echo "--------------------------antra uzduotis a---------------------------------------";
echo "<br>";
echo "<br>";
//Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$c = 0;
foreach ($masyvas as $index => $value) {
    foreach ($value as $index => $value) {
        if ($value > 10) {
            $c++;
        }
    }
}
echo "masyve elementu didesniu uz 10 yra: $c"
;
echo "<br>";
echo "<br>";

//antra uzduotis b 
echo "--------------------------antra uzduotis b---------------------------------------";
echo "<br>";
echo "<br>";
$didziausiaReiksme = 0;
foreach ($masyvas as $index => $value) {
    foreach ($value as $index => $value) {
        if ($value > $didziausiaReiksme) {
            $didziausiaReiksme = $value;
        }
    }
}
echo "didziausia reiksme arejuje: $didziausiaReiksme";

echo "<br>";
echo "<br>";

//antra uzduotis c
echo "--------------------------antra uzduotis c ---------------------------------------";
echo "<br>";
echo "<br>";
//Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
$indexo0reiksme = 0;
$indexo1reiksme = 0;
$indexo2reiksme = 0;
$indexo3reiksme = 0;
$indexo4reiksme = 0;
foreach ($masyvas as $index => $value) {
    foreach ($value as $index => $value) {
        if ($index === 0) {
            $indexo0reiksme += $value;
        } else if ($index === 1) {
            $indexo1reiksme += $value;
        } else if ($index === 2) {
            $indexo2reiksme += $value;
        }else if ($index === 3) {
            $indexo3reiksme += $value;
        }else if ($index === 4) {
            $indexo4reiksme += $value;
        }
    }
}
echo "Nulinio indexo reiksmiu suma = $indexo0reiksme";
echo "<br>";
echo "Pirmo indexo reiksmiu suma = $indexo1reiksme";
echo "<br>";
echo "Antro indexo reiksmiu suma = $indexo2reiksme";
echo "<br>";
echo "Trecio indexo reiksmiu suma = $indexo3reiksme";
echo "<br>";
echo "Ketvirto indexo reiksmiu suma = $indexo4reiksme";

echo "<br>";
echo "<br>";

//antra uzduotis d
echo "--------------------------antra uzduotis d ---------------------------------------";
echo "<br>";
echo "<br>";
//Visus masyvus “pailginkite” iki 7 elementų

foreach ($masyvas as $index => $value) {
    $skaicius = rand(5, 25);
    array_push($masyvas[$index], $skaicius, $skaicius);
}
print_r($masyvas);

echo "<br>";
echo "<br>";

//antra uzduotis e
echo "--------------------------antra uzduotis e ---------------------------------------";
echo "<br>";
echo "<br>";
//Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
// $a0 = 0;
// $a1 = 0;
// $a2 = 0;
// $a3 = 0;
// $a4 = 0;
// $a5 = 0;
// $a6 = 0;
// $a7 = 0;
// $a8 = 0;
// $a9 = 0;
// $a0 = array_sum($masyvas[0]);
// $a1 = array_sum($masyvas[1]);
// $a2 = array_sum($masyvas[2]);
// $a3 = array_sum($masyvas[3]);
// $a4 = array_sum($masyvas[4]);
// $a5 = array_sum($masyvas[5]);
// $a6 = array_sum($masyvas[6]);
// $a7 = array_sum($masyvas[7]);
// $a8 = array_sum($masyvas[8]);
// $a9 = array_sum($masyvas[9]);
// echo $a0;
// echo "<br>";
// echo $a1;
// echo "<br>";
// echo $a2;
// echo "<br>";
// echo $a3;
// echo "<br>";
// echo $a4;
// echo "<br>";
// echo $a5;
// echo "<br>";
// echo $a6;
// echo "<br>";
// echo $a7;
// echo "<br>";
// echo $a8;
// echo "<br>";
// echo $a9;
// echo "<br>";

$naujasMasyvas = [];

    for ($i=0; $i <= 9 ; $i++) { 
        $naujasMasyvas [] = array_sum($masyvas[$i]);;
    }

print_r($naujasMasyvas);

echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$masyvas3 = [];
$raides3 = 'ABCDEFGHIJKLMNOPRSTUXVQ';


for ($i = 0; $i <= 9; $i++) {
    $masyvas3 [$i] = [];
    for ($j=0; $j < rand(2, 20); $j++) { 
        $skaicius = rand(0, 22);
        $masyvas3[$i][] = $raides3[$skaicius];
    }
}
echo 'Masyvas is raidziu:';
echo "<br>";
print_r($masyvas3);
echo "<br>";
echo "<br>";


echo 'Surusiuotas masyvas is raidziu:';
echo "<br>";
for ($i=0; $i <= 9 ; $i++) { 
    asort($masyvas3[$i]);
}
print_r($masyvas3);

echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.

rsort($masyvas3); 
echo 'Surusiuotas masyvas pagal vaikiniu masyvu ilgi';
echo "<br>";
print_r($masyvas3);

echo "<br>";
echo "<br>";

//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. TAIP KAIP PER PASKAITA RUSIAVOME	

$masyvas5 = [];

for ($i = 0; $i <= 29; $i++) {
    $masyvas5 [$i] = [];
    for ($j=0; $j < 29; $j++) { 
        $user_id = rand(1, 1000000);
        $place_in_row = rand(1, 100);
        $masyvas5[$i] = ['user_id' => $user_id, 'place_in_row' => $place_in_row];
    }
}
// print_r($masyvas5);
var_dump($masyvas5);

echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Išrūšiuokite 6 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

echo 'Rusiuojama pagal user_id didejancia tvarka';
echo "<br>";
$rusiuojama1 = array_column($masyvas5, 'user_id');
array_multisort($rusiuojama1, SORT_ASC, $masyvas5);
var_dump($masyvas5);
echo "<br>";
echo "<br>";


echo 'Rusiuojama pagal user_id didejancia tvarka';
echo "<br>";
$rusiuojama2 = array_column($masyvas5, 'place_in_row');
array_multisort($rusiuojama2, SORT_DESC, $masyvas5);
var_dump($masyvas5);

echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

foreach ($masyvas5 as $index => $value) {
    $nameraides7 = 'ABCDEFGHIJKLMNOPRSTUXVQ';
    $name = str_shuffle($nameraides7);
    $name = substr($name,rand(5, 15));
    $nameraides7 = 'ABCDEFGHIJKLMNOPRSTUXVQ';
    $surname = str_shuffle($nameraides7);
    $surname = substr($surname,rand(5, 15));
    $masyvas5[$index] += ['name' => $name, 'surname' => $surname];
}
var_dump($masyvas5);

echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: (generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai). APRASYTA SASIUVINYJE

$masyvas8 = [];
for ($i=0; $i <= 9; $i++) { 
    $skaicius = rand(0, 5);
    if ($skaicius > 0) {
        for ($j=1; $j <= $skaicius; $j++) { 
            $skaiciai8 = rand(0, 10);
            $masyvas8 [$i] [] = $skaiciai8;
        }    
    } else {
        $skaicius2 = rand(0, 10);
        $masyvas8 [] +=  $skaicius2;
    }
}
echo '<pre>' ;
print_r($masyvas8);
echo '</pre>' ;

echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

$af = function($a, $b) {
    $sa = is_array($a) ? array_sum($a) : $a;
    $sb = is_array($b) ? array_sum($b) : $b;
    return $sa <=> $sb;
};
usort ($masyvas8, $af);

echo '<pre>' ;
print_r($masyvas8);
echo '</pre>' ;
echo "<br>";
echo "<br>";

$new = 0;
foreach ($masyvas8 as $index => $value) {
    if (is_array($value)) {
        foreach ($value as $index => $value) {
            $new += $value;
        }
    } else {
        $new += $value;
    }
}
echo "Suma = $new";



echo "<br>";
echo "<br>";

//desimta uzduotis
echo "--------------------------desimta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@%, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.

$masyvas10 = [];
for ($i=0; $i <= 9; $i++) { 
    for ($j=0; $j <= 9; $j++) { 
        $simboliai = '#%+*@%';
        $simboliai2 = str_shuffle($simboliai);
        $value = substr($simboliai2, 0, 1);
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        // $color = dechex(rand(0x0, 0xffffff));
        $masyvas10 [$i] [$j] = ['value' => $value, 'color' => $color]; 
        dechex(rand(0x0, 0xffffff));
    }    
}

$str ='';
for ($i=0; $i < 10 ; $i++) { 
    for ($j=0; $j < 10 ; $j++) { 
        $str .= '<div style="width: 30px; height: 30px; display:inline-block; float:left; background-color:' . $masyvas10[$i][$j]['color'] . '"></div>';
    }
}
echo '<div style="width:300px; height:300px">';
echo $str;
// print_r($str);
echo '</div>';






