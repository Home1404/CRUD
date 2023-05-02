<?php 
  class Conexion{
    static public function conectar(){
      // PDO("nombre del servidor; nombre de la base de datos, usuario, contraseña")
      $link = new PDO("mysql:host=localhost;dbname=crud_php","root", "");
      $link -> exec ("set names utf8");
      return $link;
      // En xampp puedes colocar usuario y contraseña si lo deseas, si no es localhost te toca
    }
  }
?>