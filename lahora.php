<?php
  echo date("l"); // Displays the day of the week
  echo "<br>";
  echo date("d/m/Y");
  echo "<br>";

 echo date(' l j  F H:i:s  e P Z'); 
 echo "<br>";
 echo date('     r c'); 
 echo "<br><br>";
 

 // Con objetos
 $fecha_actual = new DateTime();
$cadena_fecha_actual = $fecha_actual->format("d/m/Y");
echo $cadena_fecha_actual;
echo "<br><br>";

$cadena_fecha_actual = date("d/m/Y");
echo $cadena_fecha_actual;
echo "<br><br>";



$date = date_create();
$cadena_fecha_actual = date_format($date, 'Y-m-d H:i:s');
echo $cadena_fecha_actual;
 ?>