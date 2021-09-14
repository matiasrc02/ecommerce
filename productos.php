html xml:lang="es">
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

  echo "Conectando a la base de datos $bdname con el ";
  echo "usuario $bduser@$bdhost <br />";

  // Crando el objeto $dblink que almacena una conexion a la BD
  $dblink = new mysqli($bdhost, $bduser, $bdpass, $bdname);
  // La conexión está en el objeto $dblink
  if ($dblink->connect_error) {
    die('Error al conectar a la Base de Datos (' . $dblink->connect_errno . ') '. $dblink->connect_error);
  }
 // echo "Conectados!<br /><br />\n";
  // Obtever version de la bd
  $ver_base = mysqli_get_server_info($dblink);

  $querysito = "select * from categoria order by nombre_categoria;";

  echo "<b>Categor&iacute;as de productos: </b><br>";
  $resultado = $dblink->query($querysito);
  echo "<ul>\n";
  // Procesamos el resultado que llega en un objeto
  while ($fila = $resultado->fetch_object()) {
    echo "<li><a href=\"categorias2.php?cat=$fila->id_categoria\">$fila->nombre_categoria</li>";
  }
  echo "</tul>";
  // Cerrar la conexion a la base
  $dblink->close;
?>
</blockquote>
<body>
</html>