<?php

// $ Registros
class ControladorFormularios{
  static public function ctrRegistro(){
    if (isset($_POST["registroNombre"])) {
      // return $_POST["registroNombre"] . "<br>". $_POST["registroEmail"] . "<br>" . $_POST["registroPassword"];
      // return "ok";
      $tabla = "registros";
      $datos = array("user_name" => $_POST["registroNombre"],
                    "user_email" => $_POST["registroEmail"],
                    "user_password" => $_POST["registroPassword"]
                  );
      $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
      return $respuesta;
    }
  }
  // $ Seleccionar Registros
  static public function ctrSeleccionarRegistros(){
    $tabla = "registros";
    $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);
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
        echo '<pre>'; print_r($respuesta); echo '</pre>';
      }
    }
  }
}
