<html xml:lang="es">
<head><title>.: ECOMMERCE:.</title>
<meta charset="utf-8"></head>
<body bgcolor="#c0c0c0" text="#000000">
<center><h1><font color="#000080">ECOMMERCEa</font></h1>
<hr><br /></center>
<blockquote>
  <nav>
    <ul>
      <li><a href="categorias.php">Categorías</a></li>
      <li><a href="marcas.php">Marcas</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="marketplace.php">Markeplace</a></li>
      <li><a href="ordenes.php">Ordenes</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="proveedores.php">Proveedores</a></li>
    </ul>
  </nav>

<?php
  // Creo mis variables para la BD
  $bdhost = "localhost";
  $bduser = "ecommerceAdm";
  $bdpass = "ecommerce7857554";
  $bdname = "ECOMMERCE";

  // Creando el objeto $dblink que almacena una conexion a la BD
  $dblink = new mysqli($bdhost, $bduser, $bdpass, $bdname);
  // La conexión está en el objeto $dblink
  if ($dblink->connect_error) {
    die('Error al conectar a la Base de Datos (' . $dblink->connect_errno . ') '. $dblink->connect_error);
  }
  // Obtever version de la bd
  $ver_base = mysqli_get_server_info($dblink);  
  echo "Conectando a la base de datos $bdname con el ";
  echo "usuario $bduser@$bdhost <br />";
  echo "Versi&oacute;n de la Base: $ver_base<br />";
  //AQUI EMPIEZO
  echo "<h2>";

  // Cerrar la conexion a la base
  $dblink->close;

?>
</blockquote>
<body>
</html>