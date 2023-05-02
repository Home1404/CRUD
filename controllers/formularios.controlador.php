<?php

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
}