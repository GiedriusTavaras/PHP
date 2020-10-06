<?php



$reiksmes = array(
    "1" => "A",
    "2" => "B",
    "3" => "C",
    "4" => "D",
    "5" => "E",
    "6" => "F",
    "7" => "G",
    "8" => "H",
    "9" => "I",
    "10" => "J"
);

$spalva = "gold";
$dingo = '';
$skaicius = 0;
$viso = '';

$output = array_slice($reiksmes, 0, rand(3, 10));
$viso = count($output);






if (isset($_POST["x"])) { 
    $y = file_get_contents('php://input'); 
    $skaicius = substr_count($y,"x");
    echo "Pazymeti boxai: $skaicius. Viso buvo sugeneruota: ";
    $spalva = "red";
    $dingo = "display: none;";
    echo $_POST["SET"];
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
        background-color: <?= $spalva ?>;
}
form {
    <?= $dingo ?>;
}
</style>

<body>
    <form action="" method="post">
        <div>
            <?php
        foreach ($output as $key => $value) : ?>
            <div class="divai">
                <input type="checkbox" name="x" id="<?=$value?>"><label for="<?=$value?>"><?=$value?></label>
            </div>
            <?php endforeach ?>
            <button type="submit" name="SET" value="<?= $viso ?>" >Pateikti</button>
        </div>
    </form>
</body>

</html>

