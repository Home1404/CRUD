<?php
  if (isset($_GET["id"])) {
    $item = "user_id";
    $valor = $_GET["id"];
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
  }
?>

<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light border-radius-" method="post" autocomplete="off" >
  
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
          <i class="fa-solid fa-user"></i>
          </span>
        </div>
        <input type="text" class="form-control" value="<?php echo $usuario["user_name"]; ?>" placeholder="Enter your name..." id="nombre" name="actualizarNombre" />
      </div>
    </div>
  
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa-solid fa-envelope"></i>
          </span>
        </div>
        <input type="email" class="form-control" value="<?php echo $usuario["user_email"]; ?>" placeholder="Enter your email..." id="email" name="actualizarEmail"/>
      </div>
    </div>
    
    <div class="form-group">
      <div class="input-group">
       <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa-solid fa-lock"></i>
          </span>
        </div>
        <input type="password" class="form-control" placeholder="Enter your password..." id="pwd" name="actualizarPassword"/>
        <input type="hidden" name="passwordActual" value="<?php echo $usuario["user_password"]; ?>" >
        <input type="hidden" name="idUsuario" value="<?php echo $usuario["user_id"]; ?>" >
      </div>
    </div>

    <?php

      // $ Actualizar 
      $actualizar = ControladorFormularios::ctrActualizarRegistro();
      if ($actualizar == "ok") {
        echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null,null, window.location.href)
        }
        </script>';
        echo '<div class="alert alert-success">El Usuario ha sido Actualizado</div>
        <script>
          setTimeout(function(){
            window.location = "index.php?pagina=inicio";
          },1000)
        </script>
        ';
  
      }
    ?>

    <button type="submit" class="btn btn-primary">Update</button>
    
  </form>

</div>
