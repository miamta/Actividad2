<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejer 3 </title>
  </head>
  <body>
    <?php
     //variables
     $dado1="6";
     $dado2="5";
     $dado3="5";
     //declaracion de condiciones
     if($dado1=="6" && $dado2=="6" && $dado3=="6"){
       echo "<br> Oro";
     }elseif ($dado1=="6" && $dado2=="6" && $dado3=="5") {
       echo "<br> Plata";
     }elseif ($dado1=="6" && $dado2=="5" && $dado3=="5") {
       echo "<br> Bronce ";
     }

     ?>
  </body>
</html>
