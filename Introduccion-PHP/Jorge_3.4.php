<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 3.4</title>
</head>
<body>
    
    <?php

        $valor1 = 1919;
        $valor2 = 1919;

        echo("Comparación con preincremento<br>");

        if ($valor1++ === $valor2) {

            echo("Son iguales<br>");
            
        }else {
            echo("No son iguales");
        }

        echo("<br>Comparación con postincremento<br>");

        if (++$valor1 === $valor2) {
            echo("Son iguales");
        }else {
            echo("No son iguales");
        }

    ?>

</body>
</html>