<?php

class ControladorFormularios{
  static public function ctrRegistro(){
    if (isset($_POST["registroNombre"])) {
      // return $_POST["registroNombre"] . "<br>". $_POST["registroEmail"] . "<br>" . $_POST["registroPassword"];
      return "ok";
    }
  }
}