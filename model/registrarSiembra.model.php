<?php

class Siembra {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertarSiembra($idUsuario, $nombreSemilla, $tipoPlanta, $numCharolas, $fechaSiembra, $numInvernadero) {
        $stmt = $this->conexion->prepare("CALL InsertarPlantacion(?,?,?,?,?,?)");
        $stmt->bind_param("issisi", $idUsuario, $nombreSemilla, $tipoPlanta, $numCharolas, $fechaSiembra, $numInvernadero);
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