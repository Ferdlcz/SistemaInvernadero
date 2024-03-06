<br>
<div class="container mt-5">
  <h2 class="text-center">Registros de Siembra</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre del dueño</th>
          <th>Apellidos del dueño</th>
          <th>Nombre de la semilla</th>
          <th>Tipo de planta</th>
          <th>Número de charolas</th>
          <th>Fecha de siembra</th>
          <th>Número de invernadero</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($plantaciones as $plantacion) : ?>
                <tr>
                    <td><?php echo $plantacion['NombreDueño']; ?></td>
                    <td><?php echo $plantacion['ApellidosDueño']; ?></td>
                    <td><?php echo $plantacion['NombreSemilla']; ?></td>
                    <td><?php echo $plantacion['TipoPlanta']; ?></td>
                    <td><?php echo $plantacion['NumeroCharolas']; ?></td>
                    <td><?php echo $plantacion['FechaSiembra']; ?></td>
                    <td><?php echo $plantacion['NumeroInvernadero']; ?></td>
                </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>