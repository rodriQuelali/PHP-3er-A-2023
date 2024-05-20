<?php
final class Ingreso 
{
    function login() {
        if(isset($_POST["correo"])){
            $respueta = Model_ingreso::consulta();
            $data = $respueta["password"];
            echo $data;
        }
    }
}
