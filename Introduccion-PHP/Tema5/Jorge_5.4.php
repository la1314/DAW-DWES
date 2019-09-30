<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.4</title>
    <style>
    
    thead tr td {
        color: red;
    }

    td:nth-child(2n+1) {
        background-color: aquamarine;
    }

    td:nth-child(2n) {
        background-color: yellow;
    }
    
    table, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;  
    }

    </style>

</head>
<body>
    <?php

    $iterando = 1;
    $tablas = 1;

    echo("<table>");
    echo("<thead>");
    echo("<tr>");

    do {
        
        echo("<td> Tabla del $tablas</td>");

        $tablas++;

    } while ($tablas < 11);

    echo("</tr>");
    echo("</thead>");

    do {
    
        echo("<tr>");
        
        $i = 1;

        do {

            $resultado = $iterando * $i;
            echo("<td>$resultado</td>");
            $i++;
            
        } while ($i < 11);

        echo("</tr>");
        $iterando++;

    } while ($iterando < 11);

    echo("</table>");

    ?>

</body>
</html>