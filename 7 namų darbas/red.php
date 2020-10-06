<?php

if (isset($_GET['color'])) {
    header('Location:blue.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Red</title>
</head>
<body style="background-color: #e96161;">
<form action="" method="get">
<a href="red.php?color">color</a>
</form>
</body>

</html>