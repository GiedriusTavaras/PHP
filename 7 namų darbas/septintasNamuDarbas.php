 <?php
// pirma uzduotis
echo "--------------------------pirma uzduotis---------------------------------------";
echo "<br>";
echo "<br>";
//1.Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.
$color = $_GET['color'] ?? 'white';

// if (1 == $_GET['color']) {
//     $color = 'red';
// } else {
//     $color = 'white';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $color; ?>">
    <a href="http://localhost/NamuDarbai/7namuDarbas/septintasNamuDarbas.php?">septintasNamuDarbas</a>
    <a href="?color=1">septintasNamuDarbas</a>
</body>

</html>

