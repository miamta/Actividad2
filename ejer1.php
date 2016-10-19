<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 1</title>
  </head>
  <body>
    <?php
    //atributos
 $Puntuacion="65";
  //Declaracion de condiciones
  if($Puntuacion>=90 && $Puntuacion<=100){
    echo "Puede meterse en Sistemas";
  }elseif($Puntuacion>=80 && $Puntuacion<=90) {
    echo "<br> Puede meterse en Electronica ";
  }elseif($Puntuacion>=70 && $Puntuacion<=80) {
    echo "<br> Puede meterse en Industrial ";
  }elseif($Puntuacion>=60 && $Puntuacion<=70) {
    echo "<br> Puede meterse en Administracion ";
  }




      ?>
  </body>
</html>
