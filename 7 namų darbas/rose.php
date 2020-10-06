<?php

session_start();


if(!isset($_SESSION['link'])) {
    header("Location: pink.php");
}

session_unset();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

    <title>rose</title>
</head>
<body style="background-color: #be3131">


</body>

</html>