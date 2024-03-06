<br>
<div class="container mt-5">
  <h2 class="text-center">Registros de Siembra</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Usuario</th>
          <th>Correo electronico</th>
          <th>Telefono</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($users as $user) : ?>
          <tr>
            <td><?php echo $user['nombre']; ?></td>
            <td><?php echo $user['apellidos']; ?></td>
            <td><?php echo $user['usuario']; ?></td>
            <td><?php echo $user['correo_electronico']; ?></td>
            <td><?php echo $user['telefono']; ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>