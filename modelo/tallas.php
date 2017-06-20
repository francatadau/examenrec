<?php
include 'db.php';
/**
 *
 */
class tallas extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();

  }

  public function listarTallas(){

    if ($this->hayError()==true){
		return null;

	}else{

		$resultado = $this->conexion()->query("SELECT * FROM tallas");
		return $resultado->fetch_assoc();
	}

	}

}

?>
