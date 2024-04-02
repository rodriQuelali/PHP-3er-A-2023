<?php

abstract class Db {
    private $dsn = 'mysql:host=localhost;dbname=ejemplo';
    private $usuario = 'root';
    private $contrasena = '';
    public $conexion;

    static function conectar() {
        try {
            $this->conexion = new PDO($this->dsn, $this->usuario, $this->contrasena);

            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOE_EXCEPTION);

            return $this->conexion;
        } catch  (PDOException $e) {
            echo "error al conectar a la base de datos: " . $e->getMessage();
            return null;
        }
    }
}

echo Db::conectar();