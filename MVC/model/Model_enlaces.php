<?php
final class Model_enlaces
{
    static function enlaces_model($enlaces) {
        if($enlaces == "home"){

            $enlaceData =  "view/module/".$enlaces.".php";

        }else if($enlaces == "index"){
            
            $enlaceData = "view/module/login.php";
        }else{

            $enlaceData = "view/module/login.php";
        }
        return $enlaceData;
    }
}