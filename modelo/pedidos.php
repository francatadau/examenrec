<?php
include 'db.php';
/**
 *
 */
class pedidos extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();

  }

public function crearPedido(){

  if ($this->hayError()==true){
        return null;

    }else{

      $sql="INSERT INTO pedidos (id,nombre,apellidos,talla,numero,precio,color) VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['talla']."','".$_POST['numero']."','".$_POST['color']."')";

      $this->conexion()->query($sql);
    }
  }

  public function listaPedido(){

    if ($this->hayError()==true){
          return null;

  }else {

    $sql="SELECT * FROM pedidos ORDER BY id DESC LIMIT 1";

    $this->conexion()->query($sql);
  }
}


}
?>
