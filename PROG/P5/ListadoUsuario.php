<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $conexion= new mysqli("localhost","root","root","juegos");
    if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
    }else{
    //Lo que tiene que mostrar por pantalla
    $resultado=$conexion->query("SELECT * FROM usuarios ORDER BY id" );
            while ($fila=$resultado->fetch_assoc()) {
            echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                                    }
    }
//Variables insertivas
$nom=$_POST['nombre'];
$ape=$_POST['apellidos'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$puntu=$_POST['puntua'];


    $insertar = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion)
                 VALUES ('$nom','$ape','$edad','$curso','$puntu')";

if ($conexion->query($insertar) === TRUE) {
    echo "Insertado Correctamente";
} else {
    echo "Error: " . $insertar . "<br>" . $conexion->error;
}
$conexion->close();
     ?>



  </body>
</html>
