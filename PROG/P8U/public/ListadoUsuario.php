<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;

$baseDatos=new Db();
$baseDatos->conectar();

if (isset($_POST["insertado"])){
  $baseDatos->insertarUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['usuario'],$_POST['contrasenya']);
}
if (isset($_POST["borrado"])){
  $baseDatos->borrarUsuario($_POST["usuario"]);
}
if (isset($_POST["actualizado"])){
  $baseDatos->actualizarUsuario($_POST["usuario"],$_POST["nombre"],$_POST["apellidos"],$_POST["edad"],$_POST["curso"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios</title>
  </head>
  <body>
    <br><br>
      <fielset>
        <legend>Selecciona tu usuario.</legend>
        <form class="form" action="" method="post" name="form">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" value="Empezar"></input>

        </form>
      </fielset>
    <br><br>
      <!--nuevo usuario-->

        <button type="button" name="button" onclick="location.href='InsertarUsuario.php'">Crear nuevo usuario</button>


      <!--borrar usuario-->

        <form class="user" method="post" action="" >
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" name="borrar" value="Borrar"></input>
        </form>

      <!--modificar usuario-->

        <form class="user" action="ActualizarUsuario.php" method="post">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" value="Actualizar"></input>
        </form>

  </body>
</html>
