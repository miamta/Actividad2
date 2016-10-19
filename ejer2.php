<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejer 2 </title>
  </head>
  <body>
    <?php
    //definicion de variables
     $colegio="Particular";
     $nivel="C";

//definicion de condiciones
if($colegio=="Nacional" && $nivel=="A"){
  echo "<br> 300€";
}elseif ($colegio=="Nacional" && $nivel=="B") {
  echo "<br> 200€ ";
}elseif ($colegio=="Nacional" && $nivel=="C") {
  echo "<br> 100€ ";
}elseif ($colegio=="Particular" && $nivel=="A") {
  echo "<br> 400€ ";
}elseif ($colegio=="Particular" && $nivel=="B") {
  echo "<br> 300€ ";
}elseif ($colegio=="Particular" && $nivel=="C") {
  echo "<br> 200€ ";
}


     ?>
  </body>
</html>
