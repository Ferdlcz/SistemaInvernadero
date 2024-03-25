<?php

class UserModel{
    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function getAllUsers(){
        $stmt = $this->conexion->prepare("SELECT id, nombre, apellidos, usuario, correo_electronico, telefono FROM usuarios");
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>