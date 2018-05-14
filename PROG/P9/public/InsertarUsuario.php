<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;

$baseDatos=new Db();
$baseDatos->conectar();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

  </head>
  <body>
    <h1>INSERTAR USUARIO</h1>
    <form method="post" action="ListadoUsuario.php">
      Nombre de usuario:
        <input type="text" name="usuario" value="<?=$baseDatos->getUsuario()?>" readonly></p>

      Nombre:
        <input type="text" name="nombre" value="<?=$baseDatos->getNombre()?>" id="nuevonombre" required></p>
      Apellidos:
          <input type="text" name="apellidos" value="<?=$baseDatos->getApellidos()?>" id="nuevoapellido" ></p>
      Año de nacimiento:
        <input type="text" name="edad" value="<?=$baseDatos->getEdad()?>" id="nuevoedad" ></p>
        Curso:
          <input type="text" name="curso" id="nuevocurso">


      Nombre de usuario
          <input type="text" name="usuario" value="" placeholder="Introduce tu usuario" required></p>
        Contraseña
          <input type="password" name="contrasenya" value="" placeholder="Introduce tu contraseña"></p>
        <p>Repite la contraseña <br>
          <input type="password" name="contrasenya2" value="" placeholder="Introduce tu contraseña"></p>



      <input type="submit" name="insertado" value="Insertar">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios-08.php'">Volver</button>
  </body>
</html>
