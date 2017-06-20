<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de pedido</title>
  </head>
  <body>
    <form class="" action="modelo/pedido.php" method="post">

      Nombre<br><br><input type="text" name="nombre"  placeholder="Introduce el nombre"><br><br>

      Apellidos<br><br><input type="text" name="apellidos"  placeholder="Introduce tus apellidos"><br><br>

      Tallas de camiseta<br><br>
      <select name="talla">
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
      </select><br><br>

      Numero de camisetas<br><br><input type="text" name="numero"  placeholder="Introduce Nº de camisetas"><br><br>

      <input type="submit" name="submit" value="Enviar">

    </form>
  </body>
</html>
