
<?php
class PokePadre
{
  //Vida
  private $energy=50;
  //Nombre
  private $name="";

  function __construct()
  {
    # code...
  }
  //Getters y setters de live
  public function setEnergy($energy){
    $this->energy=$energy;
  }
  public function getEnergy(){
    return $this->energy;
  }
  //Getters y setters de name
  public function setName($name){
    $this->nombre=$name;
  }
  public function getName(){
    return $this->name;
  }
  //quitar live
  public function QuitarLive($valorQuitar){
    $this->energy=$this->energy-$valorQuitar;
  }
}


 ?>
