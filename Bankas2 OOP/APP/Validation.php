<?php


class Validation {

    public static function valid_ak($ak){
        $valid=false;
        if(strlen($ak)==11){
         if($ak[0]>2 && $ak[0]<7){
          if(checkdate(substr($ak,3,2),substr($ak,5,2),substr($ak,1,2))){
           $str=$ak[0]*1+$ak[1]*2+$ak[2]*3+$ak[3]*4+$ak[4]*5+$ak[5]*6+$ak[6]*7+$ak[7]*8+$ak[8]*9+$ak[9]*1;
           $str=$str%11;
           if($str==10){
        
            $str=$ak[0]*3+$ak[1]*4+$ak[2]*5+$ak[3]*6+$ak[4]*7+$ak[5]*8+$ak[6]*9+$ak[7]*1+$ak[8]*2+$ak[9]*3;
            $str=$str%11;
            if($str==10 && substr($ak,10,1)=="0")
             $valid=true;
            elseif($str==substr($ak,10,1))
             $valid=true;
           }
           elseif($str==substr($ak,10,1))
            $valid=true;
          }
         }
        }
        if ($valid = true) {
            return $ak;
        }
    }

    public static function valid_name($name) {
        $valid=false;
        $blacklistChars = '"%\'*$;<>?^`{|}~/\\#=&';
        $pattern = preg_quote($blacklistChars, '/');
        if (strlen($_POST['Vardas']) > 3  && strlen($_POST['Vardas']) < 25) {
            if (!preg_match('/[' . $pattern . ']/', $_POST['Vardas'])) {
                if ($_POST['Vardas'] != 0) {
                    if (!preg_match('#[0-9]#',$_POST['Vardas'])) {
                        $valid = true;
                    }
                }
            }
        }
        return $valid;
    }

    public static function valid_surname($pavarde) {
        $valid=false;
        $blacklistChars = '"%\'*$;<>?^`{|}~/\\#=&';
        $pattern = preg_quote($blacklistChars, '/');
        if (strlen($_POST['Pavarde']) > 3 && strlen($_POST['Pavarde']) < 25) {
            if (!preg_match('/[' . $pattern . ']/', $_POST['Pavarde'])) {
                if ($_POST['Pavarde'] != 0) {
                    if (!preg_match('#[0-9]#',$_POST['Pavarde'])) {
                        $valid = true;
                    }
                }
            }
        }
        return $valid;
    }


}