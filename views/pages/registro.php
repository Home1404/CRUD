<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light border-radius-" method="post" autocomplete="off" >
  
    <div class="form-group">
      <label for="nombre">Name:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
          <i class="fa-solid fa-user"></i>
          </span>
        </div>
        <input type="text" class="form-control" placeholder="Enter your name..." id="nombre" name="registroNombre" />
      </div>
    </div>
  
    <div class="form-group">
      <label for="email">Email:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa-solid fa-envelope"></i>
          </span>
        </div>
        <input type="email" class="form-control" placeholder="Enter your email..." id="email" name="registroEmail"/>
      </div>
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <div class="input-group">
       <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa-solid fa-lock"></i>
          </span>
        </div>
        <input type="password" class="form-control" placeholder="Enter your password..." id="pwd" name="registroPassword"/>
      </div>
    </div>

    <?php
    
    // Instaciar Clase Metodo No Estatico
    // $regitro = new ControladorFormularios();
    // $regitro -> ctrRegistro();
    
    // Instaciar Clase Metodo Estatico
    $registro = ControladorFormularios::ctrRegistro();
    
    if ($registro == "ok") {
      echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null,null, window.location.href)
        }
      </script>';
      echo '<div class="alert alert-success">El Usuario ha sido Registrado</div>';
    }
    
    ?>

    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>

</div>
