<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web</title>
</head>
<body>
    <p>hola</p>
   <h1 style= "color:blue; text-align: center;">Bienvenido a mi primera web</h1> 
   <p style= "color:blue; text-align: center;"><?php
   echo "Hola, mundo! Esta es una página de ejemplo en PHP.";
   ?></p>

   <?php 
   // comentarios en php
   echo "</br>";
   echo "Hola, mundo!";
   echo "</br>";
   echo "Este es otro mensaje"; 
   echo "</br>"; 
   // variables en php
   $num1 = 10;
   $num2 = 2.5;
   echo "<h2>num1 incrementando: $num1, $num2 multiplicando por 2: $num2</h2>";
   // Operaciones aritméticas
   $suma = $num1 + $num2;
   $resta = $num1 - $num2;
   $multiplicacion = $num1 * $num2;
   $division = $num1 / $num2;
   ?>
</body>

</html>