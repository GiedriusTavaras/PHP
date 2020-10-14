<?php

include_once(__DIR__.'/header.php');
session_start();

if (!empty($_POST)) {
    
    $duomenuBaze = json_decode(file_get_contents(__DIR__.'/slaptazodziai.json'), 1 );
        foreach ($duomenuBaze as $vartotojai) {
            if ($_POST['name'] == $vartotojai['vardas']) {
                if (md5($_POST['password']) == $vartotojai['password']) {
                    $_SESSION['login'] = 1;
                    $_SESSION['vardas'] = $vartotojai['vardas'];
                    header('Location: http://localhost/NamuDarbai/Bankas/index.php');
                    die;
                }
            }
        }
        echo 'blogas vaikas';
}
if ($_GET['logout'] ?? 0) {
    $_SESSION['login'] = 0;
    unset($_SESSION['vardas']);
    header('Location: http://localhost/NamuDarbai/Bankas/login.php');
    die;
}

?>



<form action="" method="post">

<input type="text" name="name" id="name">
<input type="password" name="password" id="password">
<button type="submit">Jungtis</button>

</form>

<?php

include_once(__DIR__.'/footer.php');