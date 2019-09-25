<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3.1</title>

</head>
<body>
    
    <?php

        $number = 15;
        
        
        echo( "El resultado de la funcion is_int() sobre la variable number con un entero es: " . is_int($number)."<br>");

        $booleano = true;

        echo("El resultado de la funcion is_int() sobre la variable booleano con un boolean es: " . is_int($booleano)."<br>");
       
        $string = "Hola Mundo";

        echo("El resultado de la funcion is_int() sobre la variable string con un string es: " . is_int($string)."<br>");

        $flotante = 1.15;

        echo("El resultado de la funcion is_int() sobre la variable flotante con un float es: " . is_int($flotante)."<br>");

      
    ?>

</body>
</html>