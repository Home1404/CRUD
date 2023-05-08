<?php
  if (isset($_GET["user_id"])) {
    $item = "user_id";
    $valor = $_GET["user_id"];
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
    // echo '<pre>'; print_r($usuario); echo '</pre>';
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
        <input type="text" class="form-control" value="" placeholder="Enter your name..." id="nombre" name="actualizarNombre" />
      </div>
    </div>
  
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa-solid fa-envelope"></i>
          </span>
        </div>
        <input type="email" class="form-control" value="" placeholder="Enter your email..." id="email" name="actualizarEmail"/>
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
        <input type="hidden" name="passwordActual" value="" >
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    
  </form>

</div>
