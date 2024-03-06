    <br>
    
    <div class="container mt-5"> 
        <h2 class="text-center">Registro de Siembra en Invernadero</h2>
        <form method="POST" action="../controller/registrarSiembra.controller.php">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['id']; ?>">
            <div class="mb-3">
                <label for="nombreSemilla" class="form-label">Nombre de la Semilla</label>
                <input type="text" class="form-control" id="nombreSemilla" name="nombreSemilla" required>
            </div>

            <div class="mb-3">
                <label for="tipoPlanta" class="form-label">Tipo de Planta</label>
                <input type="text" class="form-control" id="tipoPlanta" name="tipoPlanta" required>
            </div>
            <div class="mb-3">
                <label for="numCharolas" class="form-label">Número de Charolas</label>
                <input type="number" class="form-control" id="numCharolas" name="numCharolas" required>
            </div>
            <div class="mb-3">
                <label for="fechaSiembra" class="form-label">Fecha de Siembra</label>
                <input type="date" class="form-control" id="fechaSiembra" name="fechaSiembra" required>
            </div>
            <div class="mb-3">
                <label for="numInvernadero" class="form-label">Número de Invernadero</label>
                <input type="text" class="form-control" id="numInvernadero" name="numInvernadero" required>
            </div>
            <button type="submit" class="btn btn-primary align-center">Registrar Siembra</button>
        </form>
    </div>