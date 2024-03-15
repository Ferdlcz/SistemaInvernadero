<br>
<div class="container mt-5">
  <h2 class="text-center">Registros de Siembra</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="text-center">
          <th>Nombre del dueño</th>
          <th>Apellidos del dueño</th>
          <th>Variacion</th>
          <th>Número de charolas</th>
          <th>Fecha de siembra</th>
          <th>Número de invernadero</th>
          <th>Fecha aproximada de entrega</th>
          <th>Fecha de entrega</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($plantaciones as $plantacion) : ?>
                <tr class="text-center">
                    <td><?php echo $plantacion['NombreDueño']; ?></td>
                    <td><?php echo $plantacion['ApellidosDueño']; ?></td>
                    <td><?php echo $plantacion['Variedad']; ?></td>
                    <td><?php echo $plantacion['NumeroCharolas']; ?></td>
                    <td><?php echo $plantacion['FechaSiembra']; ?></td>
                    <td><?php echo $plantacion['NumeroInvernadero']; ?></td>
                    <td><?php echo $plantacion['FechaAproxEntrega']; ?></td>
                    <td><?php echo $plantacion['FechaEntrega']; ?></td>
                    <td><button class="btn btn-danger">Eliminar</button></td>
                    <td><button class="btn btn-primary">Actualizar</button></td>
                </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>