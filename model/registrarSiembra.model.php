<?php

class Siembra {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertarSiembra($idUsuario, $variedad, $numCharolas, $fechaSiembra, $numInvernadero, $fechaAproxEntrega, $fechaEntrega) {
        $stmt = $this->conexion->prepare("CALL InsertarPlantacion(?,?,?,?,?,?,?)");
        $stmt->bind_param("isisiss", $idUsuario, $variedad, $numCharolas, $fechaSiembra, $numInvernadero, $fechaAproxEntrega, $fechaEntrega);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
    
}

?>