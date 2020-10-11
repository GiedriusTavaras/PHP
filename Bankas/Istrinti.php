<?php

session_start();


include_once(__DIR__.'/header.php');

if (isset($_SESSION["istrinta"])) {
    echo $_SESSION["istrinta"];
    session_unset();
}
if (isset($_SESSION["neistrinta"])) {
    echo $_SESSION["neistrinta"];
    session_unset();
}


$array = json_decode(file_get_contents(__DIR__.'/data.json'), 1);


//tikrinama ar yra POST reiksme, jei nera, nieko nedaro;
if (isset($_POST['ID'])) {

//tikrina ar yra toks indeksas ir ar saskaitoje nera pingu ir istrina jei viskas gerai
foreach ($array as $thisArrIndex=>$subArray) {
    if ( $subArray['ID'] == $_POST['ID'] && $subArray['Likutis'] == 0) {
        unset($array[$thisArrIndex]);
        $_SESSION["istrinta"] = '<div style="color: black; background-color: #a7f336; font-size: 30px; text-align: center;">Sąskaita ištrinta sėkmingai!</div>';
    }
}


//tikrina ir jei blogai, meta klaida
foreach ($array as $thisArrIndex=>$subArray) {
    if ($subArray['ID'] == $_POST['ID'] && $subArray['Likutis'] != 0) {
        $_SESSION["neistrinta"] = '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">Sąskaitoje yra pinigų!</div>';
    }
}

// foreach ($array as $thisArrIndex=>$subArray) {
//     if ($subArray['ID'] != $_POST['ID']) {
//         echo '<div style="color: black; background-color: red; font-size: 30px; text-align: center;">nera</div>';
//     break;
//     }
// }

file_put_contents(__DIR__.'/data.json', json_encode($array), LOCK_EX);

if (isset($_SESSION["istrinta"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/istrinti.php");
    die;
}
if (isset($_SESSION["neistrinta"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/istrinti.php");
    die;
}


}


echo '<table border="1">';
echo '<tr><th>ID</th><th>Vardas</th><th>Pavarde</th><th>IABN</th><th>Asmens kodas</th><th>Likutis</th></tr>';
foreach( $array as $movie )
{
  echo '<tr>';
  foreach( $movie as $key )
  {
      echo '<td>'.$key.'</td>';
  }
  echo '</tr>';
}
echo '</table>';



?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body style="background-color: <?= $spalva; ?>">
    <form action="" method="post">
        <div>
        <label style="margin: 10px;"  for="ID">Įveskite ID:</label>
        <input style="margin: 10px;"  type="number" name="ID" id="1"><br>
        </div>


        <input style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;" type="submit" name="Istrinti" value="Ištrinti">
    </form>
    <button style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;"><a href="http://localhost/NamuDarbai/Bankas/index.php">Grįšit</a></button>
    
</body>

</html>

<?php
include_once(__DIR__.'/footer.php');