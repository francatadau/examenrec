<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
    if ((isset($_POST['nombre'])) && (!empty($_POST['nombre'])) &&
		(isset($_POST['abonado'])) && (!empty($_POST['abonado']))){

				include 'modelo/usuarios.php';
				$login = new usuarios();
				$resultado=$login->comprobarUsuario($_POST['nombre']);

					if ($resultado['nombre']==$_POST['nombre']){
						echo "Usuario encontrado<br>";
						if ($_POST['abonado'])==($resultado['abonado']){
							echo "Logueado<br><br>";
            }
          }
        }
     ?>
  </body>
</html>
