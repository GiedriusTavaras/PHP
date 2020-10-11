<?php

session_start();
// if (!($_SESSION['login'] ??  0)) {
//   header('Location: http://localhost/NamuDarbai/Bankas/login.php');
//   die;
// }



// define('FRONT', true);
// define('PINIGAI', true);
// define('INSTALL_DIR', '/NamuDarbai/Bankas/');


// $route = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);

// if ('naujosSaskaitos' == $route) {
//     require __DIR__.'/naujosSaskaitos.php';
// }
// if ('pinigai' == $route) {
//   require __DIR__.'/pinigai.php';
// }




//includinu headeri
include_once(__DIR__.'/header.php');

$array = json_decode(file_get_contents(__DIR__.'/data.json'), 1);

//sortinu pagal pavarde
function multi_sort(&$array, $akey)
{ 
  function compare($a, $b)
  {
     global $key;
     return strcmp($a[$key], $b[$key]);
  }
    usort($array, "compare");
    // echo '<pre>' ;
    // print_r($array);
    // echo '</pre>' ;
}
multi_sort($array, $key = 'Pavarde');


//spausdinu
echo '<table border="1">';
echo '<tr><th>ID</th><th>Vardas</th><th>Pavarde</th><th>IABN</th><th>Asmens kodas</th><th>Likutis</th></tr>';
foreach( $array as $movie )
{
  echo '<tr>';
  foreach( $movie as $key )
  {
      echo '<td readonly >'.$key.'</td>';
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

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>

</html>

<form name="naujosSaskaitos" action="naujosSaskaitos.php" method="post">
    <input style="color: black; background-color: gold; margin: 10px; float: left;" type="submit"
        value="Sukurti nauja saskaita">
</form>

<form name="istrinti" action="istrinti.php" method="post">
    <input style="color: black; background-color: gold; margin: 10px; float: left;" type="submit"
        value="Istrinti saskaita">
</form>

<form name="pinigai" action="pinigai.php" method="post">
    <input style="color: black; background-color: gold; margin: 10px; float: left;" type="submit"
        value="Pridėti - Atimti pinigus">
</form>

<!-- <button style="color: black; background-color: red; margin: 10px; float: left; width: 100px;"><a href="http://localhost/NamuDarbai/Bankas/login.php?logout=1">Atsijungti</a></button> -->

<?php
include_once(__DIR__.'/footer.php');