<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura Paises</title>
  </head>
  <body>

<?php
  $conexion= new mysqli("localhost","root","root","world");
    if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL" . $conexion->connect_errno;
    }else {

?>

<h1>Paises del mundo </h1>
  <?php
  //Que se quiere mostrar
        $resultado=$conexion->query("SELECT * FROM country
                                     GROUP BY SurfaceArea DESC ");
        while ($fila=$resultado->fetch_assoc()) {
          echo "" . $fila['Name']."  ".$fila['Continent']."<br>";

         }

      }
        ?>




  </body>
</html>
