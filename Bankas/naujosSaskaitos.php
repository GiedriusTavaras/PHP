<?php

session_start();

// defined('FRONT') || die;

include_once(__DIR__.'/header.php');



if (isset($_SESSION["vardasPerTrumpas"])) {
    echo $_SESSION["vardasPerTrumpas"];
    session_unset();
}
if (isset($_SESSION["pavardePerTrumpas"])) {
    echo $_SESSION["pavardePerTrumpas"];
    session_unset();
}
if (isset($_SESSION["vardasPerIlgas"])) {
    echo $_SESSION["vardasPerIlgas"];
    session_unset();
}
if (isset($_SESSION["pavardePerIlgas"])) {
    echo $_SESSION["pavardePerIlgas"];
    session_unset();
}

if (isset($_SESSION["vardeYraSimboliu"])) {
    echo $_SESSION["vardeYraSimboliu"];
    session_unset();
}
if (isset($_SESSION["pavardejeYraSimboliu"])) {
    echo $_SESSION["pavardejeYraSimboliu"];
    session_unset();
}
if (isset($_SESSION["vardeYraSkaiciu"])) {
    echo $_SESSION["vardeYraSkaiciu"];
    session_unset();
}
if (isset($_SESSION["pavardejeYraSkaiciu"])) {
    echo $_SESSION["pavardejeYraSkaiciu"];
    session_unset();
}
if (isset($_SESSION["asmensKodasNetinkamas"])) {
    echo $_SESSION["asmensKodasNetinkamas"];
    session_unset();
}
if (isset($_SESSION["toksAsmensKodasJauYra"])) {
    echo $_SESSION["toksAsmensKodasJauYra"];
    session_unset();
}
if (isset($_SESSION["sekmingai"])) {
    echo $_SESSION["sekmingai"];
    session_unset();
}




//reikia constantos serverio adreso bankui;
$array = json_decode(file_get_contents(__DIR__.'/data.json'), 1);


// echo '<pre>' ;
// print_r($array);
// echo '</pre>' ;

//tikrina ar irasyta tokia reiksme, jei ne tai nieko nedaro
if (isset($_POST['AK'])) {

//randa didziausia indexa ir prideda viena jeigu yra indeksas, jei ne tai indeksas 1
if (!empty($array)) {
    $xx = max(array_column($array, 'ID')) + 1;
    $numeris = $xx;//id yra toks pat koks ir arejaus skaicius, arejaus indeksas, taip jis negali kartotis ir eina is eiles
    $ID = $numeris;
} else {
    $xx = 1;
    $numeris = $xx;//id yra toks pat koks ir arejaus skaicius, arejaus indeksas, taip jis negali kartotis ir eina is eiles
    $ID = $numeris;
}

//generuojamas IBAN
$lt = 'LT';
$random11skaitmenu = sprintf("%011d", mt_rand(1, 99999999999));
$kontroliniaiSkaitmenys = 55;
$bankoKodas = 99999;
$IBAN = $lt . $kontroliniaiSkaitmenys . $bankoKodas . $random11skaitmenu;

//tikrina ar tokio IBAn nera
foreach ($array as $key => $value) {
    foreach ($value as $key => $value) {
        if ($value === $IBAN) {
            // $IBAN = 0;
        break; 
        }
    }
}


//tikrina ar vardas ilgesnis nei 3 raides

if (strlen($_POST['Vardas']) <= 3) {
    $_SESSION["vardasPerTrumpas"] =  '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Vardas per trumpas, bandykite dar kartą!</div>';
    $_POST['Vardas'] = 0;
}

if (strlen($_POST['Vardas']) > 25) {
    $_SESSION["vardasPerIlgas"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Vardas per ilgas, bandykite dar kartą!</div>';
    $_POST['Vardas'] = 0;
}

//tikrina ar nera simboliu
$blacklistChars = '"%\'*;<>?^`{|}~/\\#=&';
$pattern = preg_quote($blacklistChars, '/');
if (preg_match('/[' . $pattern . ']/', $_POST['Vardas'])) {
    $_SESSION["vardeYraSimboliu"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Varde panaudotas simbolis, bandykite dar kartą!</div>';
}

//tikrina ar nera skaiciu
if (preg_match('#[0-9]#',$_POST['Vardas'])){
    $_POST['Vardas'] = 0;
    $_SESSION["vardeYraSkaiciu"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Varde panaudotas skaičius, bandykite dar kartą!</div>';
}


//neiraso pavarde trumpesnes negu 3 simboliai
if (strlen($_POST['Pavarde']) <= 3) {
    $_SESSION["pavardePerTrumpas"] ='<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Pavardė per trumpa, bandykite dar kartą!</div>';
    $_POST['Pavarde'] = 0;
}

if (strlen($_POST['Pavarde']) > 25) {
    $_SESSION["pavardePerIlgas"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Pavardė per ilga, bandykite dar kartą!</div>';
    $_POST['Pavarde'] = 0;
}

//tikrina ar nera simboliu
$blacklistChars = '"%\'*;<>?^`{|}~/\\#=&';
$pattern = preg_quote($blacklistChars, '/');
if (preg_match('/[' . $pattern . ']/', $_POST['Pavarde'])) {
    $_SESSION["pavardejeYraSimboliu"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Pavardėje panaudotas simbolis, bandykite dar kartą!</div>';
}

//tikrina ar nera skaiciu
if ($_POST['Pavarde'] === 0) {
    # code...
} else if (preg_match('#[0-9]#',$_POST['Pavarde'])){
    $_POST['Pavarde'] = 0;
    $_SESSION["pavardejeYraSkaiciu"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Pavardėje panaudotas skaičius, bandykite dar kartą!</div>';  
}



//asmens kodas tikrinimas
function valid_ak($ak){
    $valid=false;
    if(strlen($ak)==11){
     if($ak[0]>2 && $ak[0]<7){
      if(checkdate(substr($ak,3,2),substr($ak,5,2),substr($ak,1,2))){
       $str=$ak[0]*1+$ak[1]*2+$ak[2]*3+$ak[3]*4+$ak[4]*5+$ak[5]*6+$ak[6]*7+$ak[7]*8+$ak[8]*9+$ak[9]*1;
       $str=$str%11;
       if($str==10){
    
        $str=$ak[0]*3+$ak[1]*4+$ak[2]*5+$ak[3]*6+$ak[4]*7+$ak[5]*8+$ak[6]*9+$ak[7]*1+$ak[8]*2+$ak[9]*3;
        $str=$str%11;
        if($str==10 && substr($ak,10,1)=="0")
         $valid=true;
        elseif($str==substr($ak,10,1))
         $valid=true;
       }
       elseif($str==substr($ak,10,1))
        $valid=true;
      }
     }
    }
    return $valid;
}

if (valid_ak($_POST['AK'])) {
    $asmensKodas = $_POST['AK'];
} else {
    $_SESSION["asmensKodasNetinkamas"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Asmens kodas netinkamo formato, bandykite dar kartą!</div>';
    $asmensKodas = 0;
}

//tikrinama ar toks asmens kodas egzistuoja, jei taip tai klaida ir jis rilyginamas nuliui
if ($asmensKodas != 0) {
    foreach ($array as $key => $value) {
        foreach ($value as $key => $value) {
            if ($value == $asmensKodas) {
                $asmensKodas = 0;
                $_SESSION["toksAsmensKodasJauYra"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Toks asmens kodas jau yra, bandykite dar kartą!</div>';
            break 2; 
            }
        }
    }
}



$Vardas = $_POST['Vardas'];
$Pavarde = $_POST['Pavarde'];
$AK = $asmensKodas;





if (empty($_POST['Vardas']) || empty($_POST['Pavarde']) || empty($AK)) {
} else {
    $array[$numeris]['ID'] = $ID;
    $array[$numeris]['Vardas'] = $Vardas;
    $array[$numeris]['Pavarde'] = $Pavarde;
    $array[$numeris]['IBAN'] = $IBAN;
    $array[$numeris]['AK'] = $AK;
    $array[$numeris]['Likutis'] = 0;
    $_SESSION["sekmingai"] = '<div style="color: black; background-color: #a7f336; font-size: 30px; text-align: center;">Sąskaita sukurta sėkmingai!</div>';
}



file_put_contents(__DIR__.'/data.json', json_encode($array), LOCK_EX);


if (isset($_SESSION["vardasPerTrumpas"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["pavardePerTrumpas"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}

if (isset($_SESSION["vardasPerIlgas"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["pavardePerIlgas"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}

if (isset($_SESSION["vardeYraSimboliu"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["pavardejeYraSimboliu"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}

if (isset($_SESSION["vardeYraSkaiciu"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["pavardejeYraSkaiciu"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["asmensKodasNetinkamas"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["toksAsmensKodasJauYra"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}
if (isset($_SESSION["sekmingai"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/naujosSaskaitos.php");
    die;
}


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body style="background-color: <?= $spalva; ?>">
    <form action="" method="post">
    <div style="margin: 10px;">
    <label for="Vardas">Įveskite vardą:</label>
        <input type="text" name="Vardas" id="1"><br>
    </div>
    <div style="margin: 10px;">
    <label for="Pavarde">Įveskite pavardę:</label>
        <input type="text" name="Pavarde" id="2"><br>
    </div>
    <div style="margin: 10px;">
    <label for="AK">Įveskite asmens kodą:</label>
        <input type="number" name="AK" id="3"><br>
    </div>


        <input style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;" type="submit" name="pateikti" value="Pridėti">
    </form>
    <button style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;"><a href="http://localhost/NamuDarbai/Bankas/index.php">Grįžti</a></button>
</body>

</html>

<?php
include_once(__DIR__.'/footer.php');