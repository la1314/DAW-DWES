<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.1</title>

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

    $iterante = 1;

    echo("<table>");
    echo("<th>Número</th>");
    echo("<th>Tipo</th>");
    echo("<th>Primo</th>");

    while( $iterante < 11 ){

        echo("<tr>");

        echo("<td>$iterante</td>");

        if ($iterante%2 == 0) {

            echo("<td>Par</td>");

        } else {

            echo("<td>Impar</td>");
        
        }
        
        if (esPrimo($iterante)) {

            echo("<td>Es primo</td>");

        } else {

            echo("<td>No es primo</td>");
        
        }
       
        
        echo("</tr>");



        $iterante++;
    }

    function esPrimo($number) {
        $cont=0;
        
        $i = 2;

        while ($i <= $number) {
            
            if($number % $i == 0) {
                
                if( ++$cont > 1 )

                    return false;

            }

            $i++;
        }
        
        return true;
    }

    echo("</table>");

    ?>

</body>
</html>