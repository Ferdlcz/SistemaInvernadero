<?php

class SiembrasModel {

    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function consultarPlantaciones(){
        $stmt = $this->conexion->prepare("CALL ConsultarTodasPlantaciones()");
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

}

?>