<?php 
  
  require_once "conexion.php";

  class ModeloFormularios{
    // $ Registro
    static public function mdlRegistro($tabla, $datos){
      // stmt = statement / Declaracion sql
      $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)");

      $stmt -> bindParam(":user_name", $datos["user_name"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_email", $datos["user_email"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_password", $datos["user_password"], PDO::PARAM_STR);

      if($stmt -> execute()){
        return "ok";
      }else {
        print_r(Conexion::conectar() -> errorInfo());
      }

     $stmt -> close();
     $stmt = null;
     
     #bindparam()
     // :user_ Parametros ocultos
    }
    // $ Seleccionar Registros
    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

      if ($item == null && $valor == null) {
        $stmt = Conexion::conectar() -> prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY user_id DESC ");
        
        $stmt -> execute();
        return $stmt -> fetchAll();
        
      } else {        
        $stmt = Conexion::conectar() -> prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY user_id DESC ");
        
        $stmt -> bindParam(":" . $item , $valor, PDO::PARAM_STR);

        $stmt -> execute();
        return $stmt -> fetch();
      }
      
      $stmt -> close();
      $stmt = null;
    }
    // $ Actualizar
    static public function mdlActualizarRegistro($tabla, $datos){
      $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET user_name = :user_name, user_email = :user_email, user_password = :user_password WHERE user_id = :user_id");

      $stmt -> bindParam(":user_name", $datos["user_name"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_email", $datos["user_email"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_password", $datos["user_password"], PDO::PARAM_STR);
      $stmt -> bindParam(":user_id", $datos["user_id"], PDO::PARAM_INT);

      if($stmt -> execute()){
        return "ok";
      }else {
        print_r(Conexion::conectar() -> errorInfo());
      }

     $stmt -> close();
     $stmt = null;
     
    }
    // $ Eliminar
    static public function mdlEliminarRegistro($tabla, $valor){
      $stmt = Conexion::conectar() -> prepare("DELETE FROM $tabla WHERE user_id = :user_id");

      $stmt -> bindParam(":user_id", $valor, PDO::PARAM_INT);

      if($stmt -> execute()){
        return "ok";
      }else {
        print_r(Conexion::conectar() -> errorInfo());
      }

     $stmt -> close();
     $stmt = null;
     
    }
  }

?>