<?php

require_once "lib/PokePadre.php";
/**
 *
 */
class GaboMan  extends PokePadre
{

  function __construct($name)
  {
    parent::setName($name);
    parent::setEnergy(1000);
  }

}







 ?>
