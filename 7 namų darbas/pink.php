<?php

session_start();

if (isset($_POST['m'])) {
    $_SESSION['link'] = "x";
    header("Location: rose.php");
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>pink</title>
</head>
<body style="background-color:pink">
<form action="" method="post">
<button name="m" type="submit">GO TO ROSE</button>
</form>

</body>

</html>