<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- Listar usuarios -->
<form action="ListadoUsuario.php?listar=true" method="POST">
<input type="submit" value="LISTAR USUARIOS" >
</form>

    <?php

       //FUNCION INSERTADO

      function insertado(){
        //Conexion a base de datos y control de errores
        $conexion= new mysqli("localhost","root","root","juegos");
        if($conexion->connect_errno){
        echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
        }else{


          //Lo que tiene que mostrar por pantalla
          //Variables insertivas
          $nom=$_POST['nombre'];
          $ape=$_POST['apellidos'];
          $edad=$_POST['edad'];
          $curso=$_POST['curso'];
          $puntu=$_POST['puntua'];



          $info = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion)
                       VALUES ('$nom','$ape','$edad','$curso','$puntu')";
          $resultado=$conexion->query("SELECT * FROM usuarios ORDER BY id" );

            if ($conexion->query($info) === TRUE) {
                echo  " <h1> <br> Insertado Correctamente </h1>" ;
            }else{
                echo "Error: " . $info . "<br>" . $conexion->error;



                                      }
                  while ($fila=$resultado->fetch_assoc()) {
                  echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                                          }
          }

          // Comprobar si està vacio
        if (empty($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['curso'])) {
        echo "<h1>"."Algun campo esta vacio" . "</h1>";
                                              }


      }//cierre funcion insertado


function borrado(){
    //Conexion a base de datos y control de errores


    $conexion= new mysqli("localhost","root","root","juegos");
    if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
    }else{

      //Lo que tiene que mostrar por pantalla
      //Variables insertivas
      $id=$_POST['id'];
      $nom=$_POST['nombre'];
      $ape=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntu=$_POST['puntua'];


      $info = "DELETE FROM usuarios SET id=$id ";
      $resultado=$conexion->query("SELECT * FROM usuarios ORDER BY id" );

      if ($conexion->query($info) === TRUE) {
         echo " <br> Borrado Correctamente";
      }else{
         echo "Error: " . $info . "<br>" . $conexion->error;

                               }
           while ($fila=$resultado->fetch_assoc()) {
           echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                                   }
      }

      // Comprobar si està vacio
    if (empty($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['curso'])) {
    echo "<h1>"."Algun campo esta vacio" . "</h1>";
                                          }



      }//cierre funcion borrado

//Funcion listar

function listar(){
    //Conexion a base de datos y control de errores


    $conexion= new mysqli("localhost","root","root","juegos");
    if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
    }else{


      $resultado=$conexion->query("SELECT * FROM usuarios ORDER BY id" );


                               }
           while ($fila=$resultado->fetch_assoc()) {
           echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                 }




      }//cierre funcion listar



      function actualizado(){
          //Conexion a base de datos y control de errores


          $conexion= new mysqli("localhost","root","root","juegos");
          if($conexion->connect_errno){
          echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
          }else{

            //Lo que tiene que mostrar por pantalla
            //Variables insertivas
            $id=$_POST['id'];
            $nom=$_POST['nombre'];
            $ape=$_POST['apellidos'];
            $edad=$_POST['edad'];
            $curso=$_POST['curso'];
            $puntu=$_POST['puntua'];

            $info = "UPDATE usuarios SET nombre='".$nom."',apellidos='".$ape."',edad='".$edad."',curso='".$curso."',puntua='".$puntu." ' WHERE id=$id" ;
            $resultado=$conexion->query("SELECT * FROM usuarios  ORDER BY id" );

            if ($conexion->query($info) === TRUE) {
               echo " <br> Actualizado correctamente";
            }else{
               echo "Error: " . $info . "<br>" . $conexion->error;

                                     }
                 while ($fila=$resultado->fetch_assoc()) {
                 echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion'];
                                                         }
            }

            // Comprobar si està vacio
          if (empty($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['curso'])) {
          echo "<h1>"."Algun campo esta vacio" . "</h1>";
                                                }



            }//cierre funcion Actualizado


//tratamiento de datos

if (isset($_GET['actualizado'])) {
      actualizado();
   }else if(isset($_GET['insertado'])){
    insertado();
  }else if(isset($_GET['borrado'])){
    borrado();
  }
  //Listar
  if(isset($_GET['listar'])){
     listar();
}




$conexion->close();



     ?>

  </body>
</html>
