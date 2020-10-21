<?php
require DIR.'/vendor/autoload.php';
use Controlers\AccountController;


$route = '/' != $path ? str_replace($path, '', $_SERVER['REQUEST_URI']) : preg_replace('/^\//', '', $_SERVER['REQUEST_URI']);


$route = explode('/',$route);
// echo 'spausdinu route';
// print_r($route);



$controller = new AccountController;
// if (isset($route)) {
//     $controller->index();
// }

if (1 === count($route) && 'account' == $route[0]) {
    $controller->index();
} elseif ('create' == $route[1] && 2 === count($route)) {
    $controller->create();
} elseif ('delete' == $route[1]) {
    $controller->delete($route[2]);
} elseif ('edit' == $route[1]) {
    $controller->edit($route[2]);
} elseif ('save' == $route[1] && 2 === count($route)) {
    $controller->save();
} elseif ('upgrade' == $route[1]) {
    $controller->upgrade($route[2]);
} else {
$controller->nerasta();
}









