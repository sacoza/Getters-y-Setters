<?php
/**
 * Clase gato hecha por Ana Asins
 */
class claseGato
{
  //Declaracion de atributos
  public $NumeroPatas = '4 patas';
  public $Color = 'Naranja';
  public $Raza = 'Garfield';
  public $Tamano = '60cm';

  //Declaracion de metodos

  //Numero de patas
    public function setNumeroPatas($nuevoNumeroPatas){
      $this->numeroPatas=$nuevoNumeroPatas;
    }

    public function getNumeroPatas(){
      return $this->numeroPatas;
    }


    //color
    public function setColor($nuevoColor){
      $this->color=$nuevoColor;
    }

    public function getColor(){
      return $this->color;
    }

    //raza
    public function setRaza($nuevoRaza){
      $this->raza=$nuevoRaza;
    }

    public function getRaza(){
      return $this->raza;
    }

    //tamano
    public function setTamano($nuevoTamano){
      $this->tamano=$nuevoTamano;
    }

    public function getTamano(){
      return $this->tamano;
    }
}

 ?>
