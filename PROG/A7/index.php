<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises por superficie</title>
  </head>
  <body>
    <a href="index.php">Paises por superficie</a>
    <a href="porcontinente.php">Paises por Continente</a>
    <a href="independencia.php">Año de Independencia</a>
<?php
//Conexion a la base de datos
$conexion= new mysqli("localhost","root","root","world");
//Controlador errores
if($conexion->connect_errno){
echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
}else {
//Lo que tiene que mostrar por pantalla
$resultado=$conexion->query("SELECT * FROM country GROUP BY SurfaceArea DESC ");
        while ($fila=$resultado->fetch_assoc()) {
        echo "<hr>" . $fila['Name']." <br> ".$fila['SurfaceArea'];
                                                }
}

?>

  </body>
</html>
