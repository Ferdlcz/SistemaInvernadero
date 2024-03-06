<?php

class SiembraModel {

    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function consultarPlantaciones($idUsuario){
        $stmt = $this->conexion->prepare("CALL ConsultarPlantaciones(?)");
        $stmt->bind_param("i", $idUsuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

?>