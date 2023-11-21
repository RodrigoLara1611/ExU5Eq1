<?php

class Database {
    private $host = "localhost";
    private $usuario = "rlara";
    private $contrasena = "123456";
    private $base_de_datos = "usuweb";
    private $conexion;


    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->base_de_datos}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "Error de conexión: " . $ex->getMessage();
        }
    }

    public function obtenerNombreRev() {
        try {
            $query = "SELECT Nombres,Rol FROM usuarios WHERE Rol = 'rev' LIMIT 1";
            $stmt = $this->conexion->query($query);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result;
            } else {
                return "Revisor no encontrado";
            }
        } catch (PDOException $ex) {
            echo "Error al obtener el nombre del revisor: " . $ex->getMessage();
        }
    }

    public function obtenerGradoRev() {
        try {
            $query = "SELECT Grado_Academico FROM revisores LIMIT 1";
            $stmt = $this->conexion->query($query);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result;
            } else {
                return "Revisor no encontrado";
            }
        } catch (PDOException $ex) {
            echo "Error al obtener el grado del revisor: " . $ex->getMessage();
        }
    }

    
}

?>
