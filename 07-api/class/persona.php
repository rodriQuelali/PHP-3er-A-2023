<?php
require_once "db/db.php";
class Persona{
    private $idPersona;
    private $nombre;
    private $telefono;
    private $direccion;
    public $db;

    public function __construct($idPersona, $nombre, $telefono, $direccion) {
        $this->idPersona = $idPersona;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->db = Db::conectar();
    }

    public function listPersona() {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT * FROM persona");

            $prepar->execute();

            return $prepar->fetchAll();

            unset($prepar);


        } catch(PDOException $e) {
            echo "error al conectar a la base de datos: ". $e;
            return null;
        }
    }

    //guaradar
    public function guadarPersona() {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = Db::conectar()->prepare("SELECT * FROM persona");

            $prepar->execute();

            Db::desconectar();

            return $prepar->fetchAll();


        } catch(PDOException $e) {
            echo "error al conectar a la base de datos: ". $e;
            return null;
        }
    }

}