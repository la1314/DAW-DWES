<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.5</title>

    <style>

    th {
        color: red;
        background-color: yellow;
    }

    td {
        background-color: aquamarine;
    }
    
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        
    }

    </style>

</head>
<body>
    
<?php

    echo("<table>");
    echo("<th>Número</th>");
    echo("<th>Tipo</th>");
    echo("<th>Primo</th>");

    for ($i = 1; $i < 11; $i++) { 
        
        echo("<tr>");

        echo("<td>$i</td>");

        if ( $i%2 == 0) {

            echo("<td>Par</td>");

        } else {

            echo("<td>Impar</td>");
        }
        
        if (esPrimo($i)) {

            echo("<td>Es primo</td>");

        } else {

            echo("<td>No es primo</td>");
        
        }
    
        echo("</tr>");

    }

    function esPrimo($number) {
        $cont=0;

        for ($i=2; $i <= $number ; $i++) { 
            
            if($number % $i == 0) {
                
                if( ++$cont > 1 )

                    return false;

            }
            
        }

        return true;
    }

    echo("</table>");

    ?>

</body>
</html>