<?php


$spalva = $_GET['color'] ?? 'white';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body style="background-color: <?= $spalva; ?>">
<form action="septintasNamuDarbas3.php" method="get">
    <input type="text" name="color" id="1">
    <input type="submit" value="sub">
</form>
</body>

</html>
