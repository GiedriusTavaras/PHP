<?php

$duomenys = json_decode(file_get_contents("php://input"), 1);

_l($duomenys);

header('Content-type:application/json;charset=utf-8');

echo json_encode([
    // 'all' => $duomenys['all'],
    // 'checked' => $duomenys['checked'],
    'tekstas' => '<h1> viso rasta '.$duomenys['all'].'-ios is ju pazymeti '.$duomenys['checked'].'<h1>'
    ]);


