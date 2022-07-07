<!DOCTYPE html>
<html>
    <body>

   <?php
   //comprobar si el tipo de una variable es entero 
   $x = 6576;
   var_dump(is_int($x));

   echo "<br>"; 

   //revisar otra vez 
   $y = 9898;
   var_dump(is_int($y));
   echo "<br>"
   ?>

  <?php
  echo(min(0, 56, 48, 15, -5, -230) . "<br>");
  echo(max(0, 26, 34, 76, -27, -547));
  ?>
    </body>
</html>