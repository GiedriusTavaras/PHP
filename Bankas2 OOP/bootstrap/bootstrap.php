<?php

session_start();

//du keliais

$path = preg_replace('/index\.php$/', '', $_SERVER['SCRIPT_NAME']);
$server = $_SERVER['SERVER_NAME'];

define('URL', 'http://'.$server.$path);
// echo 'Hello from bootstrap';
// echo $path;
//serverio keliai failams

//narsykles keliai puslapiams