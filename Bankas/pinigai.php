<?php

// session_start();
ob_start();
defined('PINIGAI') || die;


include_once(__DIR__.'/header.php');

if (isset($_SESSION["prideta"])) {
    echo $_SESSION["prideta"];
    unset($_SESSION["prideta"]);
}
  
if (isset($_SESSION["atimta"])) {
    echo $_SESSION["atimta"];
    unset($_SESSION["atimta"]);
    
}

if (isset($_SESSION["maziauNeiNulis"])) {
    echo $_SESSION["maziauNeiNulis"];
    unset($_SESSION["maziauNeiNulis"]);
}

if (isset($_SESSION["neuztenkaLesu"])) {
    echo $_SESSION["neuztenkaLesu"];
    unset($_SESSION["neuztenkaLesu"]);
}

if (isset($_SESSION["maziauNeiNulis"])) {
    echo $_SESSION["maziauNeiNulis"];
    unset($_SESSION["maziauNeiNulis"]);
}
if (isset($_SESSION["abiReiksmes"])) {
    echo $_SESSION["abiReiksmes"];
    unset($_SESSION["abiReiksmes"]);
}
if (isset($_SESSION["maziauNeiNulis"])) {
    echo $_SESSION["maziauNeiNulis"];
    unset($_SESSION["maziauNeiNulis"]);
}

$array = json_decode(file_get_contents(__DIR__.'/data.json'), 1);


//tikrinama as irasyta ID reiksme, jei ne , tada nieko nedaro
if (isset($_POST['ID'])) {

$id = $_POST['ID'];
$plius = $_POST['Prideti'];
$minus = $_POST['Atimti'];

if (empty($id)) {
    $_SESSION["maziauNeiNulis"] = '<div style="color: black; background-color:  red; font-size: 30px; text-align: center;">Nepasirinktas ID</div>';
}

if ($plius <= 0 && $minus <= 0) {
    $_SESSION["maziauNeiNulis"] = '<div style="color: black; background-color:  red; font-size: 30px; text-align: center;">Įvestas neigiamas skaičius arba nulis</div>';
} elseif ($plius > 0 && empty($minus)) {
    if (!empty($_POST['Prideti'])) {
        foreach ($array as $k => $v) {
            if ($v['ID']== $id) {
            $array[$k]['Likutis'] += $plius;
            $_SESSION["prideta"] = '<div style="color: black; background-color:  #a7f336; font-size: 30px; text-align: center;">Į sąskaitą sėkmingai pervesti pinigai!</div>';
            }
        }
    }
} elseif ($minus > 0 && empty($plius)) {
    if (!empty($_POST['Atimti'])) {
        foreach ($array as $k => $v) {
            if ($v['ID']== $id) {
            if ($array[$k]['Likutis'] >= $minus) {
                $array[$k]['Likutis'] -= $minus;
                $_SESSION["atimta"] = '<div style="color: black; background-color:  #a7f336; font-size: 30px; text-align: center;">Iš sąskaitos sėkmingai pervesti pinigai!</div>';
            } elseif ($minus > $array[$k]['Likutis']) {
                $_SESSION["neuztenkaLesu"] = '<div style="color: black; background-color:  red; font-size: 30px; text-align: center;">Sąskaitoje nepakanka pinigų!</div>';
            }
            }
        }
    }
} else {
    $_SESSION["abiReiksmes"] = '<div style="color: black; background-color:  red; font-size: 30px; text-align: center;">Sąskaitoje nepakanka pinigu arba pasirinkote per daug laukelių!</div>';
}

// echo $Likutis;
// echo $array[$k]['Likutis'];


file_put_contents(__DIR__.'/data.json', json_encode($array), LOCK_EX);

if (isset($_SESSION["prideta"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}
if (isset($_SESSION["atimta"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}

if (isset($_SESSION["maziauNeiNulis"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}

if (isset($_SESSION["neuztenkaLesu"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}

if (isset($_SESSION["maziauNeiNulis"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}
if (isset($_SESSION["abiReiksmes"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
    die;
}
if (isset($_SESSION["maziauNeiNulis"])) {
    header("Location: http://localhost/NamuDarbai/Bankas/pinigai");
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

<body style="background-color: <?= $spalva; ?>">
    <form action="" method="post">
        <div style="margin: 10px;>
            <label for="ID">ID:</label>
            <input type="number" name="ID" id="1"><br>
        </div>

        <div style="margin: 10px;>
            <label for="ID">Prideti:</label>
            <input type="number" name="Prideti" id="2"><br>
        </div>

        <div style="margin: 10px;>
            <label for="ID">Atimti:</label>
            <input type="number" name="Atimti" id="3"><br>
        </div>


        <input style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;" type="submit"
            name="Pateikti" value="Pateikti">
    </form>
    <button style="color: black; background-color: gold; margin: 10px; float: left; width: 100px;"><a
            href="http://localhost/NamuDarbai/Bankas/index.php">Grįšit</a></button>
</body>

</html>

<?php
include_once(__DIR__.'/footer.php');
ob_end_flush();