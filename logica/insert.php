<?php
 include ('conexion.php');
  
 $nombre  = $_POST['nombreP'];
 $costoUnitario  = $_POST['costoP'];
 $precioUnitario = $_POST['precioP'];
 $categoria = $_POST['categoriaP'];
 $marca = $_POST['marcaP'];
 $stock = $_POST['stockP'];
 $variante = $_POST['varianteP'];


$insertar = "INSERT INTO productos VALUES (100, '$nombre',$costoUnitario, $precioUnitario,'$categoria', '$marca', $stock, '$variante') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}






?>