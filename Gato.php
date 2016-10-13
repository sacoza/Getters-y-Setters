<DOCTYPE html>
<html>
  <head>
    <meta charset="utf=8">
    <title> Probando clase </title>
  </head>
  <body>
<?php
  //Clase de mi compañero
  include 'clasegato.php';
  //genaramos los objetos
  $gato1 = New claseGato;
  $gato1-> setNumeroPatas('4 patas');
  echo "NumeroPatas: " .$gato1->getNumeroPatas();

  $gato1-> setColor('Naranja');
  echo "<br>Color: " .$gato1->getColor();

  $gato1-> setRaza('Garfield');
  echo "<br>Raza: " .$gato1->getRaza();

  $gato1-> setTamano('60cm');
  echo "<br>Tamano: " .$gato1->getTamano();
?>
