<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 3.3</title>
</head>
<body>
    
    <?php

        $valor1 = 4;
        $valor2 = 8;

        echo("Se comprobarán 2 valores siedo el primero " . $valor1 . " y el segundo " . $valor2 . "<br>");

        if ( $valor1 === $valor2 ) {

            echo("Igual a la segunda<br>");

        }
        
        if ( $valor1 > $valor2 ) {

            echo("Mayor que la segunda<br>");

        }
        
        if ( $valor1 <= $valor2 ) {
            
            echo("menor o igual que la segunda<br>");

        }
        
        if ( $valor1 != $valor2 ) {

            echo("No igual a la segunda<br>");

        }
        
    

    ?>

</body>
</html>