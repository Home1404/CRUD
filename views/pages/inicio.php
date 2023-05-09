<?php 
  // Variables de Sesion
  if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
  } else {
    if ($_SESSION["validarIngreso"] != "ok") {
      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;
    }
  }
  
  $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null); 
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Fecha</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $key => $value): ?>
      <tr>
        <td>
          <?php echo ($key+1) ?>
        </td>
        <td>
          <?php echo $value["user_name"] ?>
        </td>
        <td>
          <?php echo $value["user_email"] ?>
        </td>
        <td>
          <?php echo $value["fecha"] ?>
        </td>
        <td>
          <div class="btn-group">
            <div class="px-1">
              <a href="index.php?pagina=editar&id=<?php echo $value["user_id"] ?>" class="btn btn-warning">
                <i class="fa-solid fa-pencil"></i>
              </a>
            </div>
              <form method="post" autocomplete="off">
                <input type="hidden" value="<?php echo $value["user_id"] ?>" name="eliminarRegistro">
               
                <button type="submit" class="btn btn-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>

                <?php

                  $eliminar = new ControladorFormularios();
                  $eliminar -> ctrEliminarRegistro();

                ?>

              </form>
          </div>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>