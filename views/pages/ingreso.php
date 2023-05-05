<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light border-radius-" method="post" autocomplete="off" >
  
    <div class="form-group">
      <label for="email">Email:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa-solid fa-envelope"></i>
          </span>
        </div>
        <input type="email" class="form-control" placeholder="Enter your email..." id="email" name="ingresoEmail"/>
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
        <input type="password" class="form-control" placeholder="Enter your password..." id="pwd" name="ingresoPassword"/>
      </div>
    </div>

    <?php
    
    // Instaciar Clase Metodo No Estatico (Se ejecuta en el controlador)
    // $regitro = new ControladorFormularios();
    // $regitro -> ctrRegistro();
    
    // Instaciar Clase Metodo Estatico (reutilizar en la vista para reutilizacion)
    $registro = new ControladorFormularios;
    $registro -> ctrIngreso();
    
    ?>

    <button type="submit" class="btn btn-primary">Login</button>
    
  </form>

</div>
 