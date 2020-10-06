<?php


session_start();

$spalva = '';
if (isset($_GET['GET'])) {
    $_GET[0] = 'greenyellow';
    $spalva = $_GET[0];
    $_SESSION['x'] = $spalva;
}



if (isset($_POST['SET'])) {
    $_POST[0] = 'gold';
    $spalva = $_POST[0];
    $_SESSION['x'] = $spalva;
    header('Location:septintasNamuDarbas6ir7.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blue</title>
</head>
<body style="background-color: <?= $_SESSION['x'] ?>">

<form action="" method="get">
<button type="submit" name="GET">GET</button>
</form>

<form action="" method="post">
<button type="submit" name="SET">SET</button>
</form>

</body>

</html>