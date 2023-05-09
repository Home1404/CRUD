<?php

// $ Registros
class ControladorFormularios{
  static public function ctrRegistro(){
    if (isset($_POST["registroNombre"])) {
      $tabla = "registros";
      
      $datos = array(
                    "user_name" => $_POST["registroNombre"],
                    "user_email" => $_POST["registroEmail"],
                    "user_password" => $_POST["registroPassword"]
                  );
      
      $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
      return $respuesta;
    }
  }
  // $ Seleccionar Registros
  static public function ctrSeleccionarRegistros($item, $valor){
    $tabla = "registros";
    $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
    return $respuesta;
  }
  // $ Ingreso
  public function ctrIngreso(){
    if (isset($_POST["ingresoEmail"])) {
      $tabla = "registros";
      $item = "user_email";
      $valor = $_POST["ingresoEmail"];
      
      $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
      
      if ($respuesta["user_email"] == $_POST["ingresoEmail"] && $respuesta["user_password"] == $_POST["ingresoPassword"]) {
        // Variables de Sesion
        $_SESSION["validarIngreso"] = "ok";
        
        echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null,null, window.location.href)
        }
        window.location = "index.php?pagina=inicio";
        </script>';
      } else {
        echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null,null, window.location.href)
        }
        </script>';
        echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
      }
    }
  }
  // $ Actualizar
  static public function ctrActualizarRegistro(){
    if (isset($_POST["actualizarNombre"])) {
      if (($_POST["actualizarPassword"] != "")) {
        $password = $_POST["actualizarPassword"];
      } else {
        $password = $_POST["passwordActual"];
      }
      $tabla = "registros";
      
      $datos = array(
        "user_id" => $_POST["idUsuario"],
        "user_name" => $_POST["actualizarNombre"],
        "user_email" => $_POST["actualizarEmail"],
        "user_password" => $password
      );
    
      $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla,$datos);
      
      return $respuesta;
    }
  }
  // $ Eliminar
  public function ctrEliminarRegistro(){
    if (isset($_POST["eliminarRegistro"])) {
      $tabla = "registros";
      $valor = $_POST["eliminarRegistro"];
      $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla,$valor);
      if ($respuesta == "ok") {
        echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null,null, window.location.href)
        }
        window.location = "index.php?pagina=inicio";
        </script>';
      }
    }
  }
}
