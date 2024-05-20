<?php
require "conf/DB.php";
final class Model_ingreso extends BD
{
    function ingresar() {
        
    }
    
    static function insertar($registro){}
    static function consulta(){
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = BD::conectar()->prepare("SELECT * 
            FROM usuario u
            INNER JOIN personas p ON u.idPersona = p.id
            WHERE correo = ");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
    static function actualizar($registro){}
    static function eliminar($accion, $liminar){}
}
