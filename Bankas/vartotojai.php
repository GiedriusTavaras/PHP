<?php

$vartotojai = [
    ['password' => md5('123'), 'vardas' => 'PHP'],
    ['password' => md5('867482605'), 'vardas' => 'Giedrius'],
];


file_put_contents('slaptazodziai.json', json_encode($vartotojai));