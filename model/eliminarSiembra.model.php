<?php

class SiembrasModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function eliminarSiembra($siembra_id) {
        $stmt = $this->conexion->prepare("DELETE FROM plantaciones WHERE idPlanta = ?");
        $stmt->bind_param("i", $siembra_id); 
        $stmt->execute();
        $stmt->close(); 
    }
}

?>
