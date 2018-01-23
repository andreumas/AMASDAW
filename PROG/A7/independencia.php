<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises y su año de independencia</title>
  </head>
  <body>
    <a href="index.php">Paises por superficie</a>
    <a href="porcontinente.php">Paises por Continente</a>
    <a href="independencia.php">Año de Independencia</a>

<?php
$conexion=new mysqli("localhost","root","root","world");
if ($conexion->connect_errno) {
  echo "Fallo de MySQL";
}else{
//Lo que tiene que mostrar por pantalla
$resultado=$conexion->query("SELECT * FROM country  WHERE IndepYear IS NOT NULL ORDER BY LocalName " );
        while ($fila=$resultado->fetch_assoc()) {
        echo "<hr>" . $fila['LocalName']." <br> ".$fila['IndepYear'];
                                                }
}


 ?>


  </body>
</html>
