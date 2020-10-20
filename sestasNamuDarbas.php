<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;


function zodis($zodis) {
    echo  "<h1>$zodis</h1>";
  }
  
zodis("PHP");

// echo "<br>";
// echo "<br>";

//antra uzduotis a 
echo "--------------------------antra uzduotis a---------------------------------------";
echo "<br>";
echo "<br>";
//Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function zodis2($zodis, $numeris) {
    echo  "<h1>$zodis Nr.$numeris</h1>";
  }
$numeris = rand(2, 9);
zodis2("PHP", $numeris);

echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

//Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją;

$random = md5(time());
$numeris = 5;

$atsitiktinesRaides = 'abskfeofmnvkfiehakdogeiwusjfkfodejwuysbdjcogoriehshdkfogidyhshyqiepvkjcjd';
$random3 = rand(1, 70);
$a = $atsitiktinesRaides[$random3];

$random .= $a;

function zodis3($zodis, $numeris) {
    echo  "<h1>$zodis Nr.$numeris</h1>";
    $arr1 = str_split($zodis);
    $skaiciai = 0;
    $stringas = '';
    foreach($arr1 as $value) {
        if (is_numeric($value)) {
            $skaiciai = $value;
            $stringas .= $skaiciai;
        } else if (!is_numeric($value)) {
            echo "<h1> $stringas </h1>";
            $stringas = '';
        } 
   } 
}
zodis3($random, $numeris);

echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

//Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;



function ketvirtaUzduotis($skaicius) {
    if ((is_int($skaicius) == $skaicius)) {
        echo "Ivestas skaicius $skaicius";
        echo "<br>";
        $dalijasiIs = 0;
        for ($i=2; $i < $skaicius ; $i++) { 
            if ($skaicius % $i == 0) {
            $dalijasiIs++;
        }
    }
    echo "Is kiek skaiciu dalijasi: $dalijasiIs";
    } else {
        echo "Ivestas nelyginis skaicius";
    }
    
}
ketvirtaUzduotis(6);

echo "<br>";
echo "<br>";

//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.


for ($i = 0; $i <= 9; $i++) {
    $skaicius5 = rand(33, 77);
    $masyvas [] = $skaicius5;
}

$stringas1 = '';
$skaiciai = 0;

function penktaUzduotis($skaicius) {
    $stringas1 = '';
    $masyvas5 = [];
    foreach ($skaicius as $index => $value) {
        if ((is_int($value) == $value)) {
            echo "Ivestas skaicius $value";
            echo "<br>";
            $dalijasiIs = 0;
            $masyvas5 [$value] = [];
            for ($i=2; $i < $value ; $i++) { 
                if ($value % $i == 0) {
                $dalijasiIs++;
            }
        }
        $masyvas5[$value][] = $dalijasiIs;
        echo "Is kiek skaiciu dalijasi: $dalijasiIs";
        echo "<br>";
        } else {
            echo "Ivestas nelyginis skaicius";
        }
    }
    asort($masyvas5);
        echo '<pre>' ;
        print_r($masyvas5);
        echo '</pre>' ;
}
penktaUzduotis($masyvas);

echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

for ($i = 0; $i <= 9; $i++) {
    $skaicius6 = rand(333, 777);
    $masyvas6 [] = $skaicius6;
}
$masyvas66 = [];
function sestaUzduotis($skaicius) {
    $stringas1 = '';
    foreach ($skaicius as $index => $value) {
        if ((is_int($value) == $value)) {
            echo "Ivestas skaicius $value";
            $dalijasiIs = 0;
            for ($i=2; $i < $value ; $i++) { 
                if ($value % $i == 0) {
                $dalijasiIs++;
            }
        }
        if ($dalijasiIs != 0) {
            $masyvas66 [] = $value;
        }
        // echo "Is kiek skaiciu dalijasi: $dalijasiIs";
        echo "<br>";
        } else {
            echo "Ivestas nelyginis skaicius";
        }
    }
    // asort($masyvas6);
        echo '<pre>' ;
        print_r($masyvas66);
        echo '</pre>' ;
}
sestaUzduotis($masyvas6);


echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

$masyvas7 = septintaUzduotis([],rand(5,30));

function septintaUzduotis($arr,$count){
    if($count>0){
    for ($i = 0; $i <= rand(10,20)-1; $i++) {
        array_push($arr,rand(0, 10));
}
    array_push($arr,[]);
    $arr[count($arr)-1] = septintaUzduotis($arr[count($arr)-1],$count-1);
    }else{
        return 0;
    }
    return $arr;
}
echo '<pre>' ;
print_r($masyvas7);
echo '</pre>' ;

echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.

$sum = 0;
array_walk_recursive($masyvas7,function($value, $key)use(&$sum){
    $sum += $value;
});

echo "Septinto uzdavinio elementu, kurie nera masyvai suma: $sum";

echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 

$masyvas9 = [];
for ($i = 0; $i <= 100; $i++) {
    $masyvas9 [$i] = rand(1, 33);
}
$arr = array_slice($masyvas9, -3, 3, true);

function recursive($num){
    $arr = array_slice($num, -3, 3, true);
    foreach ($arr as $index => $value) {
        $dalijasiIs = 0;
        for ($i=2; $i < $value ; $i++) { 
            if ($value % $i == 0) {
            $dalijasiIs++;
        }
        if ($dalijasiIs != 0) {
            $arr [] = rand(1, 33);
            return recursive($arr);
        }
    }   
    }
echo '<pre>' ;
print_r($arr);
echo '</pre>' ;
}
recursive($masyvas9);


echo "<br>";
echo "<br>";
//desimta uzduotis
echo "--------------------------desimta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 


$masyvas10 = [];
for ($i=0; $i <= 2; $i++) { 
    for ($j=0; $j <= 9; $j++) { 
        $masyvas10 [$i] [$j] = rand(1, 100);
    }    
}

echo '<pre>' ;
print_r($masyvas10);
echo '</pre>' ;

foreach ($masyvas10 as $index => $value) {
    do {
        $suma = 0;
        $pirminis = 0;
        $kiekis = 0;
        $vidurkis = 0;
        for ($i=0; $i < count($value) ; $i++) { 
            $counter = 0; 
            for($j=1 ; $j <= $value[$i] ; $j++){
                if ($value[$i] % $j == 0) {
                    $counter++;
                } 
            }
            if($counter==2) {
                $suma++;
                print $value[$i];
                $pirminis += $value[$i];
                echo "<br>";
                echo "Pirminio skaicio Nr: $suma";
                echo "<br>";
            }
            if ($suma > 0) {

                $vidurkis = $pirminis / $suma;

            }
        }
        echo "Pirminiu skaiciu suma: $pirminis";
        echo "<br>";
        echo "Pirminiu skaiciu vidurkis $vidurkis";
        echo "<br>";
        if ($vidurkis < 70) {
        sort($value);
        print_r($value);
        echo "<br>";
        $value[0] += 3;
        print_r($value);
        echo "<br>";
        }
    } while ($vidurkis < 70);
}

// echo '<pre>' ;
// print_r($masyvas10);
// echo '</pre>' ;



$file = 'C:\Users\tavar\OneDrive\Desktop\pvz.txt';

$current = file_get_contents($file);

echo $current;

$current .= "John Smith\n";

echo $current;

file_put_contents($file, $current);
