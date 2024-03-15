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

      <?php foreach ($plantaciones as $plantacion) : ?>
                <tr>
                    <td><?php echo $plantacion['NombreDueño']; ?></td>
                    <td><?php echo $plantacion['ApellidosDueño']; ?></td>
                    <td><?php echo $plantacion['Variedad']; ?></td>
                    <td><?php echo $plantacion['NumeroCharolas']; ?></td>
                    <td><?php echo $plantacion['FechaSiembra']; ?></td>
                    <td><?php echo $plantacion['NumeroInvernadero']; ?></td>
                    <td><?php echo $plantacion['FechaAproxEntrega']; ?></td>
                    <td><?php echo $plantacion['FechaEntrega']; ?></td>
                </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>