<?php

namespace Controlers;

use APP\Model;
use APP\Validator;



class AccountController {
    private $model;

    public function __construct() {
        }

    public $Id = 0;
    //post
    public function create() {
        //turi siusti i patikrinima, o gauta siusti i modeli
        require DIR.'../views/create.php';
        $model->create();

    }
    //post
    public function delete($Id) {
        require DIR.'../views/delete.php';
        $model->delete();
    }
    //get
    public function edit($Id) {
        require DIR.'../views/edit.php';
    }
    //post
    public function save() {
        require DIR.'../views/save.php';
        $model->insertData();
    }
    //post
    public function upgrade($Id) {
        require DIR.'../views/upgrade.php';
        $model->upgrade();
    }
    //get
    public function index() {
        require DIR.'../views/index.php';
        $model->showAll();
    }
    //get
    public function nerasta() {
        require DIR.'../views/nerasta.php';
    }
}