<html xml:lang="es">
<head><title>.: ECOMMERCE:.</title>
<meta charset="utf-8"></head>
<body bgcolor="#c0c0c0" text="#000000">
<center><h1><font color="#000080">ECOMMERCEa</font></h1>
<hr><br /></center>
<blockquote>
<?php
  // Creo mis variables para la BD
  $bdhost = "localhost";
  $bduser = "ecommerceAdm";
  $bdpass = "ecommerce7857554";
  $bdname = "ECOMMERCE";

  $recibir = $_GET['cat'];
  //echo "He r ecibido la variable $recibir<br>";

  // Crando el objeto $dblink que almacena una conexion a la BD
  $dblink = new mysqli($bdhost, $bduser, $bdpass, $bdname);
  // La conexión está en el objeto $dblink
  if ($dblink->connect_error) {
    die('Error al conectar a la Base de Datos (' . $dblink->connect_errno . ') '. $dblink->connect_error);
  }
  $ver_base = mysqli_get_server_info($dblink);
  $queryCategoria = "select * from productos p, categoria c where p.categoria = c.id_categoria and c.id_categoria = '$recibir' limit 1;";
  $respuesta = $dblink->query($queryCategoria);
  while($filita = $respuestav->fetch_object()) {
    echo "Categor&iacute;a: $filita->nombre_categoria <br>";
  }

  $querysito = "select * from productos p, categoria c where p.categoria = c.id_categoria and p.categoria = '$recibir';";

  echo "<b>Productos de esta categor&iacute;: </b><br>";
  $resultado = $dblink->query($querysito);
  echo "<ul>\n";
  // Procesamos el resultado que llega en un objeto
  while ($fila = $resultado->fetch_object()) {
    echo "<li>$fila->nombre_producto - $fila->costo_unitario</li>";
    echo "<li>$fila->precio_producto</li>";
  }
  echo "</tul>";
  // Cerrar la conexion a la base
  $dblink->close;
?>
<br>
<a href="categorias.php">Volver Atr&aacute;s</a>
</blockquote>
<body>
</html>