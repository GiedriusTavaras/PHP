<?php

// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";

$zvaigzde1 = '';
$x1 = '';
$textas = '';
for ($i = 1; $i <= 400; $i++) {
    $x1 = $zvaigzde1 . '*';
    echo '<h1 style="color:blue; display: inline-block; ">'.$x1.'</h1>';
    // if ($i % 50 == 0) {
    //     echo "<br>\n";
    // }
}

for ($i = 1; $i <= 400; $i++) {
    $x1 = $zvaigzde1 . '*';
    echo $x1;
    if ($i % 50 == 0) {
        echo "<br>\n";
    }
}
echo "<br>";
echo "<br>";

//antra uzduotis
echo "--------------------------antra uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$count2 = 0;
for ($i = 1; $i <= 300; $i++) {
    $skaicius2 = rand(0, 300);
    echo '<h1 style=" display: inline-block; padding: 0px 20px 0px 20px;  font-size: 15px;">'.$skaicius2.'</h1>';
    if ($skaicius2 > 150) {
        $count2 ++;
    }
    if ($skaicius2 > 275) {
        echo '<h1 style="color:#ff3300; display: inline-block; padding: opx 20px opx 20px;  font-size: 15px;">'.$skaicius2.'</h1>';
    }
}
echo "<br>";
echo "viso skaiciu didesniu negu 275:  $count2";
echo "<br>";
echo "<br>";

//trecia uzduotis
echo "--------------------------trecia uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$x = 0;
for ($i = 1; $i <= 3000; $i++) {
    $x ++;
    if ($x % 77 == 0 && $i > 77) {
        echo ","; 
    }
    if ($x % 77 == 0) {
        echo $x; 
    }
}
echo "<br>";
echo "<br>";

//ketvirta uzduotis
echo "--------------------------ketvirta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

$zvaigzde4 = '';
$x4 = '';
$textas4 = '';
for ($i = 1; $i <= 10000; $i++) {
    $x4 = $zvaigzde4 . '*';
    echo '<h1 style="color:blue; line-height: 5px; text-align: center; margin: 0px 0px 0px 0px; font-size: 12px; display: inline-block;">'.$x4.'</h1>';
    if ($i % 100 == 0) {
        echo "<br>\n";
    }
}
echo "<br>";
echo "<br>";

//penkta uzduotis
echo "--------------------------penkta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$n5 = 100;
$x8 = "*";
for ($i = 1; $i <= $n5; $i++) {
    for ($j = 1; $j <= $n5; $j++) {
        if ($i == $j || $i + $j == $n5 + 1) {
            echo '<h1 style="color:red; line-height: 5px; text-align: center; margin: 0px; font-size: 12px; display: inline-block;">'.$x8.'</h1>';
        } else {
            echo '<h1 style="color:blue; line-height: 5px; text-align: center; margin: 0px; font-size: 12px; display: inline-block;">'.$x8.'</h1>';
        }
    } 
    echo '<br>';
}
echo "<br>";
echo "<br>";

//sesta uzduotis
echo "--------------------------sesta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";

echo 'Pirma metimo salyga: ';
echo "<br>";
do {
    $metimas6 = rand(0, 1);
    if ($metimas6 == 0) {
        echo 'H';
        echo "<br>";
    } else if ($metimas6 == 1) {
        echo 'S';
        echo "<br>";
    }
} while ($metimas6 == 1);
echo "<br>";
echo "<br>";

echo 'Antra metimo salyga: ';
echo "<br>";
$herbas6 = 0;
$skaicius6 = 0;
do {
    $metimas6 = rand(0, 1);
    if ($metimas6 == 0) {
        echo 'H';
        $herbas6++;
        echo $herbas6;
        echo "<br>";
    } else if ($metimas6 == 1) {
        echo 'S';
        $skaicius6++;
        echo $skaicius6;
        echo "<br>";
    }
} while ($herbas6 != 3);
echo "<br>";
echo "<br>";

echo 'Trecia metimo salyga: ';
echo "<br>";
$herbas6 = 0;
$skaicius6 = 0;
do {
    $metimas6 = rand(0, 1);
    if ($metimas6 == 0) {
        echo 'H';
        $skaicius6 = 0;
        $herbas6++;
        echo $herbas6;
        echo "<br>";
    } else if ($metimas6 == 1) {
        $herbas6 = 0;
        echo 'S';
        $skaicius6++;
        echo $skaicius6;
        echo "<br>";
    }
} while ($herbas6 != 3);
echo "<br>";
echo "<br>";

//septinta uzduotis
echo "--------------------------septinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$petroTaskai = 0;
$kazioTaskai = 0;

  do {
    $petroMetimas = rand(10, 20);
    $kazioMetimas = rand(5, 25);
    if ($petroMetimas > $kazioMetimas) {
        $petroTaskai += $petroMetimas;
        echo "Petro taskai: $petroMetimas , Kazio taskai: $kazioMetimas , sia partiją laimėjo: ​Petras ";
        echo "<br>";
    } else if ($kazioMetimas > $petroMetimas) {
        $kazioTaskai += $kazioMetimas;
        echo "Petro taskai: $petroMetimas , Kazio taskai: $kazioMetimas , sia partiją laimėjo: Kazys ";
        echo "<br>";
    } else if ($petroMetimas == $kazioMetimas) {
        echo "Petro taskai: $petroMetimas , Kazio taskai: $kazioMetimas , si partija baigesi lygiosiomis ";
        echo "<br>";
    }
} while ($petroTaskai < 222 && $kazioTaskai < 222);
if ($petroTaskai > $kazioTaskai) {
    echo "Petras laimejo, surinkes: $petroTaskai taskus. Praleimetojo Kazio taskai: $kazioTaskai";
} else {
    echo "Kazys laimejo, surinkes: $kazioTaskai taskus. Praleimetojo Kazio taskai: $petroTaskai";
}
echo "<br>";
echo "<br>";

//astunta uzduotis
echo "--------------------------astunta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$dydis = 11;
$tarpas = "&nbsp;&nbsp";
$simbolis = '*';
for( $i = 1; $i <= $dydis; $i++ ){
    for ($j = $dydis; $j > $i; $j--) {
        echo '<h1 style="line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$tarpas.'</h1>';
    }
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
    echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    for ($k = 1; $k < 2*($i - 1); $k++) {
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
        echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    }
    if ($i == 1) {
        echo '<h1 style="line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$tarpas.'</h1>';
    } else {
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
        echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    }
    echo "<br>";
}
for ($i = $dydis - 1; $i >= 1; $i--) {
    for ($j = $dydis; $j > $i; $j--) {
        echo '<h1 style="line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$tarpas.'</h1>';
    }
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
        echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    for ($k = 1; $k < 2*($i - 1); $k++) {
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
        echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    }
    if ($i == 1) {
        echo '<h1 style="line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$tarpas.'</h1>';
    } else {
        $x = rand(0, 225);
        $y = rand(0, 225);
        $z = rand(0, 225);
        echo '<h1 style="color:rgb('.$x.','.$y.','.$z.'); line-height: 5px; margin: 4px; font-size: 18px; display: inline-block;">'.$simbolis.'</h1>';
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

//devinta uzduotis
echo "--------------------------devinta uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
$start = microtime(TRUE);
for ($i = 0; $i >= 1000000; $i++) {
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$end = microtime(TRUE);
$total = $end - $start;
echo "Kodas ivigdyti truko:  $total";

echo "<br>";
$start = microtime(TRUE);
for ($i = 0; $i >= 1000000; $i++) {
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$end = microtime(TRUE);
$total2 = $end - $start;
echo "Kodas ivigdyti truko:  $total2";
echo "<br>";
echo "<br>";

//desimta uzduotis - a
echo "--------------------------desimta uzduotis - a ---------------------------------------";
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Vinis nr: $i";
    echo "<br>";
    $vinis = 85;
    $kartai = 0;
    $kiekIkalta = 0;
do {
    $mazasSmugis = rand(5, 20);
    $kiekIkalta += $mazasSmugis;
    $kartai++;
    if ($kiekIkalta < $vinis) {
        echo "Smugis: $kartai , ikalta siuo smugiu: $mazasSmugis , viso ikalta: $kiekIkalta.";
        echo "<br>";
    } else if ($kiekIkalta >= $vinis) {
        echo "Smugis: $kartai , ikalta siuo smugiu: $mazasSmugis , viso ikalta: $vinis.";
        echo "<br>";
    }

} while ($kiekIkalta < $vinis);
echo "<br>";
}
echo "<br>";
echo "<br>";

//desimta uzduotis - b
echo "--------------------------desimta uzduotis - b ---------------------------------------";
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Vinis nr: $i";
    echo "<br>";
    $vinis = 85;
    $kartai = 0;
    $kiekIkalta = 0;
do {
    $didelisSmugis = rand(20, 30);
    $pataikymoTikimybe = rand(1, 10);
    if ($pataikymoTikimybe <= 5) {
        $didelisSmugis = 0;
        $kiekIkalta += $didelisSmugis;
        $kartai++;
    } else { 
    $kiekIkalta += $didelisSmugis;
    $kartai++;
    }
    if ($kiekIkalta < $vinis) {
        echo "Smugis: $kartai , ikalta siuo smugiu: $didelisSmugis , viso ikalta: $kiekIkalta.";
        echo "<br>";
    } else if ($kiekIkalta >= $vinis) {
        echo "Smugis: $kartai , ikalta siuo smugiu: $didelisSmugis , viso ikalta: $vinis.";
        echo "<br>";
    }

} while ($kiekIkalta < $vinis);
echo "<br>";
}

