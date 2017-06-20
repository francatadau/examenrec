<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedido</title>
  </head>
  <body>
    <?php

    if((isset($_POST['nombre'])) && (!empty($_POST['nombre'])) &&
            (isset($_POST['apellidos'])) && (!empty($_POST['apellidos'])) &&
    	(isset($_POST['talla'])) && (!empty($_POST['talla']))&&
    (isset($_POST['numero'])) && (!empty($_POST['numero']))) {

    		include 'pedidos.php';
    		$pedido = new pedidos();

    		$result=$pedido->crearPedido($_POST['nombre'],$_POST['apellidos'],$_POST['talla'],$_POST['numero']);
    		echo "Pedido creado";
    		}

        $resultado=$pedido->listaPedido();
     ?>

     <table border="1px">
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Talla</th>
            <th>Numero de camisas</th>
          </tr>
          <?php
          while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['apellidos']."</td>";
            echo "<td>".$fila['talla']."</td>";
            echo "<td>".$fila['numero']."</td>";
            echo "</td>";
    }
            ?>
          </table>
  </body>
</html>
