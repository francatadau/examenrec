<?php
include 'db.php';
/**
 *
 */
class usuarios extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();

  }

  public function comprobarUsuario($nombre){
  if ($this->hayError()==true){
  return null;

}else{

  $resultado = $this->conexion()->query("SELECT * FROM usuarios WHERE nombre='".$nombre."'");
  return $resultado->fetch_assoc();
}

}
}

?>
