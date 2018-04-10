<?php
//Buena Gente
require "lib/buenagente/AndreuGood.php";
  require "lib/buenagente/GaboMan.php";
//Mala gente
require "lib/malagente/PacoFly.php";
  require "lib/malagente/SebasBar.php";

$primerBueGente= new AndreuGood("Primer Andreu");
$primerMalGente= new PacoFly("Primer Paco");
$segundoBueGente= new GaboMan("Primer GaboMan");
$tercerBueGente=$segundoBueGente;

$segundoBueGente->QuitarLive(7);
$tercerBueGente->QuitarLive(7);

$masaDeAndreuGood=[];
for ($i=0; $i < 10; $i++) {
  $masaDeAndreuGood[]=new AndreuGood("AndreuGood".$i);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A9</title>
  </head>
  <body>
    <?php
    echo "Primer Pokemon tiene ". $primerBueGente->getEnergy()." de Energia<br>";
    echo "Segundo Pokemos tiene ". $segundoBueGente->getEnergy()." de Energia<br>";
    echo $masaDeAndreuGood[8]->getName()." tiene ". $masaDeAndreuGood[8]->getEnergy()." de Energia";
    ?>
  </body>
</html>
