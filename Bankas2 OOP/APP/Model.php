<?php
namespace App\DB;

class Model implements DataBase, Validation {

    private $data;
    
    //void nieko negrazina
    

    public function getData() {
        $this->data = json_decode(file_get_contents(DIR . 'db/data.json'), 1);
    }

    public static function makeIBAN() {
        $lt = 'LT';
        $random11skaitmenu = sprintf("%011d", mt_rand(1, 99999999999));
        $kontroliniaiSkaitmenys = 55;
        $bankoKodas = 99999;
        $IBAN = $lt . $kontroliniaiSkaitmenys . $bankoKodas . $random11skaitmenu;
        return $IBAN;
        // foreach ($array as $key => $value) {
        //     foreach ($value as $key => $value) {
        //         if ($value === $IBAN) {
        //             // $IBAN = 0;
        //         break; 
        //         }
        //     }
        // }
    }

    public function create(array $userData) : void {
        $this->getData();
        //kaip iskviesti Asmens kodo patikrinimas, patikrinimas
        $id = $this->getNextId();
        $IBAN = $this->makeIBAN();
        $data['id'] = $id;
        $data['IABN'] = $IBAN;
        $data['name'] = $userData['name'];
        $data['surname'] = $userData['surname'];


        $this->insertData($data);
    }

    public function getNextId(array $userData) {
        if (!empty($userData)) {
            $id = max(array_column($userData, 'id')) + 1;
        } else {
            $id = 1;
        }
        return $id;
    }

    public function insertData(array $data) {
        $this->data[] = $data;
        $this->data = file_put_contents(DIR . 'db/data.json', json_encode($array), LOCK_EX);
    }


    public function upgrade(integer $userId, array $userData) : void {
        foreach ($this->data as $key => $value) {
            if ($userId == $key) {
                $this->data[$key] = $userData;
            }
        }
        $this->save();
    }


    public function delete(integer $userId) : void {
        foreach ($this->data as $thisArrIndex => $subArray) {
            if ($subArray['id'] == $userId) {
                unset($this->data[$thisArrIndex]);
                $this->save();
            }
        }
    }
    

    public function show(integer $userId) : array {
        foreach ($this->data as $key => $value) {
            if ($key == $userId) {
                return $value;
            }
        }
    }


    public function showAll(integer $userId) : array {
        asort($this->data);
        return $this->data;
    }

    public function save() {
        file_put_contents(DIR . 'db/data.json', json_encode($this->data));
    }
}

