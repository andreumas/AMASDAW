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
    <title>Actualizar</title>
  </head>
  <body>
    <h1>ACTUALIZAR USUARIO</h1>
    <form name="enviar" method="post" action="listadoUsuarios-08.php" >

        <?php
        $baseDatos->leerDatos();
        ?>
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

        <input type="submit" class="actualizar" name="actualizado" value="Actualizar">

    </form>
  </body>
</html>
