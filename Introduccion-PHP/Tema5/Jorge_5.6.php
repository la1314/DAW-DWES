<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.6</title>
    
    <style>
    
    thead tr td {
        color: red;
        
    }

    td:nth-child(2n+1) {
        background-color: yellow;
    }

    td:nth-child(2n) {
        background-color: aquamarine;
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

    echo("<table>");

    echo("<thead>");
    echo("<tr>");

    for ($i=1; $i < 11; $i++) { 

        echo("<td> Tabla del $i</td>");

    }

    echo("</tr>");
    echo("</thead>");

    for ($i=1; $i < 11; $i++) { 

        echo("<tr>");
        
        for ($e=1; $e < 11; $e++) { 

            $resultado = $i * $e;
            echo("<td>$resultado</td>");
        }

        echo("</tr>");
    }

    echo("</table>");

    ?>
    
</body>
</html>