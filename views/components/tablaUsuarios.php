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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($datosUsuario as $idUsuario => $usuario) : ?>
          <tr>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['apellidos']; ?></td>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['correo_electronico']; ?></td>
            <td><?php echo $usuario['telefono']; ?></td>
            <td>                    
                <form method="post" action="../controller/eliminarUsuario.controller.php">
                <input type="hidden" name="usuario_id" value="<?php echo $idUsuario; ?>">
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>