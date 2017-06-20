<?php
/**
 *
 */
class sesionUsuario
{
  private $usuario=null;
  private $nombre=null;
  private $apellidos=null;

  function __construct()
  {
    session_start();
	if(isset($_SESSION['nombre'])){ $this->nombre=$_SESSION['nombre'];
	}

  }

  public function usuarioLogado(){
	return $this->usuario;
}else {
  return null;
}

  public function logout(){
    $_SESSION=[];
	  session_destroy();
  }
}
  ?>
