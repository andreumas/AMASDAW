<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <h1>ACTUALIZAR USUARIO</h1>
    <form name="enviar" method="post" action="ListadoUsuario.php" >

        <?php
        $baseDatos->leerDatos();
        ?>
      ID:
      <input type="text" name="id" value="" id="id">

        <input type="submit" class="borrado" name="borrado" value="Borrar">

    </form>
  </body>
</html>
