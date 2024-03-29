    <br>
    
    <div class="container mt-5"> 
        <h2 class="text-center">Registro de Siembra en Invernadero</h2>
        <form method="POST" action="../controller/registrarSiembra.controller.php">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['id']; ?>">
            <div class="mb-3">
                <label for="nombreSemilla" class="form-label">Variedad</label>
                <input type="text" class="form-control" id="variedad" name="variedad" required>
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
            <div class="mb-3">
                <label for="fechaSiembra" class="form-label">Fecha Aproximada de entrega</label>
                <input type="date" class="form-control" id="fechaSiembra" name="fechaAproxEntrega" required>
            </div>
            <div class="mb-3">
                <label for="fechaSiembra" class="form-label">Fecha de entrega</label>
                <input type="date" class="form-control" id="fechaSiembra" name="fechaEntrega" required>
            </div>
            <button type="submit" class="btn btn-primary align-center mb-3">Registrar Siembra</button>
        </form>
    </div>