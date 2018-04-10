<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


//Conexion a base de datos y control de errores
    $conexion= new mysqli("localhost","root","root","juegos");
    if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
    }else{

    //Lo que tiene que mostrar por pantalla

    $insertar = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion)
                 VALUES ('$nom','$ape','$edad','$curso','$puntu')";
    $resultado=$conexion->query("SELECT * FROM usuarios ORDER BY id" );

      if ($conexion->query($insertar) === TRUE) {
          echo " <br> Insertado Correctamente";
      }else{
          echo "Error: " . $insertar . "<br>" . $conexion->error;

          //Variables insertivas
          $nom=$_POST['nombre'];
          $ape=$_POST['apellidos'];
          $edad=$_POST['edad'];
          $curso=$_POST['curso'];
          $puntu=$_POST['puntua'];

                                }
            while ($fila=$resultado->fetch_assoc()) {
            echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                                    }
    }




    if (empty($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['curso'])) {
      echo "<h1>"."Algun campo esta vacio" . "</h1>";
                 }
$conexion->close();



     ?>



  </body>
</html>
