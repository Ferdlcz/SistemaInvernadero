<br>
<div class="container mt-5">
  <h2 class="text-center">Registros de Siembra</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre del dueño</th>
          <th>Apellidos del dueño</th>
          <th>Variacion</th>
          <th>Número de charolas</th>
          <th>Fecha de siembra</th>
          <th>Número de invernadero</th>
          <th>Fecha aproximada de entrega</th>
          <th>Fecha de entrega</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($datosSiembras as $idSiembra => $siembra) : ?>
                <tr>
                    <td><?php echo $siembra['NombreDueño']; ?></td>
                    <td><?php echo $siembra['ApellidosDueño']; ?></td>
                    <td><?php echo $siembra['Variedad']; ?></td>
                    <td><?php echo $siembra['NumeroCharolas']; ?></td>
                    <td><?php echo $siembra['FechaSiembra']; ?></td>
                    <td><?php echo $siembra['NumeroInvernadero']; ?></td>
                    <td><?php echo $siembra['FechaAproxEntrega']; ?></td>
                    <td><?php echo $siembra['FechaEntrega']; ?></td>
                    <td>                    
                      <form method="post" action="../controller/eliminarMiSiembra.controller.php">
                        <input type="hidden" name="siembra_id" value="<?php echo $idSiembra; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                      </form>
                    </td>
                </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>