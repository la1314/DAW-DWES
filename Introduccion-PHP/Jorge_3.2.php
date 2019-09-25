<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 3.2</title>
</head>
<body>
    
    <?php

        $number = 88;

        echo("La variable number contiene el valor entero: " . $number."<br>");

        echo("Variable number incrementada con nomber++ <br>");
        
        $number++;
        echo("La variable number contiene el valor: " . $number."<br>");
        

        echo("Variable number incrementada con ++number<br>");

        ++$number;
        echo("La variable number contiene el valor entero: " . $number."<br>");

        echo("Variable number incrementada con suma básica<br>");
       
        $number = $number + 1;
        echo("La variable number contiene el valor entero: " . $number."<br>");

        echo("Intentando concatenar un 1 a la variable number<br>");

        $number.= 1;
        echo("La variable number contiene el valor entero: " . $number."<br>");

    ?>

</body>
</html>