<?php 
  
  require_once "conexion.php";

  class ModeloFormularios{
    // $ Registro
    static public function mdlRegistro($tabla, $datos){
      // stmt = statement / Declaracion sql
      $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(user_name, user_email, user_password)
      VALUES (:user_name, :user_email, :user_password)");

      $stmt -> bindParam(":user_name", $datos["user_name"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_email", $datos["user_email"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_password", $datos["user_password"], PDO::PARAM_STR);

      if($stmt -> execute()){
        return "ok";
      }else {
        print_r(Conexion::conectar() -> errorInfo());
      }

      // ? Ni idea del Error
     $stmt -> close();
     $stmt = null;

      #bindparam()
      // :user_ Parametros ocultos
    }
  }

?>