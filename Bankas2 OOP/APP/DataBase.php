<?php

namespace App\DB;


interface DataBase {
    
    function create(array $userData) : void;
 
    function update(integer $userId, array $userData) : void;
 
    function delete(integer $userId) : void;
 
    function show(integer $userId) : array;
    
    function showAll() : array;
}
